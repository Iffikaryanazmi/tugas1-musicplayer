<!DOCTYPE html>
<html>
<head>
	<title>Pemutaran Music Gratis</title>
	<link rel="stylesheet" type="text/css" href="layout/assets/css/template.css">
</head>
<body background="layout/assets/images/abuabu1.jpg">
	<div class="container">
		<div class="header">
			<img src="<?php echo ASSET; ?>images/music.png">
		</div>

		<div class="menu">
			<a href="index.php">Home</a>
			<a href="index.php?page=index_album">Album</a>
			<a href="index.php?page=index_login">Login</a>
		</div>

		<div class="main">
			
			<?php 

			if (isset($_GET['page'])) {
				include $_GET['page'] . ".php";
			} else {
				include "index_main.php";
			}

			?>

		</div>

		<div class="footer">
			Copyright 2020. Music Gratis
		</div>
	</div>
</body>
</html>