<?php
	session_start();
	if(isset($_SESSION['sessionLogin'])) {
		unset($_SESSION);
		session_destroy();
		echo "<h1>Anda sudah berhasil LOGOUT<h1>";
		echo "<h2>Klik <a href='session2.php'>disini</a> untuk LOGIN kembali</h2>";
		echo "<h2>Anda sekarang tidak bisa masuk ke halaman <a href='session3.php'>session3.php</a> Lagi</h2>";
	}
?>