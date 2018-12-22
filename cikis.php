<?php
	session_start();
	unset($_SESSION['kull_adi']); // kullanici cikisi yapilir
	session_destroy();
	header("Location: index.php"); // index.php sayfasina dondurur
	exit;
?>