<?php 
	if(isset($_GET['id_tin'])){
		$id_baiviet=$_GET['id_tin'];
	}else{
		$id_baiviet='';
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
					$sql_tenbaiviet=mysqli_query($khangduy,"SELECT * FROM baiviet WHERE id_baiviet='$id_baiviet'");
					$row_bai=mysqli_fetch_array($sql_tenbaiviet);
					?>
					<li><?php echo $row_bai['ten_baiviet']?></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- about -->
	<div class="welcome py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<?php 
					$sql_tenbaiviet1=mysqli_query($khangduy,"SELECT * FROM baiviet WHERE id_baiviet='$id_baiviet'");
					$row_bai1=mysqli_fetch_array($sql_tenbaiviet1);
					?>
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<?php echo $row_bai1['ten_baiviet']?></h3>
			<!-- //tittle heading -->
			<div class="row">
				<?php
				$sql_baiviet=mysqli_query($khangduy,"SELECT * FROM baiviet WHERE baiviet.id_baiviet = '$id_baiviet'");
				$row_baiviet=mysqli_fetch_array($sql_baiviet);
				?>
				<div class="col-lg-12 welcome-left">
					<h3><?php echo $row_baiviet['ten_baiviet']?></a></h3>
					<h4 class="my-sm-3 my-2"><?php echo $row_baiviet['tomtat']?></h4>
					<p><?php echo $row_baiviet['noidung'] ?></p>
					
				</div>		
			</div><br>
		

		</div>
	</div>
	<!-- //about -->