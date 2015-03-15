<?
	require_once("plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$cnfg=new q_tools();
	$view=$op->cs_query("SELECT * FROM juara");
	
	require("plugin/fpdf/fpdf.php");
	
	$pdf=new FPDF('l','mm','A4');
	$pdf->Open();
	while($dt=mysql_fetch_array($view)){
	$pdf->addPage();
	$pdf->setAutoPageBreak(false);
	$pdf->SetFont('Arial','',33);
	$pdf->Image("piagam/".$dt['no'].".jpg",0,0,297,210);
	$pdf->SetXY(48.5,83);
	
	if (strlen($dt['nama'])>23){
		$i = 22;
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
	}
	$pdf->Output('Piagam.pdf','I');
	$pdf->Close();
?>