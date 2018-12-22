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
						<li><a href="xss.php">XSS</a></li> <!- sayfanin solunda secenek butonu olusturur ->
						<li><a class="active" href="komut_enjeksiyonu.php">Komut Enjeksiyonu</a></li> <!- sayfanin solunda secenek butonu olusturur ->
						</br></br> <!- iki satir bosluk birakir ->
						<marquee behavior=alternate><b> Kullanici: <?php echo $_SESSION['kull_adi']; ?> </b></marquee> <!- kayan yazi ile kullanici ismini yazar ->
						<li><a href="cikis.php">Cikis Yap</a></li> <!- sayfanin solunda secenek butonu olusturur ->
					</ul>
				</div>
			</div>
			<div id="contents"> <!- sayfa icerigiyle ilgili govde kismi ->
				<h2>&emsp;Komut Enjeksiyonu</h2>
				<form action = "komut_enjeksiyonu.php" method = "get"> <!- girilen degerlerin atanmis oldugu degiskenleri komut_enjeksiyonu.php dosyasina gonderir ->
					</br></br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;IP adresi giriniz:&emsp;<input type="text" name="ip_adresi" /> <!- girilen degeri ip_adress degiskenine atar ->
					<input type = "submit" name="giris_butonu" value="Giris" /> <!- alinan verileri gonderme islemini baslatir ->
					<!- ornek alinan kaynak http://localhost/DVWA/vulnerabilities/view_source.php?id=exec&security=low ->
					<?php 
						if( isset( $_GET[ 'giris_butonu' ]  ) ) {  // GET ile istedenen giris_butonu degeri gonderip gondermedigi kontrol edilir
							$istenen = $_REQUEST[ 'ip_adresi' ]; // gonderilen ip_adresi degiskenindeki deger $istenen degiskenine atanir 
							if( stristr( php_uname( 's' ), 'Windows NT' ) ) { // islemci secilir ve ping komutu calistirilir
								$cmd = shell_exec( 'ping  ' . $istenen ); // isletim sistemi windows ise gerceklestirilir
							} 
							else { 
								$cmd = shell_exec( 'ping  -c 4 ' . $istenen ); // isletim sistemi windows haricinde ise gerceklestirilir 
							}  
							echo "<pre>{$cmd}</pre>"; // duzenli olarak cmd ekrani ekrana basilir
						} 
					?> 
					</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
				</form>				
			</div>
		</div>
		<div id="bottompage">
			<div id="inner"><span><a href="popup_komut_enjeksiyonu.php" target="popup" onclick="window.open('popup_komut_enjeksiyonu.php','Yardim','width=600,height=400')">Yardim</a></span> <!- yardim butonu ->
				<a title="Proje Sorumlulari: ">Projeyi Hazirlayanlar : Onur Karakaya & Can Ozer</a> <!- proje sorumlulari->
			</div>
		</div>
	</body>
</html>
