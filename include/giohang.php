<?php
if(isset($_POST['themgiohang'])){
	$tensanpham=$_POST['tensanpham'];
	$idsanpham=$_POST['idsanpham'];
	$hinhanh=$_POST['hinhanh'];
	$gia=$_POST['giasanpham'];
	$soluong=$_POST['soluong'];
	$sql_select_giohang=mysqli_query($khangduy,"SELECT * FROM giohang WHERE idsanpham='$idsanpham'");
	$count=mysqli_num_rows($sql_select_giohang);
	if($count>0){
		$row_sanpham=mysqli_fetch_array($sql_select_giohang);
		$soluong=$row_sanpham['soluong']+1;
		$sql_giohang="UPDATE giohang SET soluong='$soluong' WHERE idsanpham='$idsanpham'";
	}else{	
		$soluong=$soluong;
		$sql_giohang="INSERT INTO giohang(tensanpham,idsanpham,giasanpham,hinhanh,soluong) values ('$tensanpham','$idsanpham','$gia','$hinhanh','$soluong')";
	}
	$insert_row=mysqli_query($khangduy,$sql_giohang);
	if($insert_row<=0){
		header('Location:index.php?quanly=chitietsp&id='.$idsanpham);
	}

}else if(isset($_POST['capnhapsoluong'])){

	for($i=0;$i<count($_POST['product_id']);$i++){
		$idsanpham=$_POST['product_id'][$i];
		$soluong=$_POST['soluong'][$i];
		if($soluong==0){
			$sql_delete=mysqli_query($khangduy,"DELETE FROM giohang WHERE idsanpham='$idsanpham'");
		}else{
			$sql_capnhap=mysqli_query($khangduy,"UPDATE giohang SET soluong='$soluong' WHERE idsanpham='$idsanpham'");
		}
	}
}else if(isset($_GET['xoa'])){
		$id=$_GET['xoa'];
		$sql_delete=mysqli_query($khangduy,"DELETE FROM giohang WHERE idgiohang='$id'");

}elseif(isset($_GET['dangxuat'])){
	$id=$_GET['dangxuat'];
	if($id==1){	
		unset($_SESSION['dangnhap_home']);
	}
////// 1.Khi Click thanh toan 
}elseif(isset($_POST['thanhtoan'])){
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$password=md5($_POST['password']);
	$address=$_POST['address'];
	$note=$_POST['note'];
	$giaohang=$_POST['giaohang'];
	$sql_khachhang1=mysqli_query($khangduy,"INSERT INTO khachhang(name,phone,email,address,note,giaohang,password) values ('$name','$phone','$email','$address','$note','$giaohang','$password')");

	///// THEM THONG TIN GIO HANG, KHACH HANG VAO DON HANG VOI MA DON HANG RANDOM
	if($sql_khachhang1==1){
		$sql_select_khachhang=mysqli_query($khangduy,"SELECT * FROM khachhang ORDER BY id_khachhang DESC LIMIT 1");
		$mahang=rand(0,9999);
		$row_khachhang=mysqli_fetch_array($sql_select_khachhang);
		$id_khachhang=$row_khachhang['id_khachhang'];
		$_SESSION['dangnhap_home']=$row_khachhang['name'];
		$_SESSION['id_khachhang']=$id_khachhang;
		for($i=0;$i<count($_POST['thanhtoan_product_id']);$i++){
		$id_sanpham=$_POST['thanhtoan_product_id'][$i];
		$soluong=$_POST['thanhtoan_soluong'][$i];
		///2. Them vao don hang
		$sql_donhang=mysqli_query($khangduy,"INSERT INTO donhang(id_sanpham,id_khachhang,soluong,mahang) values ('$id_sanpham','$id_khachhang','$soluong','$mahang')"); 
		////3. Xoa gio hang de tao gio hang moi
		$sql_delete_thanhtoan=mysqli_query($khangduy,"DELETE FROM giohang WHERE idsanpham='$id_sanpham'");
	}
	}
}elseif(isset($_POST['thanhtoandangnhap'])){
	$khachhang_id=$_SESSION['id_khachhang'];
	$mahang=rand(0,9999);
	///// THEM THONG TIN GIO HANG, KHACH HANG VAO DON HANG VOI MA DON HANG RANDOM
		for($i=0;$i<count($_POST['thanhtoan_product_id']);$i++){
		$id_sanpham=$_POST['thanhtoan_product_id'][$i];
		$soluong=$_POST['thanhtoan_soluong'][$i];
		///2. Them vao don hang
		$sql_donhang=mysqli_query($khangduy,"INSERT INTO donhang(id_sanpham,id_khachhang,soluong,mahang) values ('$id_sanpham','$khachhang_id','$soluong','$mahang')"); 
							$mess=" BẠN ĐÃ ĐẶT HÀNG THÀNH CÔNG ";
    						echo"<script type='text/javascript'>var kq=confirm('$mess');
    						if(kq){window.location='index.php?quanly=giohang'};</script>";
		////3. Xoa gio hang de tao gio hang moi
		$sql_delete_thanhtoan=mysqli_query($khangduy,"DELETE FROM giohang WHERE idsanpham='$id_sanpham'");

	}
	}
?>

