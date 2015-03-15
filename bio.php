<?
	require_once("plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$cnfg=new q_tools();
	
	require("plugin/fpdf/fpdf.php");
	
	$pdf=new FPDF('p','mm','A4');
	$i=$_GET['min'];
	$bid=$_GET['bid'];
	if($bid=="bio"){
		$bidang="BIOLOGI";
	}else if($bid=="fis"){
		$bidang="FISIKA";
	}else if($bid=="mat"){
		$bidang="MATEMATIKA";
	}else if($bid=="tik"){
		$bidang="KOMPUTER";
	}
	while($i<201){
		if (( $i >= 10 ) && ( $i <= 99 )){
			$no="0".$i;
		}else{
			$no=$i;
		}
	$pdf->Open();
	$pdf->addPage();
	$pdf->setAutoPageBreak(false);
	$pdf->Image("image/mark.jpg",35,65,140);
	$pdf->setFont('Arial','B','21');
	$pdf->text(57,27,"GANESHA SCIENCE OLYMPIAD 2011");
	$pdf->setFont('Arial','B','20');
	$pdf->text(76,35,"SMA NEGERI 3 SEMARANG");
	$pdf->setFont('Arial','','9');
	$pdf->text(78,40,"Jl. Pemuda No 149 Telp. (024) 35544287 - 35544291 Semarang");
	$pdf->text(76,45,"website : gso.osis-sman3smg.com e-mail : gsosmaga@yahoo.com");
	$pdf->Image("image/gso.jpg",20,20,35);
	
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
	$pdf->text($margin+$x+3,$y,"");
	$y=$y+$space1;
	
	$pdf->text($margin,$y,"Tempat/Tgl Lahir");
	$pdf->text($margin+$x,$y,":");
	$pdf->text($margin+$x+3,$y,"");
	$y=$y+$space1;
	
	$pdf->text($margin,$y,"No. Pendaftaran");
	$pdf->text($margin+$x,$y,":");
	$pdf->text($margin+$x+3,$y,strtoupper($bid)."-".$no);
	$y=$y+$space1;
	
	$pdf->text($margin,$y,"Bidang");
	$pdf->text($margin+$x,$y,":");
	$pdf->text($margin+$x+3,$y,$bidang);
	$y=$y+$space1;
	
	$pdf->text($margin,$y,"Jenis Kelamin");
	$pdf->text($margin+$x,$y,":");
	$pdf->text($margin+$x+3,$y,"");
	$y=$y+$space1;
	
	$pdf->text($margin,$y,"Alamat");
	$pdf->text($margin+$x,$y,":");
	$pdf->text($margin+$x+3,$y,"");
	$y=$y+$space2;
	
	$pdf->text($margin+$x+3,$y,"");
	$y=$y+$space2;
	$pdf->text($margin+$x+3,$y,"");
	$y=$y+$space1;
	
	$pdf->text($margin,$y,"No. Telepon");
	$pdf->text($margin+$x,$y,":");
	$pdf->text($margin+$x+3,$y,"");
	
	$y=$y+$space1;
	
	$pdf->text($margin,$y,"No. HP");
	$pdf->text($margin+$x,$y,":");
	$pdf->text($margin+$x+3,$y,"");
	
	$y=$y+$space1;
	
	$pdf->text($margin,$y,"E-mail");
	$pdf->text($margin+$x,$y,":");
    $pdf->text($margin+$x+3,$y,"");
	
	$y=$y+$space1;
	
	$pdf->text($margin,$y,"Asal Sekolah");
	$pdf->text($margin+$x,$y,":");
	$pdf->text($margin+$x+3,$y,"");
	$y=$y+$space1;
	
	$pdf->text($margin,$y,"Kelas");
	$pdf->text($margin+$x,$y,":");
	$pdf->text($margin+$x+3,$y,"");
	$y=$y+$space1;
	
	$pdf->text($margin,$y,"NIS");
	$pdf->text($margin+$x,$y,":");
	$pdf->text($margin+$x+3,$y,"");
	$y=$y+$space1;
	
	$pdf->text($margin,$y,"Alamat Sekolah");
	$pdf->text($margin+$x,$y,":");
	$pdf->text($margin+$x+3,$y,"");
	$y=$y+$space2;
	$pdf->text($margin+$x+3,$y,"");
	$y=$y+$space2;
	$pdf->text($margin+$x+3,$y,"");
	$y=$y+$space1;
	
	$pdf->text($margin,$y,"No. Telp Sekolah");
	$pdf->text($margin+$x,$y,":");
	$pdf->text($margin+$x+3,$y,"");
	$y=$y+$space1;
	
	$pdf->text($margin,$y,"Nama Pembina");
	$pdf->text($margin+$x,$y,":");
	$pdf->text($margin+$x+3,$y,"");
	$y=$y+$space1;
	
	$pdf->text($margin+95,$y+5,"Semarang, 2 OKTOBER 2011");
	$pdf->text($margin+95,$y+12,"Peserta GSO 2011,");
	
	$pdf->text($margin+95,$y+35,"(                               )");
	
	
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
	$i++;
	}
	
	$pdf->Output('Biodata Peserta GSO 2011.pdf','I');
	$pdf->Close();
?>