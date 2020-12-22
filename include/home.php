<!-- top Products -->
	<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<h3 style="padding: 10px;text-align: center;">Danh mục sản phẩm</h3>
			<!-- //tittle heading -->
			<div class="row">
				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-9">
					<div class="wrapper">
						<?php 
						$sql_danhmuc_home=mysqli_query($khangduy,"SELECT * FROM danhmuc ORDER BY id_danhmuc DESC");
						while($row_danhmuc_home=mysqli_fetch_array($sql_danhmuc_home)){
							$id_danhmuc1=$row_danhmuc_home['id_danhmuc'];
						?>
						<!-- first section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<h3 class="heading-tittle text-center font-italic"><?php echo $row_danhmuc_home['ten_danhmuc']?></h3>
							<div class="row">
								<?php 
								$sql_sanpham=mysqli_query($khangduy,"SELECT * FROM sanpham ORDER BY id_sanpham DESC");
								while($row_sanpham=mysqli_fetch_array($sql_sanpham)){
									if($row_sanpham['id_danhmuc']==$id_danhmuc1){
								?>
								<div class="col-md-4 product-men mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img src="images/<?php echo $row_sanpham['image_sanpham'] ?>" style="width:150px; height: 150px" alt=""/>
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="?quanly=chitietsp&id=<?php echo $row_sanpham['id_sanpham']?>" class="link-product-add-cart">Xem sản phẩm</a>
												</div>
											</div>
										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="?quanly=chitietsp&id=<?php echo $row_sanpham['id_sanpham']?>"><?php echo $row_sanpham['ten_sanpham']?></a>
											</h4>
											<div class="info-product-price my-2">
												<pre><span class="item_price"><?php echo number_format($row_sanpham['giakm_sanpham'])." VND "?></span></pre>
												<del><?php echo number_format($row_sanpham['gia_sanpham'])." VND "?></del>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												<form action="?quanly=giohang" method="post">
													<fieldset>
												<input type="hidden" name="tensanpham" value="<?php echo $row_sanpham['ten_sanpham']?>" />
												<input type="hidden" name="idsanpham" value="<?php echo $row_sanpham['id_sanpham']?>" />
												<input type="hidden" name="giasanpham" value="<?php echo $row_sanpham['gia_sanpham']?>" />
												<input type="hidden" name="hinhanh" value="<?php echo $row_sanpham['image_sanpham']?>" />
												<input type="hidden" name="soluong" value="1" />
												<input type="submit" name="themgiohang" value="Thêm vào giỏ hàng" class="button" />
													</fieldset>
												</form>
											</div>
										</div>
									</div>
								</div>
								<?php 
								}
								}
								?>
								
							</div>
						</div>
						<!-- //first section -->
						<?php 
						}	
						?>
					</div>
				</div>
				<!-- //product left -->

				<!-- product right -->
				<div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
					<div class="side-bar p-sm-4 p-3">
						<div class="search-hotel border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Tìm kiếm</h3>
							<form action="#" method="post">
								<input type="search" placeholder="Sản phẩm..." name="search" required="">
								<input type="submit" value=" ">
							</form>
						</div>
						<!-- price -->
						<div class="range border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Giá</h3>
							<div class="w3l-range">
								<ul>
									<li>
										<a href="#">Dưới 10 Triệu </a>
									</li>
								</ul>
							</div>
						</div>
						<!-- //price -->
						<!-- discounts -->
						
						<!-- //discounts -->
						<!-- reviews -->
						<div class="customer-rev border-bottom left-side py-2">
							<h3 class="agileits-sear-head mb-3">Customer Review</h3>
							<ul>
								<li>
									<a href="#">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<span>5.0</span>
									</a>
								</li>
							</ul>
						</div>
						<!-- //reviews -->
						<!-- electronics -->
						<div class="left-side border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Danh mục sản phẩm</h3>
							<ul>
								<?php 
								$sql_danhmuc_sidebar=mysqli_query($khangduy,"SELECT * FROM danhmuc ORDER BY id_danhmuc DESC");
								while($row_danhmuc_sidebar=mysqli_fetch_array($sql_danhmuc_sidebar)){
								?>
								<li>
									<!-- <input type="checkbox" class="checked"> -->
									<span class="span"><a href="index.php?quanly=danhmuc&id=<?php echo $row_danhmuc_sidebar['id_danhmuc']?>"><?php echo $row_danhmuc_sidebar['ten_danhmuc'] ?></span>
								</li>
								<?php 
								}
								?>
							</ul>
						</div>
						<!-- //electronics -->
						<!-- best seller -->
						<div class="f-grid py-2">
							<h3 class="agileits-sear-head mb-3">Sản phẩm bán chạy</h3>
							<div class="box-scroll">
								<div class="scroll">
									<?php 
										$sql_sanpham_sidebar=mysqli_query($khangduy,"SELECT * FROM sanpham WHERE hot_sanpham='0' ORDER BY id_sanpham DESC");
										while($row_sanpham_sidebar=mysqli_fetch_array($sql_sanpham_sidebar)){
									?>
									<div class="row">
										<div class="col-lg-3 col-sm-2 col-3 left-mar">
											<img src="images/<?php echo $row_sanpham_sidebar['image_sanpham'] ?>" alt="" class="img-fluid">
										</div>
										<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
											<a href=""><?php echo $row_sanpham_sidebar['ten_sanpham'] ?></a>
											<a href="" class="price-mar mt-2"><?php echo number_format($row_sanpham_sidebar['gia_sanpham'])." VND " ?> </a>
										</div>
									</div>
									
									<?php
									}
									?>


								</div>
							</div>
						</div>
						<!-- //best seller -->
					</div>
					<!-- //product right -->
				</div>
			</div>
		</div>
	</div>
