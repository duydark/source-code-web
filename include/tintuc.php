<?php 
	if(isset($_GET['id_tin'])){
		$id_danhmuc=$_GET['id_tin'];
	}else{
		$id_danhmuc='';
	}
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
					<?php 
					$sql_tendanhmuctin=mysqli_query($khangduy,"SELECT * FROM danhmuc_tin WHERE id_danhmuctin='$id_danhmuc'");
					$row_danh=mysqli_fetch_array($sql_tendanhmuctin);
					?>
					<li><?php echo $row_danh['ten_danhmuctin']?></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- about -->
	<div class="welcome py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<?php 
					$sql_tendanhmuctin1=mysqli_query($khangduy,"SELECT * FROM danhmuc_tin WHERE id_danhmuctin='$id_danhmuc'");
					$row_danh1=mysqli_fetch_array($sql_tendanhmuctin1);
					?>
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<?php echo $row_danh['ten_danhmuctin']?></h3>
			<!-- //tittle heading -->
			<div class="row">
				<?php
				$sql_baiviet=mysqli_query($khangduy,"SELECT * FROM danhmuc_tin,baiviet WHERE danhmuc_tin.id_danhmuctin = baiviet.id_danhmuctin AND danhmuc_tin.id_danhmuctin='$id_danhmuc'");
				while($row_baiviet=mysqli_fetch_array($sql_baiviet)){
				?>
				<div class="col-lg-4 welcome-right-top mt-lg-0 mt-sm-5 mt-4">
					<img src="images/<?php echo $row_baiviet['image_baiviet'] ?>" class="img-fluid" alt=" ">
				</div>
				<div class="col-lg-8 welcome-left">
					<h3><a href="index.php?quanly=chitiettin&id_tin=<?php echo $row_baiviet['id_baiviet']?>"><?php echo $row_baiviet['ten_baiviet']?></a></h3>
					<h4 class="my-sm-3 my-2"><?php echo $row_baiviet['tomtat']?></h4>
					
				</div>		
			</div><br>
			<?php
			}
			?>

		</div>
	</div>
	<!-- //about -->