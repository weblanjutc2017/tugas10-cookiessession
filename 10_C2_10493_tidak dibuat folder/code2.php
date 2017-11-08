<?php
$host="localhost"; // Host name
 $username="root"; // Mysql username
 $password=""; // Mysql password
 $db_name="praktikum8"; // Database name
 $conn = mysqli_connect($host, $username, $password,
$db_name);
 // Check connection
 if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
 }
session_start();
if(isset($_POST['Login'])) {
$username = $_POST['user'];
$password = $_POST['pass'];

mysql_select_db($db_name);
$query = "SELECT * FROM user WHERE user='$username'";
$row = mysql_num_rows($query);


if($row == 1){
$_SESSION['sessionLogin'] = $username;
echo "<h1>Anda berhasil LOGIN</h1>";
echo "<h2>Klik <a href='code3.php'> disini (code3.php)</a> untuk menuju
ke halaman pemeriksaan session";
} else {
header("Location: ".$_SERVER['PHP_SELF']);
}
} else {
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