<?php 
	session_start();
	if($_SESSION['status_login'] != true){
		echo '<script>window.location="login.php"</script>';
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Topan</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>
	<!-- header -->
	<header>
    <nav class="navbar">
        <a href="#" class="navbar-logo">Typhoon<span>Disaster</span>.</a>
        <div class="navbar-nav">
            <a href="dashboardadmin.php">Home</a>
            <a href="berita.php">update berita</a>
			<a href="data-berita.php">data berita</a>
            <a href="keluar.php">keluar</a>
        </div>
    </nav>
	</header>
<br><br><br><br><br>
	<!-- content -->
	<div class="section">
		<div class="container">
			<h3>Dashboard</h3>
			<div class="box">
				<h4>Selamat Datang <?php echo $_SESSION['a_global']->admin_name ?> di website bencana topan</h4>
			</div>
		</div>
	</div>

	<!-- footer -->
	<footer>
		<div class="container">
			<small>Copyright &copy; 2023 - TokoSepatu.</small>
		</div>
	</footer>	
</body>
</html>