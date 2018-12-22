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
						<li><a class="active" href="kurulum_dokumantasyonu.php">Kurulum Dokumantasyonu</a></li> <!- sayfanin solunda secenek butonu olusturur ->
						<li><a href="sql_enjeksiyonu.php">SQL Enjeksiyonu</a></li> <!- sayfanin solunda secenek butonu olusturur ->
						<li><a href="xss.php">XSS</a></li> <!- sayfanin solunda secenek butonu olusturur ->
						<li><a href="komut_enjeksiyonu.php">Komut Enjeksiyonu</a></li> <!- sayfanin solunda secenek butonu olusturur ->
						</br></br> <!- iki satir bosluk birakir ->
						<marquee behavior=alternate><b> Kullanici: <?php echo $_SESSION['kull_adi']; ?> </b></marquee> <!- kayan yazi ile kullanici ismini yazar ->
						<li><a href="cikis.php">Cikis Yap</a></li> <!- sayfanin solunda secenek butonu olusturur ->
					</ul>
				</div>
			</div>
			<div id="contents"> <!- sayfa icerigiyle ilgili govde kismi ->
				<h2>&emsp;Kurulum Dokumantasyonu</h2> <!- sayfa aciklamasi bolumunun basligi ->
				<ul>
					</br><li><b>•	Kurulumun yapılabileceği işletim sistemi </b></li>
					<p>&emsp;Zayif Web Uygulamamiz, "Windows 10" isletim sistemi uzerine kurulmustur, Localde host kurmak icin AppServ (8.6.0) programi kullanilmistir. "Windows 7", "Windows 8.1" ve "Windows 10" isletim sistemlerini de desteklemekte olup, "Windows XP" ve "Windows Server 2003" isletim sistemlerini desteklememektedir.</p>
					<img src="img/kurulum_dokumantasyonu1.jpg"/></br>
					</br><li><b>•	Web sunucu yazılımının ve Veritabanı yazılımının kurulumu (Apache, MySQL)</b></li>
					<p>&emsp;Farkli isletim sistemlerinde calisabilen ve hazir olarak PHP + MySQL + Apache sunuculari saglayan AppServ (8.6.0) kullanilmistir. (Easy PHP, XAMPP vb. programlar da bulunmaktadir.)</p>
					<p>Apache 2.4.25 surumunu ve MySQL 5.7.17 surumunu bulundurmaktadir.</p></br>
					<p><b>Asama 1:</b>Ilk asamada, Next butonuna basarak ileri diyoruz.</p>
					<img src="img/kurulum_dokumantasyonu2.jpg"/></br></br>
					<p><b>Asama 2:</b>I Agree butonuna basarak lisans sozlesmesini kabul edip devam ediyoruz.</p>
					<img src="img/kurulum_dokumantasyonu3.jpg"/></br></br>
					<p><b>Asama 3:</b>AppServ programinin kurulmasini istediginiz dizini dilerseniz degistirebilirsiniz. Sonrasinda Next diyoruz.</p>
					<img src="img/kurulum_dokumantasyonu4.jpg"/></br></br>
					<p><b>Asama 4:</b>Hepsi secili olacak sekilde degisiklik yapmadan Next botununa basarak devam ediyoruz.</p>
					<img src="img/kurulum_dokumantasyonu5.jpg"/></br></br>
					<p><b>Asama 5:</b>Server Name: localhost, Administrator’s Email Address: rastgele bir e-posta adresi, Apache HTTP Port: 80 olarak geliyor(degistirilebilir), dokunmadan devam ediyoruz.</p>
					<img src="img/kurulum_dokumantasyonu6.jpg"/></br></br>
					<p><b>Asama 6:</b>MySQL hesabimiz icin sifre isteniyor. Sifremizi iki defa yazdiktan sonra karakter setine de dokunmadan kurulum islemini tamamliyoruz.</p>
					<img src="img/kurulum_dokumantasyonu7.jpg"/></br></br>
					<p><b>Asama 7:</b>Windows guvenlik uyarisi ile karsilasirsaniz, Erisime Izin Ver butonuna basarak devam ediyoruz.</p>
					<img src="img/kurulum_dokumantasyonu8.jpg"/></br></br>
					<p><b>Asama 8:</b>Finish butonuna basarak apache server, php, mysql, phpmyadmin kurulumunu sorunsuz olarak tamamlamis oluyoruz..</p>
					<img src="img/kurulum_dokumantasyonu9.jpg"/></br></br>
					</br><li><b>•	Veritabanının kurulumu</b></li>
					<p>&emsp;Appserv programinin kurulumundan sonra http://localhost/phpmyadmin/ adresinden kullanici adimiz (root) ve sifremiz (123456789) ile giris yaparak burada yeni database olusturma islemimiz saglikli ve pratik bir sekilde gerceklestirilebilmektedir.</p></br>
					<p><b>Database olusturma:</b></br>
					*Karsimiza gelen ekranda sol kisimda bulunan new linki ile yeni bir veritabani olusturma islemine basliyoruz.</br>
					<img src="img/kurulum_dokumantasyonu10.jpg"/></br></br>
					*Yeni veritabani olustur linkine tikladiktan sonra veritabani adini (Yazlab2_3) ve kullanılacak dil seçeneğini seçiyoruz.</br>
					<img src="img/kurulum_dokumantasyonu11.jpg"/></br></br>
					*Bu islemden sonra bizden veritabanina tablo eklememiz istenecek (kullanici). Tabloyu 3 alan olacak sekilde seciyoruz.</br>
					<img src="img/kurulum_dokumantasyonu12.jpg"/></br></br>
					*kullanici tablosuna 3 tane alan eklenecek. 1. alanı Birincil anahtar ve A_I(Otomatik artan sayi) olarak belirliyoruz. kullanici_adı ve kullanici_sifre alanı metinsel tipte oldugu icin onu var_char(16) olarak belirliyoruz.</br>
					<img src="img/kurulum_dokumantasyonu13.jpg"/></br></br>
					*Yatay menude Insert/Ekle linkine tiklayip ornek kullanici girdikten sonra GIT/GO butonuna tiklayarak kullanici ilave etmis oluyoruz.</p>
					<img src="img/kurulum_dokumantasyonu14.jpg"/></br></br>
					
					</br><li><b>•	Uygulamanın kurulumu </b></li>
					<p>&emsp;Bu Zayif Web Uygulamasinin kurulabilmesi icin oncelikle bilgisayarimiza Localhost saglayici AppServ (8.6.0) programini <a href="https://www.appserv.org/en/download/" target="_blank">link</a>'ten indirebilirsiniz. Setup kurulumundan sonra C:\AppServ konumuna gerekli dosyalar gelmis olacaktir.</p>
					<p>&emsp;Veritabani olusturmak icin http://localhost/phpmyadmin/ adresinden kullanici adimiz (root) ve sifremiz (123456789) ile giris yaparak veritabani olusturma, uzerinde degisiklikler yapma vb. islemleri uygulayabilirsiniz.</p>
					<p>&emsp;C:\AppServ\www konumunun icerisine web siteyi olusturan gerekli (html, php vb. uzantili) dosyalar atilir, (gerekliyse) veritabani bilgileri duzenlenir ve uygulama kullanima hazir hale gelmis olur.</p>
					</br><img src="img/kurulum_dokumantasyonu15.jpg"/>
				</ul>
			</div>
		</div>
		<div id="bottompage">
			<div id="inner"><span><a href="popup_kurulum_dokumantasyonu.php" target="popup" onclick="window.open('popup_kurulum_dokumantasyonu.php','Yardim','width=600,height=400')">Yardim</a></span> <!- yardim butonu ->
				<a title="Proje Sorumlulari: ">Projeyi Hazirlayanlar : Onur Karakaya & Can Ozer</a> <!- proje sorumlulari->
			</div>
		</div>
	</body>
</html>
