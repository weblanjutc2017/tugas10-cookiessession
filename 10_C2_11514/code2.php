<?php	
	session_start();
	require_once 'koneksi.php';
	if(isset($_POST['Login'])){
		$user = $_POST['user'];
		$pass = $_POST['pass'];		
		$sql = "select password from user where username='$user'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		$ps=$row['password'];
		$sql2="select* from user where username='$user'";
		$query = mysqli_query($conn,$sql2);
			
		if($user=="" || $pass==""){
			header('location:session2.php?update=3');
		}
		else if(mysqli_num_rows($query) == 0){
			header('location:session2.php?update=1');
		}
		else{
			if($pass==$ps){
			$_SESSION['sessionLogin'] = $user;
			echo "<h1>Anda berhasil LOGIN</h1>";
			echo "<h2>Klik <a href='session3.php'> disini (session3.php)</a> untuk menuju ke halaman pemeriksaan session";
		}
		else {
			header('location:session2.php?update=2');
		}
	}
	}
	else
	{
?>
	<html>
	<body>
	<?php 
		if (!empty($_GET['update'])){
			if($_GET['update']==1)
				echo '<script type="text/javascript"> var answer = alert("Username Tidak Ada!")</script>';
			else if ($_GET['update']==2)
				echo '<script type="text/javascript"> var answer = alert("Password salah!")</script>';
			else if ($_GET['update']==3)
				echo '<script type="text/javascript"> var answer = alert("Username Tidak Boleh Kosong!")</script>';
		}
	?>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<h3>Login</h3>
	<table>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td><input type="text" name="user"></td>
			</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="password" name="pass"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="Login" value="Log In"></td>
		</tr>
	</table>
	</form>
</body>
</html>
<?php
	}
?>
