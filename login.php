<?php 
require_once 'db.php';
if(isset($_SESSION['login']) == "admin@admin.com"){
	header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<style type="text/css">
	body{
		margin: 0;
		padding: 0;
		font-family: sans-serif;
		background: url(bg1.jpg) no-repeat;
		background-size: cover;
	}
	.box{
		width: 500px;
		padding: 40px;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		color: white;
		text-align: center;	
		/*border-radius: 20px;*/
	}

	.box h1{
		color: black;
		text-transform: uppercase;
		font-weight: 700;
	}

	.box input[type = "email"],.box input[type = "password"]{
		border: 0;
		background: none;
		display: block;
		margin: 20px auto;
		text-align: center;
		border: 4px solid #3498db;
		padding: 14px 10px;
		width: 200px;
		outline: none;
		color: black;
		font-weight: 10px;
		border-radius: 24px;
		transition: 0.5s;
		font-weight: 1000;
	}
	.box input[type = "email"]:focus,.box input[type = "password"]:focus{
		width: 280px;
		border-color: #2ecc71;
		background: #2ecc71;
	}

		/*.box input[type = "email"]:hover,.box input[type = "password"]:hover{
			width: 280px;
			background: black;
			}*/

			.box input[type = "submit"]{
				border: 0;
				background: none;
				display: block;
				margin: 20px auto;
				text-align: center;
				border: 4px solid #2ecc71;
				padding: 14px 40px;
				outline: none;
				color: black;
				border-radius: 24px;
				transition: 0.25s;
				cursor: pointer;
				font-weight: 1000;
			}

			.box input[type = "submit"]:hover{
				background: #2ecc71;
			}


		</style>
	</head>
	<body>
		<form class="box" method="post">
			<h1>LOGIN INVENTORY</h1>
			<input type="email" name="email" placeholder="Email.." autocomplete="off">
			<input type="password" name="password" placeholder="Password..">
			<input type="submit" name="submit" value="Login">
		</form>
		<?php 
		if(isset($_POST['submit'])){
			$email = $_POST['email'];
			$password = $_POST['password'];

			$ambildata = $koneksi->query("SELECT * FROM admin WHERE email = '$email' AND password = '$password'");
			$cocok = $ambildata->num_rows;
			$ambil = $ambildata->fetch_assoc();
			if($cocok==1){
				$_SESSION['login']=$ambil['email'];
				echo "<script>alert('LOGIN SUKSES');</script>";
				echo "<script>location='index.php';</script>";
			} else{
				echo "<script>alert('LOGIN GAGAL');</script>";
				echo "<script>location='login.php';</script>";
			}
		}

		?>
	</body>
	</html>