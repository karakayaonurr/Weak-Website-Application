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
		<link href="style.css" rel="stylesheet" type="text/css" /> <!- style.css dosyasinda tanimlanmis duzenlemeleri ceker ->
		<link rel="shortcut icon" href="img/icon.ico"> <!- img/icon.ico dosyasini sayfa iconu yapar ->
	</head>
	<body>
		<div id="wrap">
			<div id="tophead"></div>
			<div id="header">
				<div id="logo">
					<h1 class="logotext">Yazilim <span>Laboratuvari II </span>3.Proje</h1> <!- sayfadaki baslik ->
				</div>
				<div>
					<h1>..................................................................................</h1>
				</div>
			</div>
			<div id="sidenotes">
				<div class="sidenav">
					<ul>
						<li><a href="anasayfa.php">Anasayfa</a></li> <!- sayfanin solunda secenek butonu olusturur ->
						<li><a href="kurulum_dokumantasyonu.php">Kurulum Dokumantasyonu</a></li> <!- sayfanin solunda secenek butonu olusturur ->
						<li><a href="sql_enjeksiyonu.php">SQL Enjeksiyonu</a></li> <!- sayfanin solunda secenek butonu olusturur ->
						<li><a class="active" href="xss.php">XSS</a></li> <!- sayfanin solunda secenek butonu olusturur ->
						<li><a href="komut_enjeksiyonu.php">Komut Enjeksiyonu</a></li> <!- sayfanin solunda secenek butonu olusturur ->
						</br></br> <!- iki satir bosluk birakir ->
						<marquee behavior=alternate><b> Kullanici: <?php echo $_SESSION['kull_adi']; ?> </b></marquee> <!- kayan yazi ile kullanici ismini yazar ->
						<li><a href="cikis.php">Cikis Yap</a></li> <!- sayfanin solunda secenek butonu olusturur ->
					</ul>
				</div>
			</div>
			<div id="contents"> <!- sayfa icerigiyle ilgili govde kismi ->
				<h2>&emsp;XSS</h2>
				<form action = "xss.php" method = "get"> <!- girilen degerlerin atanmis oldugu degiskenleri xss.php dosyasina gonderir ->
					</br></br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Isim giriniz:&emsp;<input type="text" name="isim" /> <!- girilen degeri isim degiskenine atar ->
					<input type = "submit" value="Giris" /> <!- alinan verileri gonderme islemini baslatir ->
					<!- ornek alinan kaynak http://localhost/DVWA/vulnerabilities/view_source.php?id=xss_r&security=low ->
					<?php 
						if( array_key_exists( "isim", $_GET ) && $_GET[ 'isim' ] != NULL ) { // GET istegiyle yollanmis isim degiskeninde bir deger olup olmadigi sorgulanir 
							echo '</br></br>Merhaba ' . $_GET[ 'isim' ] . ''; // isim degiskenindeki deger girilen duzene gore ekrana basilir 
						} 
					?> 
					</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
				</form>		
			</div>
		</div>
		<div id="bottompage">
			<div id="inner"><span><a href="popup_xss.php" target="popup" onclick="window.open('popup_xss.php','Yardim','width=600,height=400')">Yardim</a></span> <!- yardim butonu ->
				<a title="Proje Sorumlulari: ">Projeyi Hazirlayanlar : Onur Karakaya & Can Ozer</a> <!- proje sorumlulari->
			</div>
		</div>
	</body>
</html>
