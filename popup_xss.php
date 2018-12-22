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
			</br><li><b>	XSS (Reflected) Nedir?</b></li>
			<p>&emsp;Reflected XSS saldırısı bir web uygulamasının linkinde eğer parametre varsa ve bu parametrenin değeri sayfaya çıktı olarak "yansıtılıyorsa" saldırganların bu mekanizmayı kullanarak kendi değerlerini sayfaya yansıttırması işlemine denir. </p>
			<p>&emsp;XSS saldırı URL alanlarına ve ya veri giriş alanlarına yapılır. Yapılan bu saldırı sadece XSS saldırısı yapan kullanıcı tarafından görülür. Ziyaretçiler bu saldırıyı göremezler. Bu yüzden URL alanında çalışan Reflected XSS saldırılarında, saldırgan URL adresini e-mail gibi çeşitli iletişim kanalları ile göndererek kurban avına çıkar.</p>
			</br><li><b>	Güvensiz kodlama pratiği:</b></li>
			<p>&emsp;if( array_key_exists( "isim", $_GET ) && $_GET[ 'isim' ] != NULL ) {</br>// GET istegiyle yollanmis isim degiskeninde bir deger olup olmadigi sorgulanir </p>
			<p>&emsp;echo 'Merhaba ' . $_GET[ 'isim' ] . '';</br>// isim degiskenindeki deger girilen duzene gore ekrana basilir </p>
			<p>&emsp;}</p>
			<p>&emsp;<span style="color:Red">İstenen veri GET ile gonderilmis olup giris butonuna basmanızla metin kutusundaki kelimenin olduğu linki tarayıcınızın adres çubuğuna girip ENTER'lamanız arasında bir fark yoktur. İkisi de aynı işi yapmaktadır. Dolayısıyla bu ilişkiyi bilen saldırgan kendi hazırladığı linki kurbana tıklatarak sanki kurban metin kutusuna veri girmiş de butona basmış gibi bir duruma sokulabilir. </span></p>
			</br><li><b>	Örnek görüntü:</br></b></li></br>
			<img src="img/xss1.png"/></br>
			</br><li><b>	Sömürü:</b></li>
			<p>&emsp;● version() fonksiyonu kullanılan veritabanı yazılımının versiyonunu verir. </p>
			<p><b>Kod örneğinde '*' ifadeleri yerine '<' koyulmalıdır...</b></p>
			<p>Metin Kutusuna Girilecek Kod:</br>*script>alert('Sayfa XSS Açığına Sahip');*/script></p>
			<p>URL:</br>http://localhost/YazLab2_3/xss.php?isim=%3Cscript%3Ealert%28%27Sayfa+XSS+A%C3%A7%C4%B1%C4%9F%C4%B1na+Sahip%27%29%3B%3C%2Fscript%3E+</p>
			<img src="img/xss2.png"/></br>
			</br><li><b>	İyileştirme pratiği:</b></li>
			<p>&emsp;<span style="color:Red">Kullanıcıdan alınan degisken verisini 'GET' ile değil 'POST' ile işleme sokmak gereklidir</span></p>
		</ul>
	</body>
</html>