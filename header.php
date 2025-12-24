<div class="header">
	<div class="logo">
		<a href="index.php">
			<h1>Php Blog Website</h1>
		</a>
	</div>

	<div class="head-nav">
		<span class="menu"> </span>
		<ul class="cl-effect-1">
			<li><a href="index.php">Home</a></li>
			<li><a href="#">About Us</a></li>
			<li><a href="#">Services</a></li>
			<li><a href="#">Blog</a></li>
			<li><a href="#">Shortcodes</a></li>
			<li><a href="#">Login</a></li>
			<li><a href="#">Contact</a></li>
			<div class="clearfix"></div>
		</ul>
	</div>
	<!-- script-for-nav -->
	<script>
		$("span.menu").click(function() {
			$(".head-nav ul").slideToggle(300, function() {
				// Animation complete.
			});
		});
	</script>
	<!-- script-for-nav -->



	<div class="clearfix"> </div>
</div>