<? 
	require_once("../plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$tbl=new q_grid();
	
?>
<div id="judul_page"> <img src="../image/point.png" border="0" align="absmiddle" /> Info Akademik</div><br />
<table align="center" cellpadding="1" cellspacing="1" border="0" width="99%" bgcolor="#CCCCCC" style="font-size:13px">
<? $tbl->headtb("No.,Perihal,Subject,Content,Sumber,Publish,Hapus"); 
	$view=$op->cs_query("SELECT * FROM tb_info ORDER BY id_info ASC");
	$i=1;
	while($res=mysql_fetch_array($view)){
	if($i % 2){
		$bg="#EAEAEA";
	}else{
		$bg="#FFFFFF";
	}
	$pot=substr($res['content'],0,80);
	
?>
<tr bgcolor="<? echo $bg; ?>" id="anim">
	<td align="center"><? echo $i;?></td>
	<td align="center"><? echo $res['hal'];?></td>
	<td align="center"><? echo $res['subject'];?></td>
	<td style="padding:0 2px 0 2px"><? echo $pot."...";?></td>
	<td align="center"><? echo $res['sumber'];?></td>
	<td align="center">
		<?
		if($res['stat'] == 0){
			echo "<a href='main_menu.php?view=v_info_akademik&&val=1&&id=$res[id_info]''><img src='../image/gagal.png' border='0' align='absmiddle'></a>";
		}else{
			echo "<a href='main_menu.php?view=v_info_akademik&&val=0&&id=$res[id_info]'><img src='../image/sign_ok.png' border='0' align='absmiddle'></a>";
		}
	?>
	</td>
	<td align="center"><form name="frm2" action="<? $_SERVER['PHP_SELF'];?>" method="post"><input type="checkbox" name="cek[]" id="cek[]" value="<? echo $res['id_info'];?>" /></td> 	
</tr>
<?
$i++;
}
?>
<tr bgcolor="#FFFFFF">
	<td align="right" colspan="6">Jumlah Info Akademik: <? echo mysql_num_rows($view);?>&nbsp;</td>
	<td align="center"><input type="submit" name="hapus" value=" " style="background:url(../image/trash.png) no-repeat center; border:none; cursor:pointer" onclick="javascript:if(confirm('Menghapus secara permanen info ini ???')){ return true; } else{ return false;}" /></td> 
</tr>
</table>  
</form>
<?
if(isset($_POST['hapus'])){
	$id=$_POST['cek'];
	$jum=count($id);
	for ($i=0; $i<$jum; $i++){
		$q=$op->delete("tb_info","id_info='$id[$i]'");
	}
	if($q){
		echo"<div id='ok'>Info berhasil dihapus</div><meta http-equiv='refresh' content='1' />";
	}else{
		echo"<div id='err'>Proses hapus info akademik gagal dilakukan !!!</div>".mysql_error();
	}	
}

if(isset($_REQUEST['view']) and isset($_REQUEST['id'])){
	$val=$_REQUEST['val'];
	$id=$_REQUEST['id'];
	$upd=$op->update("tb_info","stat='".$val."'","id_info",$id);
	if($upd){
		echo"<div id='ok'>Proses berhasil dilakukan</div><meta http-equiv='refresh' content='1;URL=main_menu.php?view=v_info_akademik' />";
	}else{
		echo"<div id='err'>Proses gagal dilakukan !!!</div><meta http-equiv='refresh' content='1;URL=main_menu.php?view=v_info_akademik' />";
	}
}

?>