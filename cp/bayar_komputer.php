<div id="judul_page"> <img src="../image/point.png" border="0" align="absmiddle" /> Data Pembayaran Bidang Komputer</div><br />
<style type="text/css">
	#anim:hover{background:#FFFFCC}
</style>
<?
	require_once("../plugin/qFrame/qFrame.php");
	$op=new q_sql();
	//$cnfg=new q_tools();
	$tbl=new q_grid();
?>
<table cellpadding="1" cellspacing="1" width="99%" border="0" align="center" bgcolor="#CCCCCC">
<? $tbl->headtb("No.Peserta,Tgl.Daftar,Nama,Asal Sekolah,Kota Sekolah,Status Bayar"); ?>
<?
	$view=$op->cs_query("SELECT * FROM tik WHERE status=0 ORDER BY no ASC");
	$i=1;
	while($dt=mysql_fetch_array($view)){
	if($i % 2){
		$bg="#EAEAEA";
	}else{
		$bg="#FFFFFF";
	}
?>
	<tr bgcolor="<? echo $bg;?>" style="color:#333333; font-size:12px" id="anim">
		<td align="center"><? echo $dt['no_daftar'];?></td>
		<td align="center"><? echo $dt['tgl_daftar'];?></td>
		<td style="padding-left:3px"><? echo $dt['nm'];?></td>				
		<td style="padding-left:3px"><? echo $dt['nm_sekolah'];?></td>
        <td style="padding-left:3px"><? echo $dt['kota_sklh'];?></td>
		<td align="center"><form name="frm2" action="<? $_SERVER['PHP_SELF'];?>" method="post"><input type="checkbox" name="cek[]" id="cek[]" value="<? echo $dt['no_daftar'];?>" /></td>
	</tr>
<?
$i++;
}
?>
<tr bgcolor="#FFFFFF">
	<td colspan="5" align="right">Yang Belum Bayar: <? echo mysql_num_rows($view);?>&nbsp;</td>
	<td align="center"><input type="submit" name="bayar" value=" " style="background:url(../image/report.gif) no-repeat center; border:none; cursor:pointer" onclick="javascript:if(confirm('Yakin pendaftar ini sudah bayar ???')){ return true; } else{ return false;}" /></td> 
</tr>
</table>
<?
if(isset($_POST['bayar'])){
	$id=$_POST['cek'];
	$jum=count($id);
	for ($i=0; $i<$jum; $i++){
		$q=$op->cs_query("UPDATE tik SET status = 1 WHERE no_daftar ='$id[$i]'");
	}
	if($q){
		echo"<div id='ok'>Proses Berhasil Dilakukan </div><meta http-equiv='refresh' content='1' />";
	}else{
		echo"<div id='err'>Proses gagal dilakukan !!!</div>".mysql_error();
	}
	
}
?>
