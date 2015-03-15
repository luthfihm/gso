<?
	require_once("../plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$cnfg=new q_tools();
	$view=$op->cs_query("SELECT * FROM tb_pembina ORDER BY id ASC");
	
	
	require("../plugin/fpdf/fpdf.php");
	
	$pdf=new FPDF('l','mm','A4');
	$pdf->Open();
	while($dt=mysql_fetch_array($view)){
	$pdf->addPage();
	$pdf->setAutoPageBreak(false);
	$pdf->SetFont('Arial','',35);
	//$pdf->Image("sertifikat/".$bid.".jpg",0,0,297,210);
	$pdf->SetXY(48.5,89);
	// Centered text in a framed 20*10 mm cell and line break
	if (strlen($dt['nama'])>30){
		$i = 29;
		while (substr($dt['nama'],$i,1)<>" "){
			   $i=$i-1;
		}
		$nama = substr($dt['nama'],0,$i)." ";
		while ($i < strlen($dt['nama'])){
			   if (substr($dt['nama'],$i,1)==" "){
				   $nama = $nama.substr($dt['nama'],$i+1,1).".";
			   }
			   $i = $i + 1;
		}
		$pdf->Cell(200,20,$nama,0,0,'C');
	}else {
	
	$pdf->Cell(200,20,$dt['nama'],0,0,'C');
	}
	$pdf->SetFont('Arial','',28);
	$pdf->SetXY(48.5,104);
	$pdf->Cell(200,20,$dt['sekolah'],0,0,'C');
        $pdf->Image("sertifikat/pak_hari.png",41,162,49);
	$pdf->Image("sertifikat/Arlita.png",230,162,45);
	}
	$pdf->Output('Pembina.pdf','I');
	$pdf->Close();
?>