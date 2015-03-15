<? 
	require_once("../plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$tbl=new q_grid();
	
?>
<div id="judul_page"> <img src="../image/point.png" border="0" align="absmiddle" /> Input Info Akademik</div><br />
<form action="<? $_SERVER['PHP_SELF'];?>" method="post">
<table align="center" cellpadding="1" cellspacing="1" border="0">
	<tr><td>Perihal</td><td>:</td><td>
		<input type="radio" name="hal" value="Jadwal" checked="checked"> Jadwal
		<input type="radio" name="hal" value="Info"> Info Akademik
	</td></tr>
	<tr><td>Judul</td><td>:</td><td><input type="text" name="subj" size="62" /></td></tr>
	<tr><td valign="top">Content</td><td valign="top">:</td><td><textarea name="content" cols="70" rows="15"></textarea><br>
	<font color="#666666">*)anda bisa menggunakan tag HTML seperti : &lt;br&gt; untuk berpindah kebaris baru,dan tag HTML lainnya.</font>
	</td></tr>
	<tr><td>Sumber</td><td>:</td><td><input type="text" name="sumber" size="30" value="Administrator STIE BANK BPD" /></td></tr>
	<tr><Td colspan="2">&nbsp;</Td><td><input type="submit" name="simpan" value="Publish Content" /></td></tr>
</table>
</form><br>
<?
if(isset($_POST['simpan'])){
	$q=$op->save("tb_info","hal,subject,content,sumber,stat","'$_POST[hal]','$_POST[subj]','$_POST[content]','$_POST[sumber]',0");
	if($q){
		echo"<div id='ok'>Info Baru Berhasil Ditambahkan</div><meta http-equiv='refresh' content='1' />";
	}else{
		echo"<div id='err'>Proses tambah info gagal dilakukan !!</div>";
	}
}
?>