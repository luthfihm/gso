<? 
	require_once("../plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$tbl=new q_grid();
	?>

<style type="text/css">
	#anim:hover {background:#FFFFCC}
</style>

<div id="judul_page"> <img src="../image/point.png" border="0" align="absmiddle" /> Tambah Administrator</div><br />
<form name="tambahAdmin" action="<? $_SERVER['PHP_SELF'];?>" method="post">
<table style="font-size:13px; font-family:Tahoma" border="0" align="center" width="350px" cellpadding="1" cellspacing="1">
	<tr>
		<td align="right"><b>Username</b></td>
		<td>:</td>
		<td><input type="text" name="user" size="35" id="user" class="input" title="Inputkan Username"/></td>
	</tr> 
	<tr>
		<td align="right"><b>Password</b></td>
		<td>:</td>
		<td><input type="password" name="pass" size="35" id="pass" class="input"/></td>
	</tr>
	<tr><td colspan="3">&nbsp;</td></tr>
	<tr>
		<td colspan="2">&nbsp;</td>
		<td><input type="submit" name="tambahAdmin" onClick="validLogin()" value="Daftar Sebagai Admin" class="button"> </td>
	</tr>
	<tr>
		<td colspan="3"><div id="respon"></div></td>
	</tr>
</table><br />
<div id="judul_page"> <img src="../image/point.png" border="0" align="absmiddle" /> Data Administor</div><br />
<table align="center" cellpadding="1" cellspacing="1" border="0" width="50%" bgcolor="#CCCCCC" style="font-size:12px">
<? $tbl->headtb("Id,Username,Hapus"); 

	$view=$op->cs_query("SELECT * FROM tb_admin");
	$i=1;
	while($res=mysql_fetch_array($view)){
	if($i % 2){
		$bg="#EAEAEA";
	}else{
		$bg="#FFFFFF";
	}
	
?>
<tr bgcolor="<? echo $bg; ?>" id="anim">
	<td align="center"><? echo $i;?></td>
	<td align="center"><? echo $res['user'];?></td>
	<td align="center"><form name="frm2" action="<? $_SERVER['PHP_SELF'];?>" method="post"><input type="checkbox" name="cek[]" id="cek[]" value="<? echo $res['user'];?>" /></td> 	
</tr>
<?
$i++;
}
?>
<tr bgcolor="#FFFFFF">
	<td align="right" colspan="2">Jumlah user administator: <? echo mysql_num_rows($view);?>&nbsp;</td>
	<td align="center"><input type="submit" name="hapus" value=" " style="background:url(../image/trash.png) no-repeat center; border:none; cursor:pointer" onclick="javascript:if(confirm('Menghapus secara permanen komentar ini ???')){ return true; } else{ return false;}" /></td> 
</tr>
</table>  
</form>
<?
if(isset($_POST['hapus'])){
	$id=$_POST['cek'];
	$jum=count($id);
	for ($i=0; $i<$jum; $i++){
		$q=$op->delete("tb_admin","user='$id[$i]'");
	}
	if($q){
		echo"<div id='ok'>User admin berhasil dihapus</div><meta http-equiv='refresh' content='1' />";
	}else{
		echo"<div id='err'>Proses hapus Admin gagal dilakukan !!!</div>".mysql_error();
	}
	
}else if(isset($_POST['tambahAdmin'])){
	$user=$_POST['user'];
	$pass=md5($_POST['pass']);
	$q=$op->save("tb_admin","user,pass","'$user','$pass'");
	if($q){
		echo"<div id='ok'>User baru berhasil ditambahkan</div><meta http-equiv='refresh' content='1' />";
	}else{
		echo"<div id='err'>Gagal menambahkan user baru</div>";
	}
}
?>

