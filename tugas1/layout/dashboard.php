<?php 

// Kalau sesi user_name tidak ada, redirect
/*if (!isset($_SESSION['user_name'])) {	
	header("location:index.php"); 
}*/ 

?>

<!DOCTYPE html>
<html>
<head>
	<title>Pemutaran Music Gratis</title>
	<link rel="stylesheet" type="text/css" href="layout/assets/css/template.css">

</head>
<body background="layout/assets/images/abuabu1.jpg">
	<div class="container">
		<div class="menu">
			<a href="dashboard.php">Dashboard</a>
			<a href="dashboard.php?page=artist_tampil">Artis</a>
			<a href="dashboard.php?page=album_tampil">Album</a>
			<a href="dashboard.php?page=track_tampil">Lagu</a>
			<a href="dashboard.php?page=user_tampil">User</a>
			<a href="user_logout.php">Logout</a>
		</div>

		<div class="main">
			
			<?php 

			if (isset($_GET['page'])) {
				include $_GET['page'] . ".php";
			} else {
				include "dashboard_main.php";
			}

			?>

		</div>

		<div class="footer">
			Copyright 2020. Music Gratis
		</div>
	</div>
</body>
</html>