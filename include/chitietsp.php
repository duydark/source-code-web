
<?php 
//////////////TRUY XUẤT DỮ LIỆU CHI TIẾT SP TỪ DB
	if(isset($_GET['id'])){
		$id=$_GET['id'];
	}else{
		$id='';
	}
	$sql_chitiet=mysqli_query($khangduy,"SELECT * FROM sanpham WHERE id_sanpham='$id'");

?>


<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.php">Trang chủ</a>
						<i>|</i>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<?php
	while($row_chitiet=mysqli_fetch_array($sql_chitiet)){     ////LAY TOAN BO THONG TIN CUA DB SANPHAM
	?>
	<!-- Single Page -->
	<div class="banner-bootom-w3-agileits py-5">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>Chi</span>
				<span>Tiết</span></h3>
			<!-- //tittle heading -->
			<div class="row">
				<div class="col-lg-5 col-md-8 single-right-left ">
					<div class="grid images_3_of_2">
						<div class="flexslider">
							<ul class="slides">
								<li data-thumb="images/<?php echo $row_chitiet['image_sanpham']?>">
									<div class="thumb-image">
										<img src="images/<?php echo $row_chitiet['image_sanpham']?>" data-imagezoom="true" class="img-fluid" alt=""> </div>
								</li>
							</ul>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>

				<div class="col-lg-7 single-right-left simpleCart_shelfItem">
					<h3 class="mb-3"><?php echo $row_chitiet['ten_sanpham']?></h3> <!-- LAY TEN CUA SAN PHAM  -->
					<p class="mb-3">
						<span class="item_price"><?php echo number_format($row_chitiet['giakm_sanpham']).' VND ' ?></span> <!-- LAY GIA CUA SAN PHAM -->
						<del class="mx-2 font-weight-light"><?php echo number_format($row_chitiet['gia_sanpham']).' VND ' ?></del>
						<label><b>Miễn phí vận chuyển</b></label>
					</p>
				
					<div class="product-single-w3l">
						<p> <?php echo $row_chitiet['chitiet_sanpham']?> </p><br><br> <!-- DIV CUA MOTA VA CHI TIET -->
						<p> <?php echo $row_chitiet['mota_sanpham']?> </p>
					</div>
					<div class="occasion-cart">
						<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
							<form action="?quanly=giohang" method="post">
								<fieldset>
									<input type="hidden" name="tensanpham" value="<?php echo $row_chitiet['ten_sanpham']?>" />
									<input type="hidden" name="idsanpham" value="<?php echo $row_chitiet['id_sanpham']?>" />
									<input type="hidden" name="giasanpham" value="<?php echo $row_chitiet['gia_sanpham']?>" />
									<input type="hidden" name="hinhanh" value="<?php echo $row_chitiet['image_sanpham']?>" />
									<input type="hidden" name="soluong" value="1" />
									<input type="submit" name="themgiohang" value="Thêm vào giỏ hàng" class="button" />
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //Single Page -->
	<?php 
	}
	?>