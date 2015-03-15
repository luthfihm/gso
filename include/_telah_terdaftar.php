<div id="judul_page"><table border=0><tr><td><img src="image/info_icon.png" border=0 align="absmiddle"></td><td>Data Calon Pendaftar</td></tr></table></div>
<style type="text/css">
	#anim:hover{background:#FFFFCC}
</style>
<?
	require_once("plugin/qFrame/qFrame.php");
	$op=new q_sql();
	//$cnfg=new q_tools();
	$tbl=new q_grid();
?>
<div><table border=0><tr rowspan=2><td>&nbsp;</td></tr><tr><td><img src="image/point.png" border=0 align="absmiddle"></td><td><strong>BIOLOGI</strong></td></tr></table></div>
<table cellpadding="1" cellspacing="1" width="99%" border="0" align="center" bgcolor="#CCCCCC">
<? $tbl->headtb("No.Peserta,Nama,Asal Sekolah,Kota,Provinsi,Tgl.Daftar,Status Bayar"); ?>
<?
	$view=$op->cs_query("SELECT * FROM bio ORDER BY no ASC");
	$i=1;
	while($dt=mysql_fetch_array($view)){
	if($i % 2){
		$bg="#EAEAEA";
	}else{
		$bg="#FFFFFF";
	}
?>
	<tr bgcolor="<? echo $bg;?>" style="color:#333333; font-size:12px" id="anim">
		<td align="center" width="65px"><? echo $dt['no_daftar'];?></td>
		<td style="padding-left:3px" width="180px"><? echo $dt['nm'];?></td>
		<td style="padding-left:3px" width="130px"><? echo $dt['nm_sekolah'];?></td>
        <td style="center" width="100px"><? echo $dt['kota_sklh'];?></td>
        <td style="center" width="80px"><? echo $dt['prov_sklh'];?></td>
        <td align="center" width="80px"><? echo $dt['tgl_daftar'];?></td>
        <td align="center" width="80px"><? if ($dt['status']==1){echo "SUDAH";} else{echo "BELUM";};?></td>
    </tr>
<?
$i++;
}
?>
<tr bgcolor="#FFFFFF">
	<td colspan="7" align="right">Total Pendaftar: <? echo mysql_num_rows($view);?>&nbsp;</td></tr>
</table>
<div><table border=0><tr rowspan=2><td>&nbsp;</td></tr><tr><td><img src="image/point.png" border=0 align="absmiddle"></td><td><strong>FISIKA</strong></td></tr></table></div>
<table cellpadding="1" cellspacing="1" width="99%" border="0" align="center" bgcolor="#CCCCCC">
<? $tbl->headtb("No.Peserta,Nama,Asal Sekolah,Kota,Provinsi,Tgl.Daftar,Status Bayar"); ?>
<?
	$view=$op->cs_query("SELECT * FROM fis ORDER BY no ASC");
	$i=1;
	while($dt=mysql_fetch_array($view)){
	if($i % 2){
		$bg="#EAEAEA";
	}else{
		$bg="#FFFFFF";
	}
?>
	<tr bgcolor="<? echo $bg;?>" style="color:#333333; font-size:12px" id="anim">
		<td align="center" width="65px"><? echo $dt['no_daftar'];?></td>
		<td style="padding-left:3px" width="180px"><? echo $dt['nm'];?></td>
		<td style="padding-left:3px" width="130px"><? echo $dt['nm_sekolah'];?></td>
        <td style="center" width="100px"><? echo $dt['kota_sklh'];?></td>
        <td style="center" width="80px"><? echo $dt['prov_sklh'];?></td>
        <td align="center" width="80px"><? echo $dt['tgl_daftar'];?></td>
        <td align="center" width="80px"><? if ($dt['status']==1){echo "SUDAH";} else{echo "BELUM";};?></td>
	</tr>
<?
$i++;
}
?>
<tr bgcolor="#FFFFFF">
	<td colspan="7" align="right">Total Pendaftar: <? echo mysql_num_rows($view);?>&nbsp;</td></tr>
</table>
<div><table border=0><tr rowspan=2><td>&nbsp;</td></tr><tr><td><img src="image/point.png" border=0 align="absmiddle"></td><td><strong>MATEMATIKA</strong></td></tr></table></div>
<table cellpadding="1" cellspacing="1" width="99%" border="0" align="center" bgcolor="#CCCCCC">
<? $tbl->headtb("No.Peserta,Nama,Asal Sekolah,Kota,Provinsi,Tgl.Daftar,Status Bayar"); ?>
<?
	$view=$op->cs_query("SELECT * FROM mat ORDER BY no ASC");
	$i=1;
	while($dt=mysql_fetch_array($view)){
	if($i % 2){
		$bg="#EAEAEA";
	}else{
		$bg="#FFFFFF";
	}
?>
	<tr bgcolor="<? echo $bg;?>" style="color:#333333; font-size:12px" id="anim">
		<td align="center" width="65px"><? echo $dt['no_daftar'];?></td>
		<td style="padding-left:3px" width="180px"><? echo $dt['nm'];?></td>
		<td style="padding-left:3px" width="130px"><? echo $dt['nm_sekolah'];?></td>
        <td style="center" width="100px"><? echo $dt['kota_sklh'];?></td>
        <td style="center" width="80px"><? echo $dt['prov_sklh'];?></td>
        <td align="center" width="80px"><? echo $dt['tgl_daftar'];?></td>
        <td align="center" width="80px"><? if ($dt['status']==1){echo "SUDAH";} else{echo "BELUM";};?></td>
    </tr>
<?
$i++;
}
?>
    <tr bgcolor="#FFFFFF">
	<td colspan="7" align="right">Total Pendaftar: <? echo mysql_num_rows($view);?>&nbsp;</td></tr>
</table>
<div><table border=0><tr rowspan=2><td>&nbsp;</td></tr><tr><td><img src="image/point.png" border=0 align="absmiddle"></td><td><strong>KOMPUTER</strong></td></tr></table></div>
<table cellpadding="1" cellspacing="1" width="99%" border="0" align="center" bgcolor="#CCCCCC">
<? $tbl->headtb("No.Peserta,Nama,Asal Sekolah,Kota,Provinsi,Tgl.Daftar,Status Bayar"); ?>
<?
	$view=$op->cs_query("SELECT * FROM tik ORDER BY no ASC");
	$i=1;
	while($dt=mysql_fetch_array($view)){
	if($i % 2){
		$bg="#EAEAEA";
	}else{
		$bg="#FFFFFF";
	}
?>
	<tr bgcolor="<? echo $bg;?>" style="color:#333333; font-size:12px" id="anim">
		<td align="center" width="65px"><? echo $dt['no_daftar'];?></td>
		<td style="padding-left:3px" width="180px"><? echo $dt['nm'];?></td>
		<td style="padding-left:3px" width="130px"><? echo $dt['nm_sekolah'];?></td>
        <td style="center" width="100px"><? echo $dt['kota_sklh'];?></td>
        <td style="center" width="80px"><? echo $dt['prov_sklh'];?></td>
        <td align="center" width="80px"><? echo $dt['tgl_daftar'];?></td>
        <td align="center" width="80px"><? if ($dt['status']==1){echo "SUDAH";} else{echo "BELUM";};?></td>
    </tr>
<?
$i++;
}
?>
    <tr bgcolor="#FFFFFF">
	<td colspan="7" align="right">Total Pendaftar: <? echo mysql_num_rows($view);?>&nbsp;</td></tr>
</table>

