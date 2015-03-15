	<?
		require_once("plugin/qFrame/qFrame.php");
		$op=new q_sql();
		$tools=new q_tools();
		$tgl=date("d-m-Y");
		
		$cek=$op->select("tb_set_formulir","*","WHERE status=1");
	if(mysql_num_rows($cek) < 1){
		echo"<div id='judul_page'><table border=0><tr><td><img src='image/sign_warning.png' border='0' align='absmiddle'></td><td> Pendaftaran Ganesha Sience Olympiad 2011 Ditutup</td></tr></table></div>";
	}else{
		?>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#frmFormulir").validate({
				errorPlacement: function(error, element) {
					error.appendTo(element.parent("td"));
				}
			});
		});  
   
	function validOk(){
		if(document.getElementById("cek").checked=true){
			document.getElementById("simpan").disabled=false;
		}
	}
	
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
		
		function setNomor(frm){
			var bid=encodeURIComponent(document.getElementById("bidang").value);
			if(xmlHttp.readyState==4 || xmlHttp.readyState==0){
				xmlHttp.open("GET","include/getNomor.php?bidang="+bid+"&sid="+Math.random(),true);
				xmlHttp.onreadystatechange=server;
				xmlHttp.send(null);
			}else{
				setTimeout('setNomor()',5000);
			}	
		}
		
		function server(){
			if(xmlHttp.readyState==1){
				document.getElementById("respon").innerHTML='<img src="image/loading2.gif">';
			}else if(xmlHttp.readyState==4 || xmlHttp.readyState==0){		
				document.getElementById("respon").innerHTML=xmlHttp.responseText;
				document.getElementById("respon2").value=xmlHttp.responseText;
			}
		}
	</script>
	
	<style type="text/css">
	input.error, textarea.error { border: 1px solid red;}
	label.error {color:red;font-size:9px; padding-left:3px;}
	</style>
	
