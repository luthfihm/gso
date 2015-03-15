<?
	require_once("../plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$cnfg=new q_tools();
	$bid=$_GET['bid'];
	$view=$op->cs_query("SELECT * FROM $bid");
	
	
	require("../plugin/fpdf/fpdf.php");
	
	$pdf=new FPDF('l','mm','A4');
	$pdf->Open();
	while($dt=mysql_fetch_array($view)){
	$pdf->addPage();
	$pdf->setAutoPageBreak(false);
	$pdf->SetFont('Arial','',35);
	$pdf->Image("sertifikat/".$bid.".jpg",0,0,297,210);
	$pdf->SetXY(48.5,88);
	// Centered text in a framed 20*10 mm cell and line break
	if (strlen($dt['nm'])>23){
		$i = 22;
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
		$pdf->Cell(200,20,$nama,0,0,'C');
	}else {
	
	$pdf->Cell(200,20,$dt['nm'],0,0,'C');
	}
	$pdf->SetFont('Arial','',28);
	$pdf->SetXY(48.5,103);
	$pdf->Cell(200,20,$dt['nm_sekolah'],0,0,'C');
	$pdf->Image("sertifikat/pak_hari.png",41,161,49);
	$pdf->Image("sertifikat/Arlita.png",230,160,45);
	}
	$pdf->Output('Biodata Peserta GSO 2011.pdf','I');
	$pdf->Close();
?>