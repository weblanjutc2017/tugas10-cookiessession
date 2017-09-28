<?php
require_once 'koneksi.php';

session_start();
if(isset($_POST['Login'])) {
$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($conn,"select * from user where password='$password' and username='$username'");

	if(mysqli_num_rows($login) > 0){
	$_SESSION['sessionLogin'] = $username;
		echo "<h1>Anda berhasil LOGIN</h1>";
		echo "<h2>Klik <a href='code3.php'> disini (code3.php)</a> untuk menuju
		ke halaman pemeriksaan session";
	} else {
		header("Location: ".$_SERVER['PHP_SELF']);
		//echo "<h1>Anda gagal</h1>";
		}
	}else {
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
		<td><input type="text" name="username"></td>
	</tr>
	
	<tr>
		<td>Password</td>
		<td>:</td>
		<td><input type="password" name="password"></td>
	</tr>
	
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="Login" value="Log In">
		</td>
	</tr>
	
</table>
</form>
</body>
</html>
<?php
}
?>