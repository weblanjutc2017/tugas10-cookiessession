<?php
if(isset($_POST['Login'])) {
	require_once 'connection.php';
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$sql = "select * from user where username='$user' && password='$pass'";
	$hasil = mysqli_query($conn, $sql) or
	die(mysqli_error($conn));
	$row=mysqli_fetch_array($hasil);
	 
	 if( $row['username']==$user && $row['password']==$pass){
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
 <td><input type="submit" name="Login" value="Log In"></
td>
 </tr>
 </table>
 </form>
 </body>
 </html>
<?php
}
?>