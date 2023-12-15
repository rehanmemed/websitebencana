<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login | Topan</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body id="bg-login">
	<div class="box-login">
		<h2>Login</h2>
		<form action="" method="POST">
			<input type="text" name="user" placeholder="Username" class="input-control">
			<input type="password" name="pass" placeholder="Password" class="input-control">
			<input type="submit" name="login" value="Login" class="btn">
			<a href="dashboard.php" class="btn">User</a>
		</form>
		<?php 
			if(isset($_POST['login'])){
				session_start();
				include 'db.php';

				$user = mysqli_real_escape_string($conn, $_POST['user']);
				$pass = mysqli_real_escape_string($conn, $_POST['pass']);
				if(empty($user) || empty($pass)) {
					echo '<script>alert("Username atau password tidak boleh kosong!")</script>';
				} else{
				$cek1 = mysqli_query($conn, "SELECT * FROM tb_admin WHERE username = '".$user."' AND password = '".MD5($pass)."'");
				
				if(mysqli_num_rows($cek1) > 0){
					$d = mysqli_fetch_object($cek1);
					$_SESSION['status_login'] = true;
					$_SESSION['a_global'] = $d;
					$_SESSION['id'] = $d->admin_id;
					echo '<script>window.location="dashboardadmin.php"</script>';
				}else {
					echo '<script>alert("Username atau password Anda salah!")</script>';
				}
			}
        }
		?>
	</div>
</body>
</html>