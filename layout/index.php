<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Manajemen Music Player</title>
	<link rel="stylesheet" type="text/css" href="<?php echo ASSET; ?>css/template.css">
	<link href="<?php echo ASSET; ?>images/header.png" rel="shortcut icon">
</head>
<body>
	<div class="login-page">
		<div class="login"></div>
		<div class="menu" align="center">
			<a href="index.php">Home</a>
			<a href="index.php?page=index_album">Album</a>
			<a href="index.php?page=index_login">Login</a>
		</div>
		<div class="form">
			
			<?php 

			if (isset($_GET['page'])) {
				include $_GET['page'] . ".php";
			} else {
				include "index_main.php";
			}

			?>
		</div>
		<div class="footer"	align="center">
			Silvia Kartika
		</div>
	</div>
</div>
</body>
</html>