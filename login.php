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
				<form name="form1" method="post" action="checkin.php">
					<td>
						<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
							<tr>
								<td width="78">Kullanıcı adı</td>
								<td width="6">:</td>
								<td width="294"><input name="myusername" type="text" id="myusername"></td>
							</tr>
							<tr>
								<td>Şifre</td>
								<td width="6">:</td>
								<td><input name="mypassword" type="text" id="mypassword"></td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><input type="submit" name="Submit" value="Giriş"></td>
							</tr>
						</table>
					</td>
					</form>
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
