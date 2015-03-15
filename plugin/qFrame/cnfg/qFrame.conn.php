<? /*
	*****************************************************************
	* 	frame name     : qFrame.conn		             		        *
	*	author   	   : iadifriandi (iadifriandi@yahoo.co.id)		*
	*	build date     : 15/1/2011 						*
	*****************************************************************
	*/
	class connect{
		private $host;
		private $user;
		private $pass;
		private $dbase;
		private $conn;
		private $select_db;
		
		function connect(){
			$this->host="localhost"; //default
			$this->user="root"; //default
			$this->pass="underground"; //
			$this->dbase="db_registration"; //
		}
		
		protected function open_connection(){
			try{
				$this->conn=mysql_connect($this->host,$this->user,$this->pass);
				$this->select_db=mysql_select_db($this->dbase);
			}catch (exception $e){
				return $e;
			}
		}
		
		protected function close_connection(){
			try{
				mysql_close($this->conn);
			}catch (exception $e){
				return $e;
			}
		}
	}
?>