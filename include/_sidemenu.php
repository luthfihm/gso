	<script type="text/javascript" src="plugin/headline.js"></script>
	<script type="text/javascript"> 
		$(document).ready(function(){
	  		// untuk permulaan, tampilkan content nomor 1 '#slideAwal'
	  		bukaContent($('#slideAwal'),'div1');			
		});
	  </script>
   <div id="box_isi">&nbsp;
			<center><a href="http://www.sman3-smg.sch.id/" title="SMA Negeri 3 Semarang"><img src="image/smaga.png" width="150" border="no" /></a></center>
            &nbsp;
		</div>
	<div id="box">
	<div id="box_title">kale<font color="#CCCCCC">nder</font></div>
	<div id="box_isi">
	<?php
	$month=date("m");
	$year=date("Y");
	$day=date("d");
	$enddate=date("t",mktime(0,0,0,$month,$day,$year));
	$hariini=date("d F Y");
	?>
		<table border="0" cellpadding="1" cellspacing="1" align="center">
		<tr style="font-family:Arial; font-size:12px">
			<td align="center" style="border:1px solid #CCCCCC"><font color="#FF0000">Min</font></td>
			<td align="center" style="border:1px solid #CCCCCC">Sen</td>
			<td align="center" style="border:1px solid #CCCCCC">Sel</td>
			<td align="center" style="border:1px solid #CCCCCC">Rab</td>
			<td align="center" style="border:1px solid #CCCCCC">Kam</td>
			<td align="center" style="border:1px solid #CCCCCC">Jum</td>
			<td align="center" style="border:1px solid #CCCCCC">Sab</td>
			</td>
		</tr>
		<?php
			$s=date("w",mktime(0,0,0,$month,1,$year));
			for($ds=1;$ds<=$s;$ds++){
			echo"
			<td align=\"center\" style=\"border:1px solid #CCCCCC;font-family:Arial; font-size:11px\"></td>";
			}
			for($d=1;$d<=$enddate;$d++){
			if(date("w",mktime(0,0,0,$month,$d,$year))==0){
			echo"<tr>";
			}
			$fontcolor="#000000";
			if(date("D",mktime(0,0,0,$month,$d,$year))=="Sun"){
			$fontcolor="red";}
			echo" <td align=\"center\" style=\"border:1px solid #CCCCCC; color:$fontcolor;font-family:Arial; font-size:11px;\">$d</td>";
			if(date("w",mktime(0,0,0,$month,$d,$year))==6){
			echo"</tr>";
			}
			}
		?>
		<tr>
			<td style="font-family:Arial; font-size:11px" colspan="7">Hari ini tanggal <?php echo $hariini;?></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
		</tr>
	</table>
	</div>
</div>
<div id="box_isi">&nbsp;
			<center><a href="http://osis-sman3smg.com/" title="OSIS SMAN 3 Semarang"><img src="image/osis.png" width="185" border="no" /></a></center>
		</div>
<div id="box_isi">&nbsp;
<!-- Begin ShoutMix - http://www.shoutmix.com -->
<iframe title="luthfi_hamid_m" src="http://www.shoutmix.com/?luthfi_hamid_m" width="185" height="350" frameborder="0" scrolling="auto">
<a href="http://www.shoutmix.com/?luthfi_hamid_m">View shoutbox</a>
</iframe>
<!-- End ShoutMix -->
</div>