<?php
	session_start();
	require_once("../plugin/qFrame/qFrame.php");
	header("Cache-Control:no-cache, must-revalidate");
	$uname=$_GET['username'];
	$pass=md5($_GET['password']);	
	$cek = new q_sql();
	
	$r=$cek->validUser("tb_admin","user","pass",$uname,$pass);
	$c=mysql_num_rows($r);
	if($c > 0){
		$_SESSION['userAdmin']=$uname;
		$_SESSION['passAdmin']=$pass;
	}else{
		echo "<div style='font-size:13px; padding-left:5px;'><img src='../image/sign_warning.png' border=0 align='left' style='padding-right:10px'> Proses Login gagal !!!<br> Anda bukan user yang terdaftar.</div>";
	}
?>
