		<?php 
				$sql_danhmuc=mysqli_query($khangduy,"SELECT * FROM danhmuc ORDER BY id_danhmuc DESC");
				?>
	<div class="navbar-inner">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="agileits-navi_search">
					<form action="#" method="post">
						<select id="agileinfo-nav_search" name="agileinfo_search" class="border" required="">
							<option value="">Danh mục sản phẩm</option>
							<?php 
							while($row_danhmuc=mysqli_fetch_array($sql_danhmuc)){
							?>
							<option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['ten_danhmuc']?></option>
							<?php
							}
							?>		
						</select>
					</form>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto text-center mr-xl-5">
						<li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="index.php">Trang chủ
								<span class="sr-only">(current)</span>
							</a>
						</li>
							<?php 
							$sql_1_danhmuc=mysqli_query($khangduy,"SELECT * FROM danhmuc ORDER BY id_danhmuc DESC");
							while($row_1_danhmuc=mysqli_fetch_array($sql_1_danhmuc)){
							?>

						<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="?quanly=danhmuc&id=<?php echo $row_1_danhmuc['id_danhmuc'] ?>" role="button" aria-haspopup="true" aria-expanded="false">
								<?php echo $row_1_danhmuc['ten_danhmuc']?>
							</a>
							
						</li>
						<?php
						}
						?>	
						
						<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
							<?php 
							$sql_danhmuctin=mysqli_query($khangduy,"SELECT * FROM danhmuc_tin ORDER BY id_danhmuctin DESC");

							?>
							<a class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Tin tức
							</a>
							<div class="dropdown-menu">
								<?php 
								while($row_danhmuctin=mysqli_fetch_array($sql_danhmuctin)){
								?>
								<a class="dropdown-item" href="?quanly=tintuc&id_tin=<?php echo $row_danhmuctin['id_danhmuctin'] ?>"><?php echo $row_danhmuctin['ten_danhmuctin']?></a>
								<?php 
								}
								?>
								
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="https://www.facebook.com/hhk203">Liên hệ</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!-- //navigation -->