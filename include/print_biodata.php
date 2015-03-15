<?
	require_once("../plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$cnfg=new q_tools();
	$noSkr=$_GET['no'];
	$bid=$_GET['bid'];
	
	$view=$op->cs_query("SELECT * FROM $bid WHERE no='$noSkr'");
	$dt=mysql_fetch_array($view);

	$year = substr($dt['tgl_lahir'],0,4);
	if ( substr($dt['tgl_lahir'],5,2)=="01"){	
		$month = "JANUARI";
	}else if ( substr($dt['tgl_lahir'],5,2)=="02"){	
		$month = "FEBRUARI";
	}else if ( substr($dt['tgl_lahir'],5,2)=="03"){	
		$month = "MARET";
	}else if ( substr($dt['tgl_lahir'],5,2)=="04"){	
		$month = "APRIL";
	}else if ( substr($dt['tgl_lahir'],5,2)=="05"){	
		$month = "MEI";
	}else if ( substr($dt['tgl_lahir'],5,2)=="06"){	
		$month = "JUNI";
	}else if ( substr($dt['tgl_lahir'],5,2)=="07"){	
		$month = "JULI";
	}else if ( substr($dt['tgl_lahir'],5,2)=="08"){	
		$month = "AGUSTUS";
	}else if ( substr($dt['tgl_lahir'],5,2)=="09"){	
		$month = "SEPTEMBER";
	}else if ( substr($dt['tgl_lahir'],5,2)=="10"){	
		$month = "OKTOBER";
	}else if ( substr($dt['tgl_lahir'],5,2)=="11"){	
		$month = "NOVEMBER";
	}else if ( substr($dt['tgl_lahir'],5,2)=="12"){	
		$month = "DESEMBER";
	}
	if ( substr($dt['tgl_lahir'],8,2)=="01"){	
		$day = "1";
	}else if ( substr($dt['tgl_lahir'],8,2)=="02"){	
		$day = "2";
	}else if ( substr($dt['tgl_lahir'],8,2)=="03"){	
		$day = "3";
	}else if ( substr($dt['tgl_lahir'],8,2)=="04"){	
		$day = "4";
	}else if ( substr($dt['tgl_lahir'],8,2)=="05"){	
		$day = "5";
	}else if ( substr($dt['tgl_lahir'],8,2)=="06"){	
		$day = "6";
	}else if ( substr($dt['tgl_lahir'],8,2)=="07"){	
		$day = "7";
	}else if ( substr($dt['tgl_lahir'],8,2)=="08"){	
		$day = "8";
	}else if ( substr($dt['tgl_lahir'],8,2)=="09"){	
		$day = "9";
	}else{	
		$day = substr($dt['tgl_lahir'],8,2);
	}	
	$lahir = $day." ".$month." ".$year;
	
	$year = substr($dt['tgl_daftar'],0,4);
	if ( substr($dt['tgl_daftar'],5,2)=="01"){	
		$month = "Januari";
	}else if ( substr($dt['tgl_daftar'],5,2)=="02"){	
		$month = "Februari";
	}else if ( substr($dt['tgl_daftar'],5,2)=="03"){	
		$month = "Maret";
	}else if ( substr($dt['tgl_daftar'],5,2)=="04"){	
		$month = "April";
	}else if ( substr($dt['tgl_daftar'],5,2)=="05"){	
		$month = "Mei";
	}else if ( substr($dt['tgl_daftar'],5,2)=="06"){	
		$month = "Juni";
	}else if ( substr($dt['tgl_daftar'],5,2)=="07"){	
		$month = "Juli";
	}else if ( substr($dt['tgl_daftar'],5,2)=="08"){	
		$month = "Agustus";
	}else if ( substr($dt['tgl_daftar'],5,2)=="09"){	
		$month = "September";
	}else if ( substr($dt['tgl_daftar'],5,2)=="10"){	
		$month = "Oktober";
	}else if ( substr($dt['tgl_daftar'],5,2)=="11"){	
		$month = "November";
	}else if ( substr($dt['tgl_daftar'],5,2)=="12"){	
		$month = "Desember";
	}
	if ( substr($dt['tgl_daftar'],8,2)=="01"){	
		$day = "1";
	}else if ( substr($dt['tgl_daftar'],8,2)=="02"){	
		$day = "2";
	}else if ( substr($dt['tgl_daftar'],8,2)=="03"){	
		$day = "3";
	}else if ( substr($dt['tgl_daftar'],8,2)=="04"){	
		$day = "4";
	}else if ( substr($dt['tgl_daftar'],8,2)=="05"){	
		$day = "5";
	}else if ( substr($dt['tgl_daftar'],8,2)=="06"){	
		$day = "6";
	}else if ( substr($dt['tgl_daftar'],8,2)=="07"){	
		$day = "7";
	}else if ( substr($dt['tgl_daftar'],8,2)=="08"){	
		$day = "8";
	}else if ( substr($dt['tgl_daftar'],8,2)=="09"){	
		$day = "9";
	}else{	
		$day = substr($dt['tgl_daftar'],8,2);
	}	
	$date = $day." ".$month." ".$year;
	
	require("../plugin/fpdf/fpdf.php");
	
	$pdf=new FPDF('p','mm','A4');
	$pdf->Open();
	$pdf->addPage();
	$pdf->setAutoPageBreak(false);
	$pdf->Image("../image/mark.jpg",35,65,140);
	$pdf->setFont('Arial','B','21');
	$pdf->text(57,27,"GANESHA SCIENCE OLYMPIAD 2011");
	$pdf->setFont('Arial','B','20');
	$pdf->text(76,35,"SMA NEGERI 3 SEMARANG");
	$pdf->setFont('Arial','','9');
	$pdf->text(78,40,"Jl. Pemuda No 149 Telp. (024) 35544287 - 35544291 Semarang");
	$pdf->text(76,45,"website : gso.osis-sman3smg.com e-mail : gsosmaga@yahoo.com");
	$pdf->Image("../image/gso.jpg",20,20,35);
	
	$line=50;
	$pdf->setLineWidth(0.5);
	$pdf->Line(20,$line,190,$line);
	$pdf->setLineWidth(0);
	$pdf->Line(20,$line+0.75,190,$line+0.75);
	$pdf->setFont('Arial','B',14);
	$pdf->text(82,65,"BIODATA PESERTA");
	//$pdf->setFont('Arial','B','9');

	//$pdf->text(15,45,'Laporan Transaksi');
		//$yi = 53;
		//$ya = 47;
		$pdf->setFont('Arial','',14);
		//$pdf->setFillColor(0,80,180);
		$pdf->setTextColor(0,0,0);
		//$pdf->setXY(15,$ya);

		//$ya = $yi + $row;
		
		//$i = 1;
		//$no = 1;
		//$max = 31;
		//$row = 6;
				
	//$pdf->setFont('arial','B',8);
	$margin=20;
	$y=80;
	$x=45;
	$space1=9;
	$space2=7;
	$pdf->text($margin,$y,"Nama Lengkap");
	$pdf->text($margin+$x,$y,":");
	$pdf->text($margin+$x+3,$y,$dt['nm']);
	$y=$y+$space1;
	
	$pdf->text($margin,$y,"Tempat/Tgl Lahir");
	$pdf->text($margin+$x,$y,":");
	$pdf->text($margin+$x+3,$y,$dt['tmpt_lahir'].", ".$lahir);
	$y=$y+$space1;
	
	$pdf->text($margin,$y,"No. Pendaftaran");
	$pdf->text($margin+$x,$y,":");
	$pdf->text($margin+$x+3,$y,$dt['no_daftar']);
	$y=$y+$space1;
	
	$pdf->text($margin,$y,"Bidang");
	$pdf->text($margin+$x,$y,":");
	$pdf->text($margin+$x+3,$y,$dt['bidang']);
	$y=$y+$space1;
	
	$pdf->text($margin,$y,"Jenis Kelamin");
	$pdf->text($margin+$x,$y,":");
	$pdf->text($margin+$x+3,$y,$dt['kelamin']);
	$y=$y+$space1;
	
	$pdf->text($margin,$y,"Alamat");
	$pdf->text($margin+$x,$y,":");
	if (strlen($dt['alamat'])>40){
		$i = 39;
		while (substr($dt['alamat'],$i,1)<>" "){
			   $i=$i-1;
		}
		$pdf->text($margin+$x+3,$y,substr($dt['alamat'],0,$i));
		$y=$y+$space2;
		$pdf->text($margin+$x+3,$y,substr($dt['alamat'],$i+1,strlen($dt['alamat'])));
		$y=$y+$space2;
	}else{
	$pdf->text($margin+$x+3,$y,$dt['alamat']);
	$y=$y+$space2;
	}
	$pdf->text($margin+$x+3,$y,$dt['kota']." ".$dt['kode_pos']);
	$y=$y+$space2;
	$pdf->text($margin+$x+3,$y,$dt['prov']);
	$y=$y+$space1;
	
	$pdf->text($margin,$y,"No. Telepon");
	$pdf->text($margin+$x,$y,":");
	if ($dt['noTlp']==''){
		$pdf->text($margin+$x+3,$y,"-");
	}else {
	    $pdf->text($margin+$x+3,$y,$dt['noTlp']);
	}
	
	$y=$y+$space1;
	
	$pdf->text($margin,$y,"No. HP");
	$pdf->text($margin+$x,$y,":");
	if ($dt['noHp']==''){
		$pdf->text($margin+$x+3,$y,"-");
	}else {
	    $pdf->text($margin+$x+3,$y,$dt['noHp']);
	}
	$y=$y+$space1;
	
	$pdf->text($margin,$y,"E-mail");
	$pdf->text($margin+$x,$y,":");
	if ($dt['email']==''){
		$pdf->text($margin+$x+3,$y,"-");
	}else {
	    $pdf->text($margin+$x+3,$y,$dt['email']);
	}
	$y=$y+$space1;
	
	$pdf->text($margin,$y,"Asal Sekolah");
	$pdf->text($margin+$x,$y,":");
	$pdf->text($margin+$x+3,$y,$dt['nm_sekolah']);
	$y=$y+$space1;
	
	$pdf->text($margin,$y,"Kelas");
	$pdf->text($margin+$x,$y,":");
	if ($dt['kelas']=='7'){
		$pdf->text($margin+$x+3,$y,"VII (Tujuh)");
	}else if ($dt['kelas']=='8'){
		$pdf->text($margin+$x+3,$y,"VIII (Delapan)");
	}else if ($dt['kelas']=='9'){
		$pdf->text($margin+$x+3,$y,"IX (Sembilan)");
	}else {
		$pdf->text($margin+$x+3,$y,"");
	}
	$y=$y+$space1;
	
	$pdf->text($margin,$y,"NIS");
	$pdf->text($margin+$x,$y,":");
	$pdf->text($margin+$x+3,$y,$dt['nis']);
	$y=$y+$space1;
	
	$pdf->text($margin,$y,"Alamat Sekolah");
	$pdf->text($margin+$x,$y,":");
	$pdf->text($margin+$x+3,$y,$dt['alm_sklh']);
	$y=$y+$space2;
	$pdf->text($margin+$x+3,$y,$dt['kota_sklh']." ".$dt['pos_sklh']);
	$y=$y+$space2;
	$pdf->text($margin+$x+3,$y,$dt['prov_sklh']);
	$y=$y+$space1;
	
	$pdf->text($margin,$y,"No. Telp Sekolah");
	$pdf->text($margin+$x,$y,":");
	if ($dt['telp_sklh']==''){
		$pdf->text($margin+$x+3,$y,"-");
	}else {
	    $pdf->text($margin+$x+3,$y,$dt['telp_sklh']);
	}
	$y=$y+$space1;
	
	$pdf->text($margin+95,$y+5,"Semarang, ".$date);
	$pdf->text($margin+95,$y+12,"Peserta GSO 2011,");
	if (strlen($dt['nm'])>15){
		$i = 14;
		while (substr($dt['nm'],$i,1)<>" "){
			   $i=$i-1;
		}
		$nama = substr($dt['nm'],0,$i)." ";
		while ($i < strlen($dt['nm'])){
			   if (substr($dt['nm'],$i,1)==" "){
				   $nama = $nama.substr($dt['nm'],$i+1,1).".";
			   }
			   $i = $i + 1;
		}
		$pdf->text($margin+95,$y+35,$nama);
	}else {
	
	$pdf->text($margin+95,$y+35,$dt['nm']);
	}
	
	//$pdf->setFont('Arial','',12);
	$pdf->setLineWidth(0);
	$photo = $margin+10;
	$yp = $y+4;
	$ysize = 30;
	$xsize = 24;
	$pdf->Line($photo,$yp,$photo+$xsize,$yp);
	$pdf->Line($photo,$yp+$ysize,$photo+$xsize,$yp+$ysize);
	$pdf->Line($photo,$yp,$photo,$yp+$ysize);
	$pdf->Line($photo+$xsize,$yp,$photo+$xsize,$yp+$ysize);
	$pdf->text($photo+5.5,$yp+13.75,"Photo");
	$pdf->text($photo+6.5,$yp+20,"3 x 4");
	//footer
	
	$pdf->Output('Biodata Peserta GSO 2011.pdf','I');
	$pdf->Close();
?>