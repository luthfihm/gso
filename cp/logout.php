<?
	session_start();
	unset($_SESSION['userAdmin']);
	unset($_SESSION['passAdmin']);
	session_destroy();
	header("location:index.php");
?>