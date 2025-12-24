<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include 'admin/conn.php';
$sql = "SELECT * FROM blogs ORDER BY blog_id desc";        // correct variable name
$check = mysqli_query($conn, $sql);
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Home</title>
	<?php
	include 'links.php';
	?>


</head>

<body>
	<!-- header -->
	<div class="header">
		<?php
		include 'header.php';
		?>

	</div>
	<!-- header -->
	<div class="container">
		<div class="col-md-9 bann-right">

			<!-- ==================== DYNAMIC BANNER START ===================== -->

			<?php
			$sql4 = "SELECT * FROM blogs ORDER BY blog_id DESC LIMIT 4";
			$check4 = mysqli_query($conn, $sql4);
			?>

			<div class="banner">
				<div class="header-slider">
					<div class="slider">
						<div class="callbacks_container">
							<ul class="rslides" id="slider">

								<?php while ($data4 = mysqli_fetch_assoc($check4)) { ?>
									<li>
										<img src="admin/uploads/<?php echo $data4['image']; ?>"
											class="img-responsive"
											style="width:100%; height:300px; object-fit:cover;"
											alt="">
										<div class="caption">
											<h3><?php echo $data4['title']; ?></h3>
											<p><?php echo substr($data4['description'], 0, 100); ?>...</p>
										</div>
									</li>
								<?php } ?>

							</ul>
						</div>
					</div>
				</div>
			</div>

			<!-- ==================== DYNAMIC BANNER END ===================== -->


			<!-- ==================== BLOG LIST (NAM MATIS) ===================== -->

			<div class="nam-matis">
				<div class="nam-matis-top">

					<?php
					$sql = "SELECT * FROM blogs ORDER BY blog_id DESC";
					$check = mysqli_query($conn, $sql);

					while ($data = mysqli_fetch_assoc($check)) {
					?>

						<div class="col-md-6 nam-matis-1">
							<img src="admin/uploads/<?php echo $data['image']; ?>"
								class="img-responsive"
								style="width:100%; height:200px; object-fit:cover;"
								alt="">
							<a href="./view-blog.php?id=<?php echo $data['blog_id']; ?>">
								<?php echo $data['title']; ?>
							</a></h3>
							<p><?php echo substr($data['description'], 0, 50); ?>...
								<a href="./view-blog.php?id=<?php echo $data['blog_id']; ?>">Read more</a>
							</p>
						</div>

					<?php } ?>

					<div class="clearfix"></div>
				</div>
			</div>

			<!-- ==================== BLOG LIST END ===================== -->

		</div>



		<!-- ==================== RIGHT SIDEBAR ===================== -->

		<div class="col-md-3 bann-left">

			<!-- SEARCH BOX -->
			<div class="b-search">
				<form>
					<input type="text" placeholder="Search" />
					<input type="submit" value="">
				</form>
			</div>

			<!-- RECENT POSTS -->
			<h3>Recent Posts</h3>

			<?php
			$sql2 = "SELECT * FROM blogs ORDER BY blog_id DESC LIMIT 5";
			$check2 = mysqli_query($conn, $sql2);
			?>

			<div class="blo-top">
				<?php while ($data2 = mysqli_fetch_assoc($check2)) { ?>

					<div class="blog-grids">
						<div class="blog-grid-left">
							<a href="./view-blog.php?php echo $data2['blog_id']; ?>">
								<img src="admin/uploads/<?php echo $data2['image']; ?>"
									style="width:100px; height:70px; object-fit:cover;"
									alt="">
							</a>
						</div>
						<div class="blog-grid-right">
							<h4><a href="./view-blog.php?php echo $data2['blog_id']; ?>">
									<?php echo $data2['title']; ?>
								</a></h4>
							<p><?php echo substr($data2['description'], 0, 30); ?>...</p>
						</div>
						<div class="clearfix"></div>
					</div>

				<?php } ?>
			</div>

			<!-- CATEGORIES -->
			<h3>Categories</h3>

			<?php
			$sql3 = "SELECT * FROM category ORDER BY cat_id DESC";
			$check3 = mysqli_query($conn, $sql3);
			?>

			<div class="blo-top">
				<?php while ($data3 = mysqli_fetch_assoc($check3)) { ?>
					<li><a href="./view-blog.php?blog_category echo $data3['category_name']; ?>">
							<?php echo $data3['category_name']; ?>
						</a></li>
				<?php } ?>
			</div>

			<!-- NEWSLETTER -->
			

		</div>

	</div>

	

	</div>
	<?php
	include 'footer.php';
	?>
</body>

</html>