<?php // Dsunucu.com GAME HOSTING?>
<?php
session_start();
if(!isset($_SESSION['username'])){
	header("Location: login.php");
}
?>
<html>
	<head>
		<title>Dsunucu.com GAME HOSTING</title> <!- sayfanin sekme basligi ->
		<link href="style.css" rel="stylesheet" type="text/css" /> <!- style.css dosyasinda tanimlanmis duzenlemeleri ceker ->
		<link rel="shortcut icon" href="img/icon.ico"> <!- img/icon.ico dosyasini sayfa iconu yapar ->
	</head>
	<body>
		<div id="wrap">
			<div id="tophead"></div>
			<div id="header">
				<div id="logo">
					<h1 class="logotext">Dsunucu.com <span>GAMEHOSTING </span>Panel</h1> <!- sayfadaki baslik ->
				</div>
				<div>
					<h1>..................................................................................</h1>
				</div>
			</div>
			<div id="sidenotes">
				<div class="sidenav">
					<ul>
						<li><a class="active" href="index.php">Anasayfa</a></li> <!- sayfanin solunda secenek butonu olusturur ->
						<li><a href="">Server Bilgileri</a></li> <!- sayfanin solunda secenek butonu olusturur ->
						<li><a href="">Komut Konsolu</a></li> <!- sayfanin solunda secenek butonu olusturur ->
						<li><a href="">Panel Yetkili Bilgileri</a></li> <!- sayfanin solunda secenek butonu olusturur ->
						<li><a href="">Server Ayarları</a></li> <!- sayfanin solunda secenek butonu olusturur ->
						</br></br> <!- iki satir bosluk birakir ->
						<marquee behavior=alternate><b> Kullanici: <?php echo $_SESSION['username']; ?> </b></marquee> <!- kayan yazi ile kullanici ismini yazar ->
						<li><a href="logout.php">Cikis Yap</a></li> <!- sayfanin solunda secenek butonu olusturur ->
					</ul>
				</div>
			</div>
			<div id="contents"> <!- sayfa icerigiyle ilgili govde kismi ->
				<h2>&emsp;Dsunucu.com GAME HOSTING Nedir?</h2>
				</br><p>&emsp;Bireysel ve kurumsal internet çözümlerini, genç, dinamik ve yenilikçi kadromuz ile siz müşterilerimizin hizmetine sunuyoruz.</p>
				</br><p>&emsp;Hizmetlerimizi Alan Adı Servisleri, Web Hosting, Sunucu Kiralama ve Barındırma, güvenlik ve müşteri destek hizmetleri olarak gruplandırabiliriz.</p>
				</br><p>&emsp;Müşteri desteği şirketimizde en ön planda bulunmakta olup müşterilerimizin en doğru ve en hızlı desteği alabilmesi, işlerinin aksamaması adına destek ekibimiz 24/7 çalışmaktadır ve sektörde oluşan yenilikleri takip ederek sizlere en güncel bilgiyi en hızlı çözüm ile ulaştırmaktadır.</p>
				</br><p>&emsp;Müşteri destek hizmetimizi DESTEK adresinden, kayıtlı müşterilerimize aldıkları hizmetler ve ürünler bağlamında sağlamaktayız. Müşterilerimiz bu alandan destek operatörlerimize ulaşabildiği gibi sürekli güncellenen destek kütüphanemizden sorunlarının çözümlerine de ulaşabilmektedirler. Destek talepleri operatörlerimiz tarafından düzenli bir şekilde kontrol edilmektedir. Mevcut yapımızda mesai saatleri içerisinde müşterilerimize dönüş süremiz 5 ile 30 dakika arasındadır.</p>
				</br><p>&emsp;DSunucu, hosting servislerinde en güvenli ve en hızlı altyapı imkanlarını kullanmaktadır. Tüm servislerimizde müşterilerimize kalite, güven ve en hızlı çözümleri en güncel donanım ve yazılım altyapılarıyla sunmaktayız. Her bir sunucumuz sektörde öncü donanım sağlayıcılarından yüksek seviyede kurumsal hizmet vermeye yönelik rack tipi sunuculardan seçilmiştir. Bu sayede müşterilerimize kesintisiz ve yüksek erişilebilirlik oranı sağlayabilmekteyiz.</p>
				</br></br>
			</div>
		</div>
		<<div id="bottompage">
			<div id="inner"><span><a href="popup_index.php" target="popup" onclick="window.open('popup_index.php','Yardim','width=600,height=400')">Yardim</a></span> <!- yardim butonu ->
				<a title="Proje Sorumlulari: ">©2017 Dsunucu.com GAME HOSTING. Tüm hakları saklıdır. </a> <!- proje sorumlulari->
			</div>
		</div>
	</body>
</html>