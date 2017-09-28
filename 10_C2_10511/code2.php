<?php
 	session_start();
 	$host = "localhost"; // Host name
 	$username = "root"; // Mysql username
 	$password = ""; // Mysql password
 	$db_name = "user"; // Database name
 	$conn = mysqli_connect($host, $username, $password, $db_name);
 	
 	if (!$conn) {die("Connection failed: " . mysqli_connect_error());}
 	 	
 	if(isset($_POST['Login'])) {  
 		$username = $_POST['user'];
 		$password = $_POST['pass'];
 		$login    = mysqli_query($conn, "select * from user where Username='$username' and Password='$password'");
 		$result   = mysqli_fetch_array($login);
 		
 	if(empty($username))
 	{
 		echo "<script>var answer = alert('Harap isi Username ')</script>";
 	}
 	else if(empty($password))
 	{
 		echo "<script>var answer = alert('Harap isi password ')</script>";
 	}
 	else if ($result['Username']== $username && $result['Password']== $password){
 		$_SESSION['sessionLogin'] = $username;
 		echo "<h1>Anda berhasil LOGIN</h1>";
 		echo "<h2>Klik <a href='code3.php'> disini (code3.php)</a> untuk menuju ke halaman pemeriksaan session";  }
 	else {   
 		header("Location: ".$_SERVER['PHP_SELF']);  
 	} }else 
    {
 	   
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