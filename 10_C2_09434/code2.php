<?php
	$host = "localhost"; // Host name
	$username = "root"; // Mysql username
	$password = ""; // Mysql password
	$db_name = "user"; // Database name
	$conn = mysqli_connect($host, $username, $password, $db_name);
	
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	// Membuat data session
	session_start();
	
	if(isset($_POST['Login'])) {
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		
		// cek apakah username dan password valid
		$cek = "select username from user where username='$user' and password='$pass'";
		
		$check = mysqli_query($conn, $cek);
		$row = mysqli_fetch_array($check);
		
		if($user == $row['username']){
			$_SESSION['sessionLogin'] = $user;
			
			echo "<h1>Anda berhasil LOGIN</h1>";
			echo "<h2>Klik <a href='code3.php'> disini (code3.php)</a> untuk menuju ke halaman pemeriksaan session";
		} else {
			echo "<script type='text/javascript'>
				alert('Data username dan password salah! Silahkan coba lagi..'); window.location = 'code2.php';
				</script>";
			// header("Location: ".$_SERVER['PHP_SELF']);
		}
	} else {
	?> 
	<html>
		<body>
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