<? 
	require_once("../plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$tbl=new q_grid();
	$tools=new q_tools();
	?>

<style type="text/css">
	#anim:hover {background:#FFFFCC}
</style>

<div id="judul_page"> <img src="../image/point.png" border="0" align="absmiddle" /> Set Formulir <font size="1" color="#666666">Menu ini memungkinkan anda untuk meng-aktifkan /non-aktifkan halaman formulir pendaftaran</font></div><br />
<form name="tambahAdmin" action="<? $_SERVER['PHP_SELF'];?>" method="post">
<table style="font-size:14px; font-family:Tahoma;font-weight:bold;" border="0" align="left" cellpadding="1" cellspacing="1">
	<tr><td >&nbsp;&nbsp;&nbsp;<img src='../image/seting_icon.png' border="0" align="absmiddle"> Status Sekarang</td><td>:</td><td><? $vw=$op->select("tb_set_formulir","*",""); $d=mysql_fetch_array($vw);
	if ($d['status']  == 1) {
		echo "<a href='main_menu.php?view=set_formulir&&action=unset&&id=$d[id_set]'><img src='../image/sign_ok_big.png' border='0' align='absmiddle'> Aktif</a>";
	}else if($d['status'] == 0){
		echo "<a href='main_menu.php?view=set_formulir&&action=set&&id=$d[id_set]'><img src='../image/sign_warning.png' border='0' align='absmiddle'> Tidak Aktif</a>";
	}
	?>
	</td></tr>
</table>
<br>
<br>
<? 
	if(isset($_REQUEST['action'])){
		if($_REQUEST['action'] == "unset"){
			$upd=$op->update("tb_set_formulir","status='0'","id_set","$_GET[id]");
		}else if($_REQUEST['action'] == "set"){
			$upd=$op->update("tb_set_formulir","status='1'","id_set","$_GET[id]");
		}
		$tools->refresh(2,'main_menu.php?view=set_formulir');
		
	}
	?>

