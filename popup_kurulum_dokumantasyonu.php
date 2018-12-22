<?php
	include 'veritabani.php'; // veritabani ile baglanti kurulur
	if(empty($_SESSION)) // veritabani baglantisi kontrol edilir
	   session_start();
	if(!isset($_SESSION['kull_adi'])){ // kullanici girisi yapilmamis ise
	   header("Location: index.php"); // index.php ye yonlendir
	   exit;
	} 
?>

<html>
	<head>
		<title>YazLab II 3.Proje</title> <!- sayfanin sekme basligi ->
		<link rel="shortcut icon" href="img/icon.ico"> <!- img/icon.ico dosyasini sayfa iconu yapar ->
	</head>
	<body>
		<ul>
			</br><li><b>	Projenin Amacı :</b></li>
			<p>&emsp; SQL Enjeksiyonu, XSS ve Komut Enjeksiyonu zaafiyetlerini barindiran</br>Zayıf Web Uygulaması hazirlamak.</p>
			</br><li><b>	Projeyi Hazirlayanlar :</b></li>
			<p>&emsp; 140201051 - Onur Karakaya</p>
			<p>&emsp; 140201052 - Can Ozer</p>
		</ul>
	</body>
</html>