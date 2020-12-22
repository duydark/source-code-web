<?php
	include('../db/connect.php');
?>
<?php
	if(isset($_POST['themsanpham'])){
		$tensanpham = $_POST['tensanpham'];
		$hinhanh = $_FILES['hinhanh']['name'];
		$soluong = $_POST['soluong'];
		$gia = $_POST['giasanpham'];
		$giakhuyenmai = $_POST['giakhuyenmai'];
		$danhmuc = $_POST['danhmuc'];
		$noidung = $_POST['noidung'];
		$mota = $_POST['mota'];
		$path = '../uploads/';
		$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];



		
		$sql_insert_product = mysqli_query($khangduy,"INSERT INTO sanpham(id_danhmuc,ten_sanpham,noidung_sanpham,mota_sanpham,gia_sanpham,giakm_sanpham,soluong_sanpham,image_sanpham) values ('$danhmuc','$tensanpham','$noidung','$mota','$gia','$giakhuyenmai','$soluong','$hinhanh')");
		move_uploaded_file($hinhanh_tmp,$path.$hinhanh);
	}
	
?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sản phẩm</title>
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
		<?php
	session_start(); 
  if(isset($_SESSION['id_admin'])){?>
    <p> Xin chào -:- <?php echo $_SESSION['dangnhap'] ?> <a href="logout.php"> Đăng xuất </a></p>
  <?php
  }else{
    header('Location:index.php');
  }
  ?>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item active">
	        <a class="nav-link" href="donhang_admin.php">Đơn hàng <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="danhmuc_admin.php">Danh mục</a>
	      </li>
	       <li class="nav-item">
			        <a class="nav-link" href="danhmucbaiviet_admin.php">Danh mục bài viết</a>
			</li>
			  <li class="nav-item">
			        <a class="nav-link" href="baiviet_admin.php">Bài viết</a>
			      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="sanpham_admin.php">Sản phẩm</a>
	      </li>
	       <li class="nav-item">
	         <a class="nav-link disabled" href="khachhang_admin.php">Khách hàng</a>
	      </li>
	      
	    </ul>
	  </div>
	</nav><br><br>
	<div class="container">
		<div class="row">
		<?php
			if(isset($_GET['quanly'])=='capnhat'){
				$id_capnhat = $_GET['capnhat_id'];
				$sql_capnhat = mysqli_query($khangduy,"SELECT * FROM sanpham WHERE id_sanpham='$id_capnhat'");
				$row_capnhat = mysqli_fetch_array($sql_capnhat);
				$id_category_1 = $row_capnhat['id_danhmuc'];
				?>
				<div class="col-md-4">
				<h4>Cập nhật sản phẩm</h4>
				
				<form action="" method="POST" enctype="multipart/form-data">
					<label>Tên sản phẩm</label>
					<input type="text" class="form-control" name="tensanpham" value="<?php echo $row_capnhat['ten_sanpham'] ?>"><br>
					<input type="hidden" class="form-control" name="id_update" value="<?php echo $row_capnhat['id_sanpham'] ?>">
					<label>Hình ảnh</label>
					<input type="file" class="form-control" name="hinhanh"><br>
					<img src="../uploads/<?php echo $row_capnhat['image_sanpham'] ?>" height="80" width="80"><br>
					<label>Giá</label>
					<input type="text" class="form-control" name="giasanpham" value="<?php echo $row_capnhat['gia_sanpham'] ?>"><br>
					<label>Giá khuyến mãi</label>
					<input type="text" class="form-control" name="giakhuyenmai" value="<?php echo $row_capnhat['giakm_sanpham'] ?>"><br>
					<label>Số lượng</label>
					<input type="text" class="form-control" name="soluong" value="<?php echo $row_capnhat['soluong_sanpham'] ?>"><br>
					<label>Mô tả</label>
					<textarea class="form-control" rows="10" name="mota"><?php echo $row_capnhat['mota_sanpham'] ?></textarea><br>
					<label>Chi tiết</label>
					<textarea class="form-control" rows="10" name="noidung"><?php echo $row_capnhat['chitiet_sanpham'] ?></textarea><br>
					<label>Danh mục</label>
					<?php
					$sql_danhmuc = mysqli_query($khangduy,"SELECT * FROM danhmuc ORDER BY id_danhmuc DESC"); 
					?>
					<select name="danhmuc" class="form-control">
						<option value="0">-----Chọn danh mục-----</option>
						<?php
						while($row_danhmuc = mysqli_fetch_array($sql_danhmuc)){
							if($id_category_1==$row_danhmuc['id_danhmuc']){
						?>
						<option selected value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['ten_danhmuc'] ?></option>
						<?php 
							}else{
						?>
						<option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['ten_danhmuc'] ?></option>
						<?php
						}
						}
						?>
					</select><br>
					<input type="submit" name="capnhatsanpham" value="Cập nhật sản phẩm" class="btn btn-default">
				</form>
				</div>
			<?php
			}else{
				?> 
				<div class="col-md-4">
				<h4>Thêm sản phẩm</h4>
				
				<form action="" method="POST" enctype="multipart/form-data">
					<label>Tên sản phẩm</label>
					<input type="text" class="form-control" name="tensanpham" placeholder="Tên sản phẩm"><br>
					<label>Hình ảnh</label>
					<input type="file" class="form-control" name="hinhanh"><br>
					<label>Giá</label>
					<input type="text" class="form-control" name="giasanpham" placeholder="Giá sản phẩm"><br>
					<label>Giá khuyến mãi</label>
					<input type="text" class="form-control" name="giakhuyenmai" placeholder="Giá khuyến mãi"><br>
					<label>Số lượng</label>
					<input type="text" class="form-control" name="soluong" placeholder="Số lượng"><br>
					<label>Mô tả</label>
					<textarea class="form-control" name="mota"></textarea><br>
					<label>Chi tiết</label>
					<textarea class="form-control" name="noidung"></textarea><br>
					<label>Danh mục</label>
					<?php
					$sql_danhmuc = mysqli_query($khangduy,"SELECT * FROM danhmuc ORDER BY id_danhmuc DESC"); 
					?>
					<select name="danhmuc" class="form-control">
						<option value="0">-----Chọn danh mục-----</option>
						<?php
						while($row_danhmuc = mysqli_fetch_array($sql_danhmuc)){
						?>
						<option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['ten_danhmuc'] ?></option>
						<?php 
						}
						?>
					</select><br>
					<input type="submit" name="themsanpham" value="Thêm sản phẩm" class="btn btn-default">
				</form>
				</div>
				<?php
			} 
			
				?>
			<div class="col-md-8">
				<h4>Liệt kê sản phẩm</h4>
				<?php
				$sql_select_sp = mysqli_query($khangduy,"SELECT * FROM sanpham,danhmuc WHERE sanpham.id_danhmuc=danhmuc.id_danhmuc ORDER BY sanpham.id_sanpham DESC"); 
				?> 
				<table class="table table-bordered ">
					<tr>
						<th>Thứ tự</th>
						<th>Tên sản phẩm</th>
						<th>Hình ảnh</th>
						<th>Số lượng</th>
						<th>Danh mục</th>
						<th>Giá sản phẩm</th>
						<th>Giá khuyến mãi</th>
						<th>Quản lý</th>
					</tr>
					<?php
					$i = 0;
					while($row_sp = mysqli_fetch_array($sql_select_sp)){ 
						$i++;
					?> 
					<tr>
						<td><?php echo $i ?></td>
						<td><?php echo $row_sp['ten_sanpham'] ?></td>
						<td><img src="../uploads/<?php echo $row_sp['image_sanpham'] ?>" height="100" width="80"></td>
						<td><?php echo $row_sp['soluong_sanpham'] ?></td>
						<td><?php echo $row_sp['ten_danhmuc'] ?></td>
						<td><?php echo number_format($row_sp['gia_sanpham']).'vnđ' ?></td>
						<td><?php echo number_format($row_sp['giakm_sanpham']).'VND' ?></td>
						<td><a href="?xoa=<?php echo $row_sp['id_sanpham'] ?>">Xóa</a> || <a href="sanpham_admin?quanly=capnhat&capnhat_id=<?php echo $row_sp['id_sanpham'] ?>">Cập nhật</a></td>
					</tr>
					<?php
					} 
					?> 
				</table>
			</div>
		</div>
	</div>
</body>
</html>