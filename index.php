<?php session_start();?>
<!-- 

Author  : Luthfi Hamid Masykuri
Email   : metalic_devil_racer@yahoo.co.id
Year    : 2011

"Dedicated for my Lovely Senior High School SMA Negeri 3 Semarang"

-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="google-site-verification" content="PExIuRD9F5g_FRW1VXtMCDuxVuaMITjDbzneEpp2rZQ" />
<meta  name="keyword" content="osis,sma3,sman3,sma n 3,sma negeri 3,smaga,sma negeri 3 semarang,pensaga,web osis,ganesha muda,pemuda 149,sbi,sekolah bertaraf internasional,olimpiade,olimpiade sains,lomba,gso,ganesha science olympiad,matematika,biologi,fisika,komputer,informatika,lomba matematika,lomba biologi,lomba fisika,lomba komputer,lomba informatika,lomba smp,olimpiade smp,info lomba,info olimpiade"/>
<title>Ganesha Science Olympiad 2011 - SMAN 3 Semarang</title>
	<link rel="stylesheet" type="text/css" href="layout/tema.css" />
	<link rel="stylesheet" type="text/css" href="plugin/qFrame/style/style.css" />	
	<link rel="shortcut icon" href="image/icon.png" >
	
	<script type="text/javascript" src="plugin/jquery-1.2.3.pack.js"></script>
	<script type="text/javascript" src="plugin/jquery.validate.pack.js"></script>
</head>
<body style="font-family:Tahoma; margin-top:20px; background-image:url(image/all_bg.gif)">
<table align="center" cellpadding="0" cellspacing="0" width="980px" style="border:1px solid #CCCCCC; -moz-border-radius-topleft: 20px;-moz-border-radius-topright: 20px;font-size:13px;background:#FFFFFF" border="0">
	<tr ><td width="205px" height="150px"> &nbsp;&nbsp;&nbsp; <b><center><img src="image/logo.png" width="170px" /></center></b><br /></td>
	<td><div><img src="image/header.png" height="100px"/></div><div id="topLink"><a href="index.php"> Home </a> | <a href="index.php?page=_materi"> Materi </a> | <a href="index.php?page=_formulir_pendaftaran">Pendaftaran Online</a> | <a href="index.php?page=_telah_terdaftar">Data Calon Peserta</a> | <a href="index.php?page=_info">  Info</a> | <a href="index.php?page=_hubungi_kami">  Contacts</a> | <a href="index.php?page=_lokasi">  Lokasi</a></div></td>
	</tr>
</table>

<table align="center" cellpadding="1" cellspacing="1" width="980px" style="border:1px solid #CCCCCC;  text-align:right;padding:0px 0px 0px 0px; margin-top:2px;background:#FFFFFF" border="0">
	<tr >
	<td style="font-size:12px; color:#666666;"><marquee><b>Pendaftaran Offline (bisa melakukan pembayaran langsung di tempat) dibuka Senin - Jumat pk. 13.00 - 16.00 di depan TU SMA Negeri 3 Semarang. Klik <a href="index.php?view=_lokasi">di sini</a> untuk mengetahui lokasinya. Don't miss it!</b></marquee> </td>
  </tr>
</table>

<table align="center" cellpadding="1" cellspacing="1" width="980px" style="border:1px solid #CCCCCC; background:#FFFFFF; font-size:13px; margin-top:2px" border="0">
	<tr><td width="80%" height="300" valign="top" style="padding:3px 5px 0px 10px;">
	<?php
		if(isset($_REQUEST['page'])){
			$mn=$_REQUEST['page'];
			if($mn=='_formulir_pendaftaran'){
				include("include/_formulir.php");
			}else if($mn=='p_daftar'){
				include("include/p_daftar.php");
			}else if($mn=='_info'){
				include("include/_info.php");
			}else if($mn=='_telah_terdaftar'){
				include("include/_telah_terdaftar.php");
			}else if($mn=='_hubungi_kami'){
				include("include/kontak_kami.php");
			}else if($mn=='_materi'){
				include("include/_materi.php");
			}else if($mn=='_lokasi'){
				include("include/_lokasi.php");
			}	
			//---------------------------------------
		}else{
			include("include/_menu.php");
		}
	?>
	</td>
	<td width="10%" valign="top" style="padding:0 5px 0px 5px"><?php include("include/_sidemenu.php");?></td>
	</tr>
</table>
<table align="center" cellpadding="1" cellspacing="1" width="980px" style="border:1px solid #CCCCCC;  text-align:right;padding:0px 0px 0px 0px; -moz-border-radius-bottomleft: 20px;-moz-border-radius-bottomright: 20px; margin-top:2px;background:#FFFFFF" border="0">
	<tr >
	<td align="center" style="font-size:12px; color:#666666;"><b>&copy; 2011 - Ganesha Science Olympiad</b> <br>info lebih lanjut tentang cara penggunaan sistem ini, kirim email ke <a href="mailto:gsosmaga@yahoo.com">admin</a> situs atau hubungi OSIS SMA Negeri 3 Semarang</td>
  </tr>
</table>
</body>
</html>
<!-- 

Author  : Luthfi Hamid Masykuri
Email   : metalic_devil_racer@yahoo.co.id
Year    : 2011

"Dedicated for my Lovely Senior High School SMA Negeri 3 Semarang"

-->