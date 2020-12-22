<!-- 
<?php 
	if(isset($_GET['id'])){
		$id=$_GET['id'];
	}else{
			$id='';
		}
			$sql_cate=mysqli_query($khangduy,"SELECT * FROM danhmuc,sanpham WHERE danhmuc.id_danhmuc=sanpham.id_danhmuc AND sanpham.id_danhmuc='$id' ORDER BY sanpham.id_sanpham DESC");

			$sql_cate1=mysqli_query($khangduy,"SELECT * FROM danhmuc,sanpham WHERE danhmuc.id_danhmuc=sanpham.id_danhmuc AND sanpham.id_danhmuc='$id' ORDER BY sanpham.id_sanpham DESC");
			$row_tieude=mysqli_fetch_array($sql_cate1);
						$tieude=$row_tieude['ten_danhmuc'];
?>
 -->
<!-- top Products -->
	<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">Xem đơn hàng</h3>
			<!-- //tittle heading -->
			<div class="row">
				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-9">
					<div class="wrapper">
						<!-- first section -->
					<h3>
							<div class="row">
								<?php 
								if(isset($_SESSION['dangnhap_home'])){
									echo ' Đơn hàng : '. $_SESSION['dangnhap_home'];
								}
								?>
							</div>
						</h3>
						<!-- //first section -->
					</div>
				</div>
				<!-- //product left -->
			
			</div>
		</div>
	</div>
	<!-- //top products -->