<!-- checkout page -->
	<div class="privacy py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<b>Giỏ hàng</b>
			</h3>
			<?php
				if(isset($_SESSION['dangnhap_home'])){
					echo '<p style="color:red;"class="tenkhachhang">XIN CHÀO BẠN :'.$_SESSION['dangnhap_home'].'<a href="index.php?quanly=giohang&dangxuat=1"> Đăng xuất </a></p>';
				}else{
					echo '';
				}
				?>
			<!-- //tittle heading -->
			<div class="checkout-right">
				<?php 	
					$sql_lay_giohang=mysqli_query($khangduy,"SELECT * FROM giohang ORDER BY idgiohang DESC");
				?>
				<div class="table-responsive">
					<form action="" method="POST">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>STT</th>
								<th>Sản phẩm</th>   
								<th>Số lượng</th>
								<th>Tên sản phẩm</th>

								<th>Giá</th>
								<th>Tổng giá</th>
								<th>Quản lý</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							$i=0;
							$total=0;
							while($row_lay_giohang=mysqli_fetch_array($sql_lay_giohang)){
								$tongtien=$row_lay_giohang['soluong'] * $row_lay_giohang['giasanpham'];
								$total+=$tongtien;
								$i++;
							?>
							<tr class="rem1">
								<td class="invert"><?php echo $i ?></td>
								<td class="invert-image">
									<a href="single.html">
										<img src="images/<?php echo $row_lay_giohang['hinhanh'] ?>" style="width:150px; height: 150px" alt=" " class="img-responsive">
									</a>
								</td>
								<td class="invert">
									<input type="number" min="0" name="soluong[]" value="<?php echo $row_lay_giohang['soluong'] ?>">
									<input type="hidden" name="product_id[]" value="<?php echo $row_lay_giohang['idsanpham'] ?>">
							
									<!-- <input type="submit	" class="btn btn-success"value ="Cập nhập" name="capnhapsoluong"> -->
								</td> 
								<td class="invert"><?php echo $row_lay_giohang['tensanpham'] ?></td>
								<td class="invert"><?php echo number_format($row_lay_giohang['giasanpham'])." VND "?></td>
								<td class="invert"><?php echo number_format($tongtien)." VND " ?></td>
								<td class="invert">
									<a href="?quanly=giohang&xoa=<?php echo $row_lay_giohang['idgiohang']?>">Xóa</a>
								</td>
							</tr>
						<?php
						}
						?>
						<tr>
							<td colspan ="7">Tổng tiền: <?php echo number_format($total)." VND " ?></td>
						</tr>
						<tr>
							<td colspan ="7"><input type="submit" class="btn btn-success"value ="Cập nhập" name="capnhapsoluong"></td>
							<?php 
							$sql_giohang_select=mysqli_query($khangduy,"SELECT * FROM giohang");
							$count_giohang_select=mysqli_num_rows($sql_giohang_select);

							///Kiem tra ton tai san pham thi moi hien thi nut thanh toan
							if(isset($_SESSION['dangnhap_home']) && $count_giohang_select>0){
								while($row_1=mysqli_fetch_array($sql_giohang_select)){
							?>
							<input type="hidden" name="thanhtoan_product_id[]" value="<?php echo $row_1['idsanpham'] ?>">
							<input type="hidden" name="thanhtoan_soluong[]" value="<?php echo $row_1['soluong'] ?>">
							<?php
							}
							?>
							<td><input type="submit" class="btn btn-primary"value ="Thanh toán giỏ hàng" name="thanhtoandangnhap"></td>	
							
							<?php
							}	
							?>
						</tr>
						</tbody>
					</table>
					</form>
				</div>
			</div>
			<?php 
			if(!isset($_SESSION['dangnhap_home'])){
			?>
			<div class="checkout-left">
				<div class="address_form_agile mt-sm-5 mt-4">
					<h4 class="mb-sm-4 mb-3">Thêm địa chỉ</h4>
					<form action="" method="post" class="creditly-card-form agileinfo_form">
						<div class="creditly-wrapper wthree, w3_agileits_wrapper">
							<div class="information-wrapper">
								<div class="first-row">
									<div class="controls form-group">
										<input class="billing-address-name form-control" type="text" name="name" placeholder="Nhập tên" required="">
									</div>
									<div class="w3_agileits_card_number_grids">
										<div class="w3_agileits_card_number_grid_left form-group">
											<div class="controls">
												<input type="text" class="form-control" placeholder="SĐT" name="phone" required="">
											</div>
										</div>
										<div class="w3_agileits_card_number_grid_right form-group">
											<div class="controls">
												<input type="text" class="form-control" placeholder="Địa chỉ" name="address" required="">
											</div>
										</div>
									</div>
									<div class="controls form-group">
										<input type="text" class="form-control" placeholder="Email" name="email" required="">
									<div class="controls">
												<input type="text" class="form-control" placeholder="password" name="password" required="">
											</div>
										<textarea style="resize: none" class="form-control" placeholder="Ghi chú" name="note" required=""></textarea> 
									</div>
									<div class="controls form-group">
										<select class="option-w3ls" name="giaohang">
											<option>Hình thức thanh toán</option>
											<option value="1">Thanh toán ATM</option>
											<option value="0">Thanh toán tiền mặt tại nhà</option>	
										</select>
									</div>
								</div>
								<?php
								$sql_lay_giohang=mysqli_query($khangduy,"SELECT * FROM giohang ORDER BY idgiohang DESC"); 
								while($row_thanhtoan = mysqli_fetch_array($sql_lay_giohang)){
								?>
									<input type="hidden" name="thanhtoan_product_id[]" value="<?php echo $row_thanhtoan['idsanpham'] ?>">
									<input type="hidden" name="thanhtoan_soluong[]" value="<?php echo $row_thanhtoan['soluong'] ?>">
								<?php
								}
								?>
								<input type="submit" name="thanhtoan" class="btn btn-success" style="width: 30%" value="Thanh toán">
							</div>
						</div>
					</form>
				</div>
			</div>
			<?php 
			}
			?>
		</div>
	</div>
	<!-- //checkout page -->