<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
<title>_menu</title>
<style type="text/css">
	a{text-decoration:none;
	color:#006699;}
	a:hover{text-decoration:underline; }
</style>
    <script type="text/javascript" src="../plugin/jq/jquery-1.3.2.js"></script>
    <script type="text/javascript" src="../plugin/jq/ui/effects.core.js"></script>
    <script type="text/javascript" src="../plugin/jq/ui/effects.bounce.js"></script>
    <script type="text/javascript">
		function runEffect(){
			$("#animasi").effect("bounce", { distance: 20});
		};
		function runEffect1(){
			$("#animasi1").effect("bounce", { distance: 20});
		};
		function runEffect2(){
			$("#animasi2").effect("bounce", { distance: 20});
		};
		function runEffect3(){
			$("#animasi3").effect("bounce", { distance: 20});
		};
    </script>
</head>
<body>
<h3> &nbsp;Welcome to administration page, use this page for configuration your system.</h3>
<table align="center" cellpadding="1" cellspacing="1" style="margin-top:50px">
	<tr>
		<td class='cursor_move'><a href="main_menu.php?view=biologi"><img src="../image/content.png" border="0" height="100" width="110" title="Biologi" /></a></td>
        <td colspan="10">&nbsp;</td>
        <td class='cursor_move'><a href="main_menu.php?view=fisika"><img src="../image/content.png" border="0" height="100" width="110" title="Fisika" /></a></td>
        <td colspan="10">&nbsp;</td>
        <td class='cursor_move'><a href="main_menu.php?view=matematika"><img src="../image/content.png" border="0" height="100" width="110" title="Matematika" /></a></td>
        <td colspan="10">&nbsp;</td>
        <td class='cursor_move'><a href="main_menu.php?view=komputer"><img src="../image/content.png" border="0" height="100" width="110" title="Komputer" /></a></td>
        <td colspan="10">&nbsp;</td>
		<td class='cursor_move'><a href="main_menu.php?view=admin"><img src="../image/user_login-icon.png" border="0" title="Administrator" /></a></td>
	</tr>
	<tr>
		<td align="center"><a href="main_menu.php?view=biologi">Biologi</a></td>
        <td colspan="10">&nbsp;</td>
        <td align="center"><a href="main_menu.php?view=fisika">Fisika</a></td>
        <td colspan="10">&nbsp;</td>
        <td align="center"><a href="main_menu.php?view=matematika">Matematika</a></td>
        <td colspan="10">&nbsp;</td>
        <td align="center"><a href="main_menu.php?view=komputer">Komputer</a></td>
        <td colspan="10">&nbsp;</td>
		<td align="center"><a href="main_menu.php?view=admin">Administrator</a></td>
	</tr>
</table><br />
<? require_once("../plugin/qFrame/qFrame.php");
	$op=new q_sql();
	//$cnfg=new q_tools();
	$tbl=new q_grid();
	//Jumlah
	$bio=$op->cs_query("SELECT * FROM bio ORDER BY no ASC");
	$fis=$op->cs_query("SELECT * FROM fis ORDER BY no ASC");
	$mat=$op->cs_query("SELECT * FROM mat ORDER BY no ASC");
	$tik=$op->cs_query("SELECT * FROM tik ORDER BY no ASC");
	//BANTEN
	$bantenbio=mysql_num_rows($view=$op->cs_query("SELECT * FROM bio WHERE prov_sklh='BANTEN' ORDER BY no ASC"));
	$bantenfis=mysql_num_rows($view=$op->cs_query("SELECT * FROM fis WHERE prov_sklh='BANTEN' ORDER BY no ASC"));
	$bantenmat=mysql_num_rows($view=$op->cs_query("SELECT * FROM mat WHERE prov_sklh='BANTEN' ORDER BY no ASC"));
	$bantentik=mysql_num_rows($view=$op->cs_query("SELECT * FROM tik WHERE prov_sklh='BANTEN' ORDER BY no ASC"));
	$jml_banten=$bantenbio+$bantenfis+$bantenmat+$bantentik;
	//BALI
	$balibio=mysql_num_rows($view=$op->cs_query("SELECT * FROM bio WHERE prov_sklh='BALI' ORDER BY no ASC"));
	$balifis=mysql_num_rows($view=$op->cs_query("SELECT * FROM fis WHERE prov_sklh='BALI' ORDER BY no ASC"));
	$balimat=mysql_num_rows($view=$op->cs_query("SELECT * FROM mat WHERE prov_sklh='BALI' ORDER BY no ASC"));
	$balitik=mysql_num_rows($view=$op->cs_query("SELECT * FROM tik WHERE prov_sklh='BALI' ORDER BY no ASC"));
	$jml_bali=$balibio+$balifis+$balimat+$balitik;
	//DIY
	$diybio=mysql_num_rows($view=$op->cs_query("SELECT * FROM bio WHERE prov_sklh='DIY' ORDER BY no ASC"));
	$diyfis=mysql_num_rows($view=$op->cs_query("SELECT * FROM fis WHERE prov_sklh='DIY' ORDER BY no ASC"));
	$diymat=mysql_num_rows($view=$op->cs_query("SELECT * FROM mat WHERE prov_sklh='DIY' ORDER BY no ASC"));
	$diytik=mysql_num_rows($view=$op->cs_query("SELECT * FROM tik WHERE prov_sklh='DIY' ORDER BY no ASC"));
	$jml_diy=$diybio+$diyfis+$diymat+$diytik;
	//DKI JAKARTA
	$jktbio=mysql_num_rows($view=$op->cs_query("SELECT * FROM bio WHERE prov_sklh='DKI JAKARTA' ORDER BY no ASC"));
	$jktfis=mysql_num_rows($view=$op->cs_query("SELECT * FROM fis WHERE prov_sklh='DKI JAKARTA' ORDER BY no ASC"));
	$jktmat=mysql_num_rows($view=$op->cs_query("SELECT * FROM mat WHERE prov_sklh='DKI JAKARTA' ORDER BY no ASC"));
	$jkttik=mysql_num_rows($view=$op->cs_query("SELECT * FROM tik WHERE prov_sklh='DKI JAKARTA' ORDER BY no ASC"));
	$jml_jkt=$jktbio+$jktfis+$jktmat+$jkttik;
	//JAWA BARAT
	$jabarbio=mysql_num_rows($view=$op->cs_query("SELECT * FROM bio WHERE prov_sklh='JAWA BARAT' ORDER BY no ASC"));
	$jabarfis=mysql_num_rows($view=$op->cs_query("SELECT * FROM fis WHERE prov_sklh='JAWA BARAT' ORDER BY no ASC"));
	$jabarmat=mysql_num_rows($view=$op->cs_query("SELECT * FROM mat WHERE prov_sklh='JAWA BARAT' ORDER BY no ASC"));
	$jabartik=mysql_num_rows($view=$op->cs_query("SELECT * FROM tik WHERE prov_sklh='JAWA BARAT' ORDER BY no ASC"));
	$jml_jabar=$jabarbio+$jabarfis+$jabarmat+$jabartik;
	//JAWA TENGAH
	$jatengbio=mysql_num_rows($view=$op->cs_query("SELECT * FROM bio WHERE prov_sklh='JAWA TENGAH' ORDER BY no ASC"));
	$jatengfis=mysql_num_rows($view=$op->cs_query("SELECT * FROM fis WHERE prov_sklh='JAWA TENGAH' ORDER BY no ASC"));
	$jatengmat=mysql_num_rows($view=$op->cs_query("SELECT * FROM mat WHERE prov_sklh='JAWA TENGAH' ORDER BY no ASC"));
	$jatengtik=mysql_num_rows($view=$op->cs_query("SELECT * FROM tik WHERE prov_sklh='JAWA TENGAH' ORDER BY no ASC"));
	$jml_jateng=$jatengbio+$jatengfis+$jatengmat+$jatengtik;
	//JAWA TIMUR
	$jatimbio=mysql_num_rows($view=$op->cs_query("SELECT * FROM bio WHERE prov_sklh='JAWA TIMUR' ORDER BY no ASC"));
	$jatimfis=mysql_num_rows($view=$op->cs_query("SELECT * FROM fis WHERE prov_sklh='JAWA TIMUR' ORDER BY no ASC"));
	$jatimmat=mysql_num_rows($view=$op->cs_query("SELECT * FROM mat WHERE prov_sklh='JAWA TIMUR' ORDER BY no ASC"));
	$jatimtik=mysql_num_rows($view=$op->cs_query("SELECT * FROM tik WHERE prov_sklh='JAWA TIMUR' ORDER BY no ASC"));
	$jml_jatim=$jatimbio+$jatimfis+$jatimmat+$jatimtik;
	//JUMLAH
	$bio=$balibio+$bantenbio+$diybio+$jktbio+$jabarbio+$jatengbio+$jatimbio;
	$fis=$balifis+$bantenfis+$diyfis+$jktfis+$jabarfis+$jatengfis+$jatimfis;
	$mat=$balibio+$bantenbio+$diymat+$jktmat+$jabarmat+$jatengmat+$jatimmat;
	$tik=$balibio+$bantentik+$diytik+$jkttik+$jabartik+$jatengtik+$jatimtik;
	$jml=$bio+$fis+$mat+$tik;
	//BELUM BAYAR
	$belumbio=mysql_num_rows($view=$op->cs_query("SELECT * FROM bio WHERE status='0' ORDER BY no ASC"));
	$belumfis=mysql_num_rows($view=$op->cs_query("SELECT * FROM fis WHERE status='0' ORDER BY no ASC"));
	$belummat=mysql_num_rows($view=$op->cs_query("SELECT * FROM mat WHERE status='0' ORDER BY no ASC"));
	$belumtik=mysql_num_rows($view=$op->cs_query("SELECT * FROM tik WHERE status='0' ORDER BY no ASC"));
	//SUDAH BAYAR
	$sudahbio=mysql_num_rows($view=$op->cs_query("SELECT * FROM bio WHERE status='1' ORDER BY no ASC"));
	$sudahfis=mysql_num_rows($view=$op->cs_query("SELECT * FROM fis WHERE status='1' ORDER BY no ASC"));
	$sudahmat=mysql_num_rows($view=$op->cs_query("SELECT * FROM mat WHERE status='1' ORDER BY no ASC"));
	$sudahtik=mysql_num_rows($view=$op->cs_query("SELECT * FROM tik WHERE status='1' ORDER BY no ASC"));
	//TOTAL BAYAR
	$sudah=$sudahbio+$sudahfis+$sudahmat+$sudahtik;
	$belum=$belumbio+$belumfis+$belummat+$belumtik;
?>
<center><h3>Data Statistik Ganesha Science Olympiad</h3></center>
<table cellpadding="3px" cellspacing="1" border="0" align="center" width="600px" >
<? $tbl->headtb("Keterangan,Biologi,Fisika,Matematika,Komputer,Total"); ?>
<tr bgcolor="#FFFBF0" class='cursor_move'>
	<td style="padding-left: 20px;" width="30%">Provinsi Bali</td>
    <td width="12%" align="center"><? echo $balibio; ?></td>
    <td width="12%" align="center"><? echo $balifis; ?></td>
    <td width="12%" align="center"><? echo $balimat; ?></td>
    <td width="12%" align="center"><? echo $balitik; ?></td>
    <td width="12%" align="center"><b><? echo $jml_bali; ?></b></td>
</tr>
<tr bgcolor="#EAEAEA" class='cursor_move'>
	<td style="padding-left: 20px;" width="30%">Provinsi Banten</td>
    <td width="12%" align="center"><? echo $bantenbio; ?></td>
    <td width="12%" align="center"><? echo $bantenfis; ?></td>
    <td width="12%" align="center"><? echo $bantenmat; ?></td>
    <td width="12%" align="center"><? echo $bantentik; ?></td>
    <td width="12%" align="center"><b><? echo $jml_banten; ?></b></td>
</tr>
<tr bgcolor="#FFFBF0" class='cursor_move'>
	<td style="padding-left: 20px;" width="30%">Provinsi DIY</td>
    <td width="12%" align="center"><? echo $diybio; ?></td>
    <td width="12%" align="center"><? echo $diyfis; ?></td>
    <td width="12%" align="center"><? echo $diymat; ?></td>
    <td width="12%" align="center"><? echo $diytik; ?></td>
    <td width="12%" align="center"><b><? echo $jml_diy; ?></b></td>
</tr>
<tr bgcolor="#EAEAEA" class='cursor_move'>
	<td style="padding-left: 20px;" width="30%">Provinsi DKI Jakarta</td>
    <td width="12%" align="center"><? echo $jktbio; ?></td>
    <td width="12%" align="center"><? echo $jktfis; ?></td>
    <td width="12%" align="center"><? echo $jktmat; ?></td>
    <td width="12%" align="center"><? echo $jkttik; ?></td>
    <td width="12%" align="center"><b><? echo $jml_jkt; ?></b></td>
</tr>
<tr bgcolor="#FFFBF0" class='cursor_move'>
	<td style="padding-left: 20px;" width="30%">Provinsi Jawa Barat</td>
    <td width="12%" align="center"><? echo $jabarbio; ?></td>
    <td width="12%" align="center"><? echo $jabarfis; ?></td>
    <td width="12%" align="center"><? echo $jabarmat; ?></td>
    <td width="12%" align="center"><? echo $jabartik; ?></td>
    <td width="12%" align="center"><b><? echo $jml_jabar; ?></b></td>
</tr>
<tr bgcolor="#EAEAEA" class='cursor_move'>
	<td style="padding-left: 20px;" width="30%">Provinsi Jawa Tengah</td>
    <td width="12%" align="center"><? echo $jatengbio; ?></td>
    <td width="12%" align="center"><? echo $jatengfis; ?></td>
    <td width="12%" align="center"><? echo $jatengmat; ?></td>
    <td width="12%" align="center"><? echo $jatengtik; ?></td>
    <td width="12%" align="center"><b><? echo $jml_jateng; ?></b></td>
</tr>
<tr bgcolor="#FFFBF0" class='cursor_move'>
	<td style="padding-left: 20px;" width="30%">Provinsi Jawa Timur</td>
    <td width="12%" align="center"><? echo $jatimbio; ?></td>
    <td width="12%" align="center"><? echo $jatimfis; ?></td>
    <td width="12%" align="center"><? echo $jatimmat; ?></td>
    <td width="12%" align="center"><? echo $jatimtik; ?></td>
    <td width="12%" align="center"><b><? echo $jml_jatim; ?></b></td>
</tr>
<tr bgcolor="#006699" style="color:#FFF">
	<td width="30%" align="center"><b>Jumlah</b></td>
    <td width="12%" align="center"><b><? echo $bio; ?></b></td>
    <td width="12%" align="center"><b><? echo $fis; ?></b></td>
    <td width="12%" align="center"><b><? echo $mat; ?></b></td>
    <td width="12%" align="center"><b><? echo $tik; ?></b></td>
    <td width="12%" align="center"><b><? echo $jml; ?></b></td>
</tr>
</table>

<center><h3>Data Statistik Pembayaran Ganesha Science Olympiad</h3></center>
<table cellpadding="3px" cellspacing="1" border="0" align="center" width="600px" >
<? $tbl->headtb("Mapel,Belum Bayar,Sudah Bayar"); ?>
<tr bgcolor="#FFFBF0" class='cursor_move'>
	<td style="padding-left: 20px;" width="30%">Biologi</td>
    <td width="12%" align="center"><? echo $belumbio; ?></td>
    <td width="12%" align="center"><? echo $sudahbio; ?></td>
</tr>
<tr bgcolor="#EAEAEA" class='cursor_move'>
	<td style="padding-left: 20px;" width="30%">Fisika</td>
    <td width="12%" align="center"><? echo $belumfis; ?></td>
    <td width="12%" align="center"><? echo $sudahfis; ?></td>
</tr>
<tr bgcolor="#FFFBF0" class='cursor_move'>
	<td style="padding-left: 20px;" width="30%">Matematika</td>
    <td width="12%" align="center"><? echo $belummat; ?></td>
    <td width="12%" align="center"><? echo $sudahmat; ?></td>
</tr>
<tr bgcolor="#EAEAEA" class='cursor_move'>
	<td style="padding-left: 20px;" width="30%">Komputer</td>
    <td width="12%" align="center"><? echo $belumtik; ?></td>
    <td width="12%" align="center"><? echo $sudahtik; ?></td>
</tr>
<tr bgcolor="#006699" style="color:#FFF">
	<td width="30%" align="center"><b>Jumlah</b></td>
    <td width="12%" align="center"><b><? echo $belum; ?></b></td>
    <td width="12%" align="center"><b><? echo $sudah; ?></b></td>
</tr>
</table>
<?
$arr=array($view=$op->cs_query("SELECT nm_sekolah FROM bio ORDER BY nm_sekolah ASC"));
	$sekolah=$arr[2];
	echo $sekolah;
?>
</body>
</html>
