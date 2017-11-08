<?php
if(isset($_POST['Login'])) {
	require_once 'koneksi.php';
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$sql = "select * from user where username='$user' && Password='$pass'";
	$hasil = mysqli_query($conn, $sql) or
	die(mysqli_error($conn));
	$row=mysqli_fetch_array($hasil);
	
	//cek username dan password
	if ($user == "" && $pass == "" )  {
	 echo "<script>window.alert('Isikan username dan password!'); window.location=('form.html');</script>";
	}
	else if ( $row['Username']==$user && $row['Password']==$pass){
		session_start();
		$_SESSION['sessionLogin'] = $user;
		echo "<h1>Anda berhasil LOGIN</h1>";
		echo "<h2>Klik <a href='code3.php'> disini (code3.php)</a> untuk menuju
			ke halaman pemeriksaan session";
	}
	else {
		 header("Location: ".$_SERVER['PHP_SELF']);
		 }
		}
	else {
?>

 <html>
 <body>
 <form method="post" action="<?php echo
htmlspecialchars($_SERVER["PHP_SELF"]);?>">
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