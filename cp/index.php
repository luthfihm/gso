<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="../layout/tema.css" />
<link rel="shortcut icon" href="../image/icon.png" >
<title>GSO Administration System</title>
<script type="text/javascript">
	var xmlHttp;
		xmlHttp=createXmlHttpRequest();
		function createXmlHttpRequest() 
		{
			var xmlHttp = false;
			if (window.ActiveXObject) {
				xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
			} else {
				xmlHttp = new XMLHttpRequest();
			}
			if (!xmlHttp) {
				alert("Ops sorry We found some error!!");
			}
			return xmlHttp;
		}
		
		function validLogin(frm){
			var uname=encodeURIComponent(document.getElementById("user").value);
			var pass=encodeURIComponent(document.getElementById("pass").value);
			if(xmlHttp.readyState==4 || xmlHttp.readyState==0){
				xmlHttp.open("GET","p_login_admin.php?username="+uname+"&password="+pass+"&sid="+Math.random(),true);
				xmlHttp.onreadystatechange=server;
				xmlHttp.send(null);
			}else{
				setTimeout('validLogins()',5000);
			}	
		}
		
		function server(){
			if(xmlHttp.readyState==1){
				document.getElementById("respon").innerHTML='<img src="../image/loading2.gif"> Reload database';
			}else if(xmlHttp.readyState==4 || xmlHttp.readyState==0){		
				//document.getElementById("respon").innerHTML=xmlHttp.responseText;
				window.location='main_menu.php?view=_main';
			}
		}
</script>
</head>
<style type="text/css">
	a {text-decoration:none;
		color:#006699;
	}
</style>
<body style="margin-top:130px">
<form name="loginAdmin" method="get">
<table style="-moz-border-radius: 10px; font-size:14px; background:#FFF; font-family:Arial; color:#333333" border="0" align="center" width="350px" cellpadding="1" cellspacing="1">
	<tr>
		<td colspan=3><img src="../image/logo.png" height=70px border="0" align="absmidle" /><img src="../image/header.png" height=60px border="0" align="absmidle" /></td>
	</tr>
	<tr>
		<td align="center"><b>Username</b></td>
		<td>:</td>
		<td><input type="text" name="user" size="35" id="user" class="input" title="Inputkan Username"/></td>
	</tr> 
	<tr>
		<td align="center"><b>Password</b></td>
		<td>:</td>
		<td><input type="password" name="pass" size="35" id="pass" class="input"/></td>
	</tr>
	<tr><td colspan="3">&nbsp;</td></tr>
	<tr>
		<td colspan="2">&nbsp;</td>
		<td><input type="button" name="login" onClick="validLogin()" value="Login Admin" id="button" class="button"> <input type="button" class="button" value="Kembali" onclick="javascript:window.location='../index.php'" /></td>
	</tr>
	<tr>
		<td colspan="3"><br /><div id="respon"></div></td>
	</tr>
</table>
</form>
<div style="text-align:center; color:#666666; font-size:12px; padding:10px 0px 0px 0px; font-family:Tahoma">&copy; 2011 - OSIS SMA NEGERI 3 SEMARANG</div>
</body>
</html>
