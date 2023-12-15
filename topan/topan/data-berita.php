<?php
	session_start();
	include 'db.php';
	if ($_SESSION['status_login'] != true) {
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
<br><br><br><br><br><br><br>
	<!-- content -->
	<div class="section">
		<div class="container">
			<h3>Data berita</h3>
			<div class="box">
				<p><a href="berita.php" class="box-tambah">Tambah Data</a></p>
				<table border="1" cellspacing="0" class="table">
					<thead>
						<tr>
							<th width="60px">No</th>
							<th>Judul</th>
							<th>Deskripsi</th>
							<th>Gambar</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						$berita = mysqli_query($conn, "SELECT * FROM tb_berita ORDER BY berita_id DESC");
						if (mysqli_num_rows($berita) > 0) {
							while ($row = mysqli_fetch_array($berita)) {
						?>
								<tr>
									<td><?php echo $no++ ?></td>
									<td><?php echo $row['judul'] ?></td>
									<td><?php echo $row['berita_desc'] ?></td>
									<td><a href="produk/<?php echo $row['berita_img'] ?>" target="_blank"> <img src="img/<?php echo $row['berita_img'] ?>" width="50px"> </a></td>
								</tr>
						<?php }
						} else { ?>
							<tr>
								<td colspan="7">Tidak ada data</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<!-- footer -->
	<footer>
		<div class="container">
			<small>Copyright &copy; 2023 - Topan.</small>
		</div>
	</footer>
</body>

</html>
