<? 
	session_start();
	if(!isset($_SESSION['userAdmin']) and !isset($_SESSION['passAdmin'])){
		header("location:index.php");
	}else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
<title>GSO Administration System</title>
<link rel="shortcut icon" href="../image/icon.png" >
<link rel="stylesheet" type="text/css" href="../layout/tema.css" />
<link rel="stylesheet" type="text/css" href="../plugin/qFrame/style/style.css" />
<script type="text/javascript" src="../plugin/jquery-1.2.3.pack.js"></script>
<script type="text/javascript" src="../plugin/jquery.validate.pack.js"></script>

<style type="text/css">
	a {text-decoration:none;
		color:#006699;
	}
</style>
</head>
<body style="margin-top:20px;">
<div style="font-size:16px; font-family:Arial; font-weight:bold; color:#666666/;margin-left:70px"><img src="../image/cpanel.png"  border="0" align="left" /> Formulir Pendaftaran Online - <a href="../">GANESHA SCIENCE OLYMPIAD</a><br /> <a href="logout.php">[keluar]</a></div>
<table align="center" cellpadding="1" cellspacing="1" border="0" width="90%" style="border:1px solid #CCCCCC; -moz-border-radius: 5px; background:#FFFFFF; font-size:13px; font-family:Tahoma; color:#666666">
		<tr>
			<td width="180px" valign="top" style="border-right:3px solid #CCCCCC; padding:0px 3px 0 3px" bgcolor="#EAEAEA">
			<div id="box">
				<div id="box_title">main<font color="#CCCCCC">menu</font></div>
				<div id="box_child" align="right"><a href="main_menu.php?view=_main">Home</a></div>
           <div id="box">
				<div id="box_title">Data <font color="#CCCCCC">Pendaftar</font></div>
				<div id="box_child" align="right"><a href="main_menu.php?view=biologi">Biologi </a></div>
                <div id="box_child" align="right"><a href="main_menu.php?view=fisika">Fisika </a></div>
                <div id="box_child" align="right"><a href="main_menu.php?view=matematika">Matematika</a></div>
                <div id="box_child" align="right"><a href="main_menu.php?view=komputer">Komputer</a></div>
			</div>
            
            <div id="box">
				<div id="box_title">Data <font color="#CCCCCC">Pembayaran</font></div>
				<div id="box_child" align="right"><a href="main_menu.php?view=bayar_biologi">Biologi </a></div>
                <div id="box_child" align="right"><a href="main_menu.php?view=bayar_fisika">Fisika </a></div>
                <div id="box_child" align="right"><a href="main_menu.php?view=bayar_matematika">Matematika</a></div>
                <div id="box_child" align="right"><a href="main_menu.php?view=bayar_komputer">Komputer</a></div>
			</div>
			
            <div id="box">
				<div id="box_title">Print <font color="#CCCCCC">Sertifikat</font></div>
				<div id="box_child" align="right"><a href="piagam.php?bid=bio" target="_blank">Biologi </a></div>
                <div id="box_child" align="right"><a href="piagam.php?bid=fis" target="_blank">Fisika </a></div>
                <div id="box_child" align="right"><a href="piagam.php?bid=mat" target="_blank">Matematika</a></div>
                <div id="box_child" align="right"><a href="piagam.php?bid=tik" target="_blank">Komputer</a></div>
			</div>
            
			<div id="box">
				<div id="box_title">export-to-<font color="#CCCCCC">excel</font></div>
				<div id="box_child" align="right"><a href="biologi_xls.php">Biologi </a></div>
                <div id="box_child" align="right"><a href="fisika_xls.php">Fisika </a></div>
                <div id="box_child" align="right"><a href="matematika_xls.php">Matematika</a></div>
                <div id="box_child" align="right"><a href="komputer_xls.php">Komputer</a></div>
			</div>
			
			<div id="box">
				<div id="box_title">too<font color="#CCCCCC">ls</font></div>
				<div id="box_child" align="right"><a href="main_menu.php?view=admin">Input Admin</a></div>
				<div id="box_child" align="right"><a href="main_menu.php?view=set_formulir">Set Halaman Formulir</a></div>
			</div>
			</td>
			<td valign="top" height="400px">
			<?
				if(isset($_REQUEST['view'])){
					$main=$_REQUEST['view'];
					if($main=='admin'){
						include("t_admin.php");
					}else if($main=='set_formulir'){
						include("set_formulir.php");
					}else if($main=='biologi'){
						include("biologi.php");
					}else if($main=='fisika'){
						include("fisika.php");
					}else if($main=='matematika'){
						include("matematika.php");
					}else if($main=='komputer'){
						include("komputer.php");
					}else if($main=='bayar_biologi'){
						include("bayar_biologi.php");
					}else if($main=='bayar_fisika'){
						include("bayar_fisika.php");
					}else if($main=='bayar_matematika'){
						include("bayar_matematika.php");
					}else if($main=='bayar_komputer'){
						include("bayar_komputer.php");
					}else{
						include("_main.php");
					}
				}
			?>	
			</td>
		</tr>
</table>
<div style="text-align:center; color:#666666; font-size:12px; padding:10px 0px 0px 0px; font-family:Tahoma">&copy; 2011 - Administrator OSIS SMA NEGERI 3 SEMARANG</div>
</body>
</html>
<?
}
?>