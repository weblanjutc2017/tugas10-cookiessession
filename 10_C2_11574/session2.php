<?php
	$host = "localhost"; // Host name
	$username = "root"; // Mysql username
	$password = ""; // Mysql password
	$db_name = "loginan"; // Database name
	$conn = mysqli_connect($host, $username, $password, $db_name);
	
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	session_start();
	if(isset($_POST['Login'])){
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		
		$sql = "SELECT password FROM user where username='$user'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		$ps=$row['password'];
		
		$sql2="SELECT * FROM user WHERE username='$user'";
		$query = mysqli_query($conn,$sql2);
		
		if($user=="" || $pass==""){
			header('location:session2.php?war=3');
			exit;
		}
		else if(mysqli_num_rows($query) == 0){
			header('location:session2.php?war=1');
			exit;
		}
		else{
			if($pass==$ps){
				$_SESSION['sessionLogin'] = $user;
				echo "<h1>Anda berhasil LOGIN</h1>";
				echo "<h2>Klik <a href='session3.php'> disini (session3.php)</a> untuk menuju
				ke halaman pemeriksaan session";
			}
			else {
				header('location:session2.php?war=2');
				exit;
			}
		}
	}
	else {
?>
	<html>
		<body>
		<?php 
		
			if (!empty($_GET['war'])){
			
				if ($_GET['war']==1){
					echo "<p class='message'><h4> User yang anda masukkan tidak ada! </h4></p>";
				}
				else if ($_GET['war']==2){
					echo "<p class='message'><h4> Password yang anda masukkan salah! </h4></p>";
				}
				else if ($_GET['war']==3){
					echo "<p class='message'><h4> User atau password tidak boleh kosong! </h4></p>";
				}	
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
