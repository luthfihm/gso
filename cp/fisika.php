<div id="judul_page"> <img src="../image/point.png" border="0" align="absmiddle" /> Data Pendaftar Bidang Fisika</div><br />
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
<? $tbl->headtb("No.Peserta,Tgl.Daftar,Nama,Bidang,Alamat,Kota,No.Tlp,No.Hp,Asal Sekolah,Kota Sekolah,Status Bayar,Hapus"); ?>
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
		<td align="center"><? echo $dt['no_daftar'];?></td>
		<td align="center"><? echo $dt['tgl_daftar'];?></td>
		<td style="padding-left:3px"><? echo $dt['nm'];?></td>
		<td align="center"><? echo $dt['bidang']; ?>
        </td>
		<td style="padding-left:3px"><? echo $dt['alamat'];?></td>
        <td style="padding-left:3px"><? echo $dt['kota'];?></td>
		<td style="padding-left:3px"><? echo $dt['noTlp'];?></td>
		<td style="padding-left:3px"><? echo $dt['noHp'];?></td>				
		<td style="padding-left:3px"><? echo $dt['nm_sekolah'];?></td>
        <td style="padding-left:3px"><? echo $dt['kota_sklh'];?></td>
        <td style="center"><? if ($dt['status']==1){echo "SUDAH";} else{echo "BELUM";};?></td>
		<td align="center"><form name="frm2" action="<? $_SERVER['PHP_SELF'];?>" method="post"><input type="checkbox" name="cek[]" id="cek[]" value="<? echo $dt['no_daftar'];?>" /></td>
	</tr>
<?
$i++;
}
?>
<tr bgcolor="#FFFFFF">
	<td colspan="11" align="right">Total Pendaftar: <? echo mysql_num_rows($view);?>&nbsp;</td>
	<td align="center"><input type="submit" name="hapus" value=" " style="background:url(../image/trash.png) no-repeat center; border:none; cursor:pointer" onclick="javascript:if(confirm('Menghapus secara permanen data pendaftar ini ???')){ return true; } else{ return false;}" /></td> 
</tr>
</table>
<?
if(isset($_POST['hapus'])){
	$id=$_POST['cek'];
	$jum=count($id);
	for ($i=0; $i<$jum; $i++){
		$q=$op->delete("fis","no_daftar='$id[$i]'");
	}
	if($q){
		echo"<div id='ok'>Proses Hapus Berhasil Dilakukan </div><meta http-equiv='refresh' content='1' />";
	}else{
		echo"<div id='err'>Proses hapus gagal dilakukan !!!</div>".mysql_error();
	}
	
}
?>
