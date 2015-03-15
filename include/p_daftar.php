<link rel="stylesheet" type="text/css" href="../layout/tema.css">

<div id="judul_page"> <img src="image/seting_icon.png" border=0 align="absmiddle"> Proses Pendaftaran</div>
<?
	require_once("plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$cnfg=new q_tools();
	$bidang=$_POST['bidang'];
	//$noFix=substr($no,4,strlen($no));
	$tgl=date("Y-m-d");;
	$tgl_lahir=$_POST['thn']."-".$_POST['bln']."-".$_POST['tgl'];
	
	$view=$op->cs_query("SELECT no FROM $bidang WHERE 1 ORDER BY no DESC");
	if(mysql_num_rows($view) > 0){
		$dt=mysql_fetch_array($view);
		$no=$dt['no'];
		$noSkr=$no+1;
	}else{
		$noSkr=1;
	};
	
	
if((isset($_SESSION['string'])) and ($_SESSION['string']==$_POST['kode'])){
	
	$save=$op->save($bidang,"no,no_daftar,tgl_daftar,nm,tmpt_lahir,tgl_lahir,kelamin,alamat,kota,kode_pos,prov,noTlp,noHp,email,nm_sekolah,kelas,nis,alm_sklh,kota_sklh,pos_sklh,prov_sklh,telp_sklh,status","'$noSkr','$_POST[no_daftar]','$tgl','".strtoupper($_POST['nama'])."','".strtoupper($_POST['tmpt'])."','$tgl_lahir','$_POST[kelamin]','".strtoupper($_POST['alamat'])."','".strtoupper($_POST['kota'])."','$_POST[kodepos]','".strtoupper($_POST['provinsi'])."','$_POST[noTlp]','$_POST[noHp]','$_POST[email]','".strtoupper($_POST['sklh'])."','$_POST[kelas]','$_POST[nis]','".strtoupper($_POST['alm_sklh'])."','".strtoupper($_POST['kota_sklh'])."','$_POST[pos_sklh]','".strtoupper($_POST['prov_sklh'])."','$_POST[telp_sklh]',0");
	if($save){
?>
			 	<img src="image/sign_ok_big.png" border="0" align="absmiddle" /> <b>Proses Pendaftaran Berhasil Dilakukan.</b>
				<H3>Informasi Pendaftaran Anda: </H3>
				<div id="box">
					<b>No.Pendaftaran Anda : <? echo $_POST['no_daftar'];?></b><br /><br />
					<p>
						Klik <a href="index.php?page=_info" target="_blank" >disini</a> untuk mengetahui jadwal pelaksanaan dan prosedur pembayaran. 
						<br />
						Atau hubungi OSIS SMA NEGERI 3 SEMARANG untuk info lebih lanjut :<br />
						Phone  : (024) 35544287 - 35544291<br />
						E-mail : gsosmaga@yahoo.com<br /><br />
                        Contact Person<br />
                        -	Arlita (085726866221)<br />
                        -   Ana (08562899109)<br />
                        -	Lutfi (085292871348)<br />
                        -	Windha (085727029259)
                        <br />
                        <b>
                        <h3>Selanjutnya segera download dan cetak biodata Anda!</h3>
                        <table>
                    <tr><td><a href="include/print_biodata.php?no=<? echo $noSkr;?>&&bid=<? echo $bidang;?>" target="_blank"><img src="image/logo_pdf.png" height="50px" border="0"  /></a></td><td><h3><a href="include/print_biodata.php?no=<? echo $noSkr;?>&&bid=<? echo $bidang;?>" target="_blank" >Download Biodata</a></h3></td></tr></table><br />
						Terimakasih</b>
					</p><br />
				</div>
			 <?
	}else{
			echo"<div id='err'>Proses Pendaftaran gagal dilakukan, mungkin data yang anda inputkan belum sesuai !!!</div> <br>
			<input type='button' value='Ulangi' onclick='history.back(1);'>";
	}
}else{
	echo"<div id='err'>Kode yang anda inputkan masih salah !!! <input type='button' value='Ulangi' onclick='history.back(1);'></div> ";
}
?>