<?	
	require_once("../plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$excel = new q_tools();
	/*begin of file*/
	$excel->BOF();
	
	/*header*/
	$excel->WriteLabel(0, 0, 'No');
	$excel->WriteLabel(0, 1, 'No.Daftar');
	$excel->WriteLabel(0, 2, 'Tgl.Daftar');
	$excel->WriteLabel(0, 3, 'Nama Lengkap');
	$excel->WriteLabel(0, 4, 'Bidang');
	$excel->WriteLabel(0, 5, 'Tempat Lahir');
	$excel->WriteLabel(0, 6, 'Tgl.Lahir');
	$excel->WriteLabel(0, 7, 'Kelamin');
	$excel->WriteLabel(0, 8, 'Alamat');
	$excel->WriteLabel(0, 9, 'Kota');
	$excel->WriteLabel(0, 10, 'Kode Pos');
	$excel->WriteLabel(0, 11, 'Provinsi');
	$excel->WriteLabel(0, 12, 'No.Tlp');
	$excel->WriteLabel(0, 13, 'No.Hp');
	$excel->WriteLabel(0, 14, 'Email');
	$excel->WriteLabel(0, 15, 'Asal Sekolah');
	$excel->WriteLabel(0, 16, 'Kelas');
	$excel->WriteLabel(0, 17, 'NIS');
	$excel->WriteLabel(0, 18, 'Alamat Sekolah');
	$excel->WriteLabel(0, 19, 'Kota Sekolah');
	$excel->WriteLabel(0, 20, 'Kode Pos');
	$excel->WriteLabel(0, 21, 'Provinsi');
	$excel->WriteLabel(0, 22, 'Telp. Sekolah');
	$excel->WriteLabel(0, 23, 'Status');
	
	/*isi*/
	
	$vw=$op->cs_query("SELECT * FROM mat ORDER BY no_daftar ASC");
	$i=1;
	while($dt=mysql_fetch_array($vw)){
		$excel->WriteNumber($i,0,$i);
		$excel->WriteLabel($i, 1,$dt['no_daftar']);
		$excel->WriteLabel($i, 2,$dt['tgl_daftar']);
		$excel->WriteLabel($i, 3,$dt['nm']);
		$excel->WriteLabel($i, 4,$dt['bidang']);
		$excel->WriteLabel($i, 5,$dt['tmpt_lahir']);
		$excel->WriteLabel($i, 6,$dt['tgl_lahir']);
		$excel->WriteLabel($i, 7,$dt['kelamin']);
		$excel->WriteLabel($i, 8,$dt['alamat']);
		$excel->WriteLabel($i, 9,$dt['kota']);
		$excel->WriteLabel($i, 10,$dt['kode_pos']);
		$excel->WriteLabel($i, 11,$dt['prov']);
		$excel->WriteLabel($i, 12,$dt['noTlp']);
		$excel->WriteLabel($i, 13,$dt['noHp']);
		$excel->WriteLabel($i, 14,$dt['email']);
		$excel->WriteLabel($i, 15,$dt['nm_sekolah']);
		$excel->WriteLabel($i, 16,$dt['kelas']);
		$excel->WriteLabel($i, 17,$dt['nis']);
		$excel->WriteLabel($i, 18,$dt['alm_sklh']);
		$excel->WriteLabel($i, 19,$dt['kota_sklh']);
		$excel->WriteLabel($i, 20,$dt['pos_sklh']);
		$excel->WriteLabel($i, 21,$dt['prov_sklh']);
		$excel->WriteLabel($i, 22,$dt['telp_sklh']);
		if($dt['status']==1){
		$excel->WriteLabel($i, 23,'SUDAH');
		}else{
		$excel->WriteLabel($i, 23,'BELUM');
		}
		$i++;
	}
	/*end of file*/
	$excel->EOF();

	$excel->WriteToFile('matematika.xls');
	//$path="../upload/_jur/";
	header("Content-Disposition: attachment; filename=matematika.xls");
	header("Content-type: application/xls");
	$fp  = fopen("matematika.xls", 'r');
	$content = fread($fp, filesize("matematika.xls"));
	fclose($fp);
	echo $content;
	exit;
?>