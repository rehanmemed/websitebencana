<?php 
	session_start();
	include 'db.php';
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
	<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
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
<br><br><br><br><br><br>
	<!-- content -->
	<div class="section">
		<div class="container">
			<h3>Tambah Data Berita</h3>
			<div class="box">
				<form action="" method="POST" enctype="multipart/form-data">

					<input type="text" name="judul" class="input-control" placeholder="judul berita" required>
					<input type="file" name="gambar" class="input-control" required>
					<textarea class="input-control" name="deskripsi" placeholder="Deskripsi"></textarea><br>
					<input type="submit" name="submit" value="Submit" class="btn">
				</form>
				<?php 
					if(isset($_POST['submit'])){
						// menampung inputan dari form
						$judul 	= $_POST['judul'];
						$deskripsi = $_POST['deskripsi'];

						// menampung data file yang diupload
						$filename = $_FILES['gambar']['name'];
						$tmp_name = $_FILES['gambar']['tmp_name'];
						$filesize = $_FILES['gambar']['size'];

						$type1 = explode('.', $filename);
						$type2 = $type1[count($type1)-1]; // Ambil elemen terakhir, yaitu ekstensi file

						$newname = 'img'.time().'.'.$type2;

						// menampung data format file yang diizinkan
						$tipe_diizinkan = array('jpg', 'jpeg', 'png', 'gif', 'webp');

						// validasi format file
						if(!in_array($type2, $tipe_diizinkan)){
							// jika format file tidak ada di dalam tipe diizinkan
							echo '<script>alert("Format file tidak diizinkan")</script>';
						}else{
							// proses upload file sekaligus insert ke database
							move_uploaded_file($tmp_name, './img/'.$newname);

							$insert = mysqli_query($conn, "INSERT INTO tb_berita (judul, berita_desc, berita_img) VALUES (
										'".$judul."',
										'".$deskripsi."',
										'".$newname."'
									)");

							if($insert){
								echo '<script>alert("Tambah data berhasil")</script>';
								echo '<script>window.location="data-berita.php"</script>';
							}else{
								echo 'gagal '.mysqli_error($conn);
							}
						}
					}
				?>
			</div>
		</div>
	</div>

	<!-- footer -->
	<footer>
		<div class="container">
			<small>Copyright &copy; 2023 - Topan.</small>
		</div>
	</footer>
	<script>
        CKEDITOR.replace( 'deskripsi' );
    </script>
</body>
</html>
