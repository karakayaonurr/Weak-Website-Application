<?php // Dsunucu.com GAME HOSTING?>
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
						<li><a class="active" href="index.php">Giris Ekrani</a></li> <!- sayfanin solunda secenek butonu olusturur ->
					</ul>
				</div>
			</div>
			<div id="contents">
				<?php 
					include('config.php');
					$host=$config['dbhost']; // Host adi 
					$username=$config['dbusername']; // Mysql kullanıcı adi 
					$password=$config['dbpassword']; // Mysql şifresi 
					$db_name=$config['dbname']; // Veritabani adı 
					$tbl_name=$config['users_table']; // Tablo adı 
					
					// Server ve seçili veritabanına bağlanılır
					mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
					mysql_select_db("$db_name")or die("cannot select DB");

					// $myusername ve $mypassword değişkenlerine ulaşılır
					$myusername=$_POST['myusername']; 
					$mypassword=$_POST['mypassword']; 

					// MySQL'e enjekte edilir
					$myusername = stripslashes($myusername);
					$mypassword = stripslashes($mypassword);
					$myusername = mysql_real_escape_string($myusername);
					$mypassword = md5(mysql_real_escape_string($mypassword));
					$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
					$result=mysql_query($sql);

					// Satir sayisi sayilir
					$count=mysql_num_rows($result);

					// Eger eşleşme olursa 1 döndürülür
					if($count==1){
						session_start();
						$_SESSION['username'] = $myusername;
					// login_success.php dosyasına yönlendirilir
					header("Location: success.php");
					}
					else {
						unset($_SESSION);
						header("refresh:4;url=index.php"); // Kullanici girisi yanlis ise 4 saniye sonra index.php ye gonderir
						die('&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Girilen kullanici adi veya sifre <b>hatali</b>...</br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;4 saniye sonra giris sayfasina yonlendirileceksiniz.</br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Bu süreyi beklememek için <a href="index.php">TIKLAYINIZ</a>');
					}
				?>
				</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
			</div>
		</div>
		<div id="bottompage">
			<div id="inner"><span><a href="popup_index.php" target="popup" onclick="window.open('popup_index.php','Yardim','width=600,height=400')">Yardim</a></span> <!- yardim butonu ->
				<a title="Proje Sorumlulari: ">©2017 Dsunucu.com GAME HOSTING. Tüm hakları saklıdır. </a> <!- proje sorumlulari->
			</div>
		</div>
	</body>
</html>