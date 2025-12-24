<?php
include 'admin/conn.php';

$blog_id = $_GET['id'] ?? null;
$blog_category = $_GET['blog_category'] ?? null;
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>View Blog</title>
	<?php include 'links.php'; ?>
</head>

<body>

	<div class="container">
		<?php include 'header.php'; ?>
	</div>

	<div class="container">
		<div class="content-top">

			<!-- ==========================================
             SHOW BLOG BY ID
        ============================================ -->
			<?php
			if ($blog_id) {
				$sql = "SELECT * FROM blogs WHERE blog_id = '$blog_id'";
				$check = mysqli_query($conn, $sql);

				if (mysqli_num_rows($check) > 0) {
					while ($data = mysqli_fetch_assoc($check)) {
			?>
						<div class="single">
							<div class="single-top">
								<img src="admin/uploads/<?php echo $data['image']; ?>" class="img-responsive" alt="">
								<h3><?php echo $data['title']; ?></h3>

								<p class="sin"><?php echo $data['description']; ?></p>

								<div class="artical-links">
									<ul>
										<li><span><?php echo $data['date']; ?></span></li>
										<li><span><?php echo $data['author']; ?></span></li>
										<li><span><?php echo $data['category']; ?></span></li>
										<li><span><?php echo $data['status']; ?></span></li>
									</ul>
								</div>
							</div>
						</div>
			<?php
					}
				} else {
					echo "<h3 style='color:red;'>Blog not found!</h3>";
				}
			}
			?>


			<!-- ==========================================
             SHOW ALL BLOGS BY CATEGORY
        ============================================ -->
			<?php
			if ($blog_category) {

				echo "<h2>Category: <span style='color:green'>$blog_category</span></h2>";

				$sql = "SELECT * FROM blogs WHERE category = '$blog_category' ORDER BY blog_id DESC";
				$check = mysqli_query($conn, $sql);

				if (mysqli_num_rows($check) > 0) {

					while ($data = mysqli_fetch_assoc($check)) {
			?>
						<div class="single">
							<div class="single-top">
								<img src="admin/uploads/<?php echo $data['image']; ?>" class="img-responsive" alt="">
								<h3><?php echo $data['title']; ?></h3>

								<p class="sin"><?php echo $data['description']; ?></p>

								<div class="artical-links">
									<ul>
										<li><small></small><span><?php echo $data['date']; ?></span></li>
										<li><a href="#"><small class="admin"></small><span><?php echo $data['author']; ?></span></a></li>
										<li><a href="#"><small class="no"></small><span><?php echo $data['category']; ?></span></a></li>
										<li><a href="#"><small class="posts"></small><span><?php echo $data['status']; ?></span></a></li>
										<li><a href="#"><small class="link"></small><span>permalink</span></a></li>
									</ul>
								</div>
							</div>
						</div>
			<?php
					}
				} else {
					echo "<h3>No posts found for this category!</h3>";
				}
			}
			?>

			<!-- ==========================================
             RIGHT SIDEBAR
        ============================================ -->
			<div class="blog-content-right">

				<!-- Recent Posts -->
				<h3>Recent Posts</h3>

				<?php
				$sql2 = "SELECT * FROM blogs ORDER BY blog_id DESC LIMIT 5";
				$check2 = mysqli_query($conn, $sql2);
				?>

				<div class="blo-top">
					<?php while ($data2 = mysqli_fetch_assoc($check2)) { ?>
						<div class="blog-grids">
							<div class="blog-grid-left">
								<a href="./view-blog.php?id=<?= $data2['blog_id'] ?>">
									<img src="admin/uploads/<?php echo $data2['image']; ?>"
										style="width:100px; height:70px; object-fit:cover;">
								</a>
							</div>

							<div class="blog-grid-right">
								<h4><a href="./view-blog.php?id=<?= $data2['blog_id'] ?>">
										<?php echo $data2['title']; ?>
									</a>
								</h4>
								<p><?php echo substr($data2['description'], 0, 30); ?>...</p>
							</div>

							<div class="clearfix"></div>
						</div>
					<?php } ?>
				</div>

				<!-- Categories -->
				<h3>Categories</h3>

				<?php
				$sql3 = "SELECT * FROM category ORDER BY cat_id DESC";
				$check3 = mysqli_query($conn, $sql3);
				?>

				<div class="blo-top">
					<?php while ($data3 = mysqli_fetch_assoc($check3)) { ?>
						<li>
							<a href="view-blog.php?blog_category=<?php echo $data3['category_name']; ?>">
								<?php echo $data3['category_name']; ?>
							</a>
						</li>
					<?php } ?>
				</div>

			</div>

			<div class="clearfix"></div>
		</div>
	</div>

	<?php include 'footer.php'; ?>

</body>

</html>