<div id="judul_page"><table border=0><tr><td> <img src="image/input.png" border=0 align="absmiddle"></td><td> Formulir Pendaftaran Ganesha Science Olympiad 2011</td></tr></table></div>
<div style="color:#333333;letter-spacing:1px; padding-left:10px;">
<div id="judul"><table border=0><tr><td><img src="image/point.png" border=0 align="absmiddle"></td><td>Data Calon Pendaftar</td></tr></table></div>
<form name="frmFormulir" id="frmFormulir" action="index.php?page=p_daftar" method="post">
<table cellpadding="1" cellspacing="1" border="0" width="90%">
	<tr><td width="150px" style="font-size:14px; font-weight:bold">Pilih Bidang</td><td>:</td><td>
	<select name="bidang" id="bidang" onchange="setNomor();">
		<option value='null'>--Pilih--</option>
			<option value='bio'>Biologi</option>
            <option value='fis'>Fisika</option>
			<option value='mat'>Matematika</option>
            <option value='tik'>Komputer</option>
	</select>
	</td></tr>
    <tr><td colspan="3">&nbsp;</td></tr>
    <tr style="font-size:14px; font-weight:bold">
    <td> No.Pendaftaran <input type="hidden" name="no_daftar" id="respon2" /></td><td>:</td><td id="respon"></td></tr>
	<tr><td colspan="3">&nbsp;</td></tr>
	<tr><td>Nama Lengkap</td>
	<td>:</td><td><input type="text" name="nama" size="50" maxlength="50" id="nama" title="Harus diisi" class="required"/></td></tr>
	<tr><td>Tempat/Tgl Lahir</td><td>:</td><td>
	<input type="text" name="tmpt" id="tmpt" size="20" class="required" title=" "/>
	<select name="tgl" id="tgl"><option value="NULL">-Tgl-</option>
	<? for($i=1; $i <= 31; $i++){
			echo "<option value='$i'>$i</option>";
		}
		?></select>
	<select name="bln" id="bln"><option value='NULL'>-bln-</option>
			<option value='1'>Januari</option>
			<option value='2'>Februari</option>
			<option value='3'>Maret</option>
			<option value='4'>April</option>
			<option value='5'>Mei</option>
			<option value='6'>Juni</option>
			<option value='7'>Juli</option>
			<option value='8'>Agustus</option>
			<option value='9'>September</option>
			<option value='10'>Oktober</option>
			<option value='11'>November</option>
			<option value='12'>Desember</option>
	</select>
	<select name="thn" id="thn">
	<option value='NULL'>-thn-</option>
	<? for($t=1990; $t < 2005; $t++){
			echo "<option value='$t'>$t</option>";
		} ?>
	</select>
	</td></tr>
	<tr><td>Jenis Kelamin</td><td>:</td><td>
	<input type="radio" name="kelamin" value="LAKI-LAKI" checked="checked" /> Laki-laki <input type="radio" name="kelamin" value="PEREMPUAN" /> Perempuan
	</td></tr><em></em>
	<tr><td valign="top">Alamat Sekarang</td><td valign="top">:</td><td><textarea name="alamat" cols="50" rows="2" id="alamat" title="Harus diisi" class="required"></textarea></td></tr>
	<tr><td>Kota</td><td>:</td><td><input type="text" name="kota" size="30"  id="kota" title=" " class="required" /> Kode Pos : <input type="text" name="kodepos" size="8" id="kodepos" title="Harus diisi" class="required" /></td></tr>
    <tr><td width="150px">Provinsi</td><td>:</td><td>
	<select name="provinsi" id="provinsi">
		<option value='null'>--Pilih--</option>
			<option value='Bali'>Bali</option>
			<option value='Banten'>Banten</option>
			<option value='DIY'>DIY</option>
            <option value='DKI Jakarta'>DKI Jakarta</option>
            <option value='Jawa Barat'>Jawa Barat</option>
            <option value='Jawa Tengah'>Jawa Tengah</option>
            <option value='Jawa Timur'>Jawa Timur</option>
	</select>
	</td></tr>
	<tr><td>No.Telepon</td><td>:</td><td>Rumah :<input type="text" name="noTlp" size="15"  id="noTlp" /></td></tr>
	<tr><td colspan="2">&nbsp;</td><td>HP &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :<input type="text" name="noHp" size="15"  id="noHp" /> </td></tr>
    <tr><td>E-mail</td>
	<td>:</td><td><input type="text" name="email" size="50" id="email"/></td></tr>
	<tr><td colspan="2" style="color:#0066CC"><b>Data Sekolah Asal</b></td><td><hr color="#CCCCCC" size="1" /></td></tr>
	<tr><td>Nama Sekolah</td><td>:</td><td><input type="text" name="sklh" size="30"  id="sklh" title="Harus diisi" class="required" /></td></tr>
	<tr><td>Kelas</td><td>:</td><td>
	<select name="kelas" id="select_style">
			<option value='NULL'>--pilih--</option>
			<option value='7'>7</option>
			<option value='8'>8</option>
			<option value='9'>9</option>
	</select>
    NIS : <input type="text" name="nis" size="15" id="nis" title="Harus diisi" class="required" /></td></tr>
    <tr><td valign="top">Alamat Sekolah</td><td valign="top">:</td><td><textarea name="alm_sklh" cols="50" rows="2" id="alm_sklh" title="Harus diisi" class="required"></textarea></td></tr>
    <tr><td>Kota</td><td>:</td><td><input type="text" name="kota_sklh" size="30"  id="kota_sklh" title=" " class="required" /> Kode Pos : <input type="text" name="pos_sklh" size="8" id="pos_sklh" title="Harus diisi" class="required" /></td></tr>
    <tr><td width="150px">Provinsi</td><td>:</td><td>
	<select name="prov_sklh" id="prov_sklh">
		<option>--Pilih--</option>
			<option value='Bali'>Bali</option>
			<option value='Banten'>Banten</option>
			<option value='DIY'>DIY</option>
            <option value='DKI Jakarta'>DKI Jakarta</option>
            <option value='Jawa Barat'>Jawa Barat</option>
            <option value='Jawa Tengah'>Jawa Tengah</option>
            <option value='Jawa Timur'>Jawa Timur</option>
	</select>
	</td></tr>
    <tr><td>No. Telepon</td><td>:</td><td><input type="text" name="telp_sklh" size="15"  id="telp_sklh" /></td></tr>
	<tr><td colspan="3">&nbsp;</td></tr>
	</table><br />
	<table cellpadding="1" cellspacing="1" border="0" width="90%">
	<tr>
	</tr>
	</table><br />
	<div id="judul">&nbsp;<img src="image/point.png" border=0 align="absmiddle"> Validasi</div><br />
	<table cellpadding="1" cellspacing="1" border="0" width="90%">
	<tr><td width="150px">Kode Keamanan</td><td>:</td><td valign="bottom"><input type="text" name="kode" size="10" id="kode" title="Harus diisi" class="required" />  <?  $tools->captcha(); ?> </td></tr>
	<tr><td colspan="3"><hr color="#CCCCCC" size="1" /></td></tr>
	<tr><td colspan="2" align="center"><input type="checkbox" name="cek" id="cek" onclick="validOk()" /></td><td style="padding:5px 5px 5px 5px; font-size:12px;">
	Dengan ini anda menyetujui persyaratan untuk mendaftar sebagai peserta dalam kompetisi Ganesha Sience Olympiad, dan data yang telah anda inputkan diatas adalah data yang sebenar-benarnya.
	</td></tr>	
	<tr><td colspan="3"><hr color="#CCCCCC" size="1" /></td></tr>
	<tr><td colspan="2">&nbsp;</td><td><input type="submit" name="simpan" value="Proses Pendaftaran" onclick="if(confirm('Sebelum melanjutkan proses pendaftaran, pastikan bahwa semua informasi yang diminta telah ter-input dgn baik...(Klik OK untuk lanjut, Klik Cancel untuk batal)')){ return true; } else { return false;}"  id="simpan" disabled="disabled" />
	</td></tr>	
</table>
</form>
<br>
</div>
</div>
<?
} 
?>