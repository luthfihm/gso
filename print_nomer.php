<?
	require_once("plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$cnfg=new q_tools();
	//$jml=$_GET['jml'];
	require("plugin/fpdf/fpdf.php");
	
	$pdf=new FPDF('p','mm','A4');
	$pdf->Open();
	$pdf->addPage();
	$pdf->setAutoPageBreak(false);
	$pdf->SetXY(20,20);
	$pdf->Cell(80,30,'A',1);
	$pdf->SetXY(120,20);
	$pdf->Cell(80,30,'A',1);
	$pdf->Output('Nomer Peserta.pdf','I');
	$pdf->Close();
?>