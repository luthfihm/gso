<?
	require_once("../plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$cnfg=new q_tools();
	
	//$view=$op->cs_query("SELECT * FROM $bid WHERE no='$noSkr'");
	//$dt=mysql_fetch_array($view);
	
	require("../plugin/fpdf/fpdf.php");
	
	$pdf=new FPDF('l','mm','A4');
	$pdf->Open();
	$pdf->addPage();
	$pdf->setAutoPageBreak(false);
	$pdf->SetFont('Arial','',34);
	$pdf->Image("sertifikat/bio.jpg",0,0,297,210);
	$pdf->SetXY(48.5,95);
	// Centered text in a framed 20*10 mm cell and line break
	$pdf->Cell(200,20,'LUTHFI HAMID MASYKURINNNN',0,0,'C');
	$pdf->Output('Biodata Peserta GSO 2011.pdf','I');
	$pdf->Close();
?>