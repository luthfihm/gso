<? /*
	*****************************************************************
	* 	frame name     : qFrame.tools   		        		*
	*	author   	   : iadifriandi (iadifriandi@yahoo.co.id)		*
	*	build date     : 15/1/2011 						*
	*****************************************************************
	*/
	class q_tools{
		function linkPage($url,$start){
			$path=substr($url,$start,strlen($url));
			return $path;
		}
		function refresh($delay,$url){
				echo "<meta http-equiv='refresh' content='$delay;URL=$url' />";
		}
		function captcha(){
			//session_start();
			$input = array("0","1","2","3","4","5","6","7","8","9","a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
			$rand_keys = array_rand($input, 9);
			$hash=$input[$rand_keys[0]] . $input[$rand_keys[1]] . $input[$rand_keys[2]] . $input[$rand_keys[3]] . $input[$rand_keys[4]] . $input[$rand_keys[5]]. $input[$rand_keys[6]]. $input[$rand_keys[7]]. $input[$rand_keys[8]];
			$_SESSION['string']=$hash;
			$text = $_SESSION['string'];
			echo "<div id='cpth'>$text</div>"; 
		}
		
		//begin report on excels
		public $data;
		public function WriteToFile($filename){			
			if($fp = @fopen($filename, "wb")){
				@fwrite($fp, $this->data);
				@fclose($fp);
			}			
		}
		
		public function BOF(){
			$this->data = pack("ssssss", 0x809, 0x8, 0x0, 0x10, 0x0, 0x0);
		}		
		
		public function EOF(){
			$this->data .= pack("ss", 0x0A, 0x00);
		}
		
		public function WriteLabel($row, $col, $value){
			$len = strlen($value);
			$this->data .= pack("ssssss", 0x204, 8 + $len, $row, $col, 0x0, $len);
			$this->data .= $value;
		}
		
		public function WriteNumber($row, $col, $value){
			$this->data .= pack("sssss", 0x203, 14, $row, $col, 0x0);
			$this->data .=  pack("d", $value);
		}
		//end report on excels
	}
?>
