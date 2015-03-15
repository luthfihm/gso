<?php
	header('Content-Type: application/pdf');
	session_start();
	require_once("../plugin/class_db.php");
	$sql2=new db();
		
		$view=$sql2->query("SELECT * FROM tb_info ORDER BY nm_laundry LIMIT 1");
		while($data=mysql_fetch_array($view)){
			$nm=$data['nm_laundry'];
			$al=$data['alamat'];
			$tel=$data['telepon'];
			$mail=$data['email'];
			$web=$data['website'];
			$motto=$data['motto'];
			$banner=$data['banner'];
		}

	require("../pdf/fpdf.php");
	
	$pdf=new FPDF('p','mm','A4');
	$pdf->Open();
	$pdf->addPage();
	$pdf->setAutoPageBreak(false);
	$pdf->setFont('Arial','B','14');
	$pdf->text(40,25,"$nm laundry");
	$pdf->setFont('Arial','','8');
	$pdf->text(40,30,"$al, telepon: $tel, email: $mail, website: $web");
	$pdf->Image("../images/ubuntu3.jpg",10,8,28);
	
	
	$pdf->setLineWidth(0);
	$pdf->Line(10,35,200,35);
	$pdf->setFont('Arial','B','9');

	$pdf->text(15,45,'Laporan Transaksi');
		$yi = 53;
		$ya = 47;
		$pdf->setFont('Arial','',9);
		$pdf->setFillColor(0,80,180);
		$pdf->setTextColor(255,255,255);
		$pdf->setXY(15,$ya);
		$pdf->CELL(18,6,'No.Nota',1,0,'C',1);
		$pdf->CELL(25,6,'Tanggal',1,0,'C',1);
		$pdf->CELL(50,6,'Customer',1,0,'C',1);
		$pdf->CELL(25,6,'Qty Item/Kilo',1,0,'C',1);
		$pdf->CELL(30,6,'Kasir',1,0,'C',1);
		$pdf->CELL(25,6,'Total Bayar',1,0,'C',1);
		$ya = $yi + $row;
		
		$i = 1;
		$no = 1;
		$max = 31;
		$row = 6;
			
	$q=$sql2->query("select a.id_tran,a.user,a.harga_kilo,a.id_p,a.tgl_tran,a.j_kilo,a.user,a.total_bayar,b.id_p,b.nm from tb_tran as a,tb_pelanggan as b where a.id_p=b.id_p group by id_tran ASC");
	$i=1;
	while($r=mysql_fetch_array($q)){
			$id=$r['id_tran'];
			$pdf->setXY(15,$ya);
			$pdf->setFont('arial','',8);
			$pdf->setTextColor(000,000,000);
			$pdf->setFillColor(255,255,255);
			$pdf->cell(18,6,$r['id_tran'],1,0,'C',1);
			$pdf->cell(25,6,$r['tgl_tran'],1,0,'C',1);
			$pdf->cell(50,6,$r['nm'],1,0,'C',1);
			$pdf->cell(25,6,$r['j_kilo'],1,0,'C',1);
			$pdf->cell(30,6,$r['user'],1,0,'C',1);
			$pdf->cell(25,6,number_format($r['total_bayar']),1,0,'C',1);
			$ya = $ya+$row;
			$no++;
			$i++;		
	}
	$qtb=$sql2->query("SELECT SUM(total_bayar) as total FROM tb_tran");
			while($hq=mysql_fetch_array($qtb)){
				$t=$hq['total'];
			}
	$qhut=$sql2->query("select sum(total_bayar) as tothutang from tb_tran where stat=1");
			while($th=mysql_fetch_array($qtb)){
				$hutang=$th['tothutang'];
			}
	$qjum=$sql2->query("select sum(jumlah) as totaljum from tb_kas");
			while($hjum=mysql_fetch_array($qjum)){
				$tjum=$hjum['totaljum'];
			}
			
	$bersih=$t-$tjum-$hutang;
	
	$pdf->setFont('arial','B',8);
	$pdf->text(125,$ya+5,"Total Pendapatan");
	$pdf->text(160,$ya+5,":");
	$pdf->text(162,$ya+5,"Rp.".number_format($t));
	
	$pdf->text(125,$ya+10,"Total Pengeluaran");
	$pdf->text(160,$ya+10,":");
	$pdf->text(162,$ya+10,"Rp.".number_format($tjum));
	
	$pdf->text(125,$ya+15,"Total Hutang(blm lunas)");
	$pdf->text(160,$ya+15,":");
	$pdf->text(162,$ya+15,"Rp.".number_format($hutang));
	$pdf->text(125,$ya+20,"----------------------------------------------------------");
	$pdf->text(125,$ya+25,"Pendapatan Bersih");
	$pdf->text(160,$ya+25,":");
	$pdf->text(162,$ya+25,"Rp.".number_format($bersih));
	//footer
	$pdf->SetY(-20);
	$pdf->setFont('Arial','I',8);
	$pdf->Cell(0,10,'e-laundry application v.1 | &copy; 64studios 2010');
	$pdf->Output('laporan_transaksi.pdf','I');
	$pdf->Close();
?>

