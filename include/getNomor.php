<?
	require_once("../plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$bid=$_GET["bidang"];
	$bidang=$_GET["bidang"];
	if($bidang<>"null"){
	$view=$op->cs_query("SELECT no FROM $bid WHERE 1 ORDER BY no DESC");
	if(mysql_num_rows($view) > 0){
		$dt=mysql_fetch_array($view);
		$no=$dt['no'];
		$noSkr=$no+1;
	}else{
		$noSkr=1;
	};
	if (( $noSkr >= 1 ) && ( $noSkr <= 9 )){
		echo strtoupper($bid)."-00".$noSkr;
	}else if (( $noSkr >= 10 ) && ( $noSkr <= 99 )){
		echo strtoupper($bid)."-0".$noSkr;
	}else{
		echo strtoupper($bid)."-".$noSkr;
	}
	}else{ echo "";}
?>