<? /*
	*****************************************************************
	* 	frame name     : qFrame.sql		             		    	*
	*	author   	   : iadifriandi (iadifriandi@yahoo.co.id) 	*
	*	build date     : 15/1/2011 						*
	*****************************************************************
	*/
require_once("qFrame.conn.php");
class q_sql extends connect{	
	 public function cs_query($sql){
		try{
			$this->open_connection();
			$sql=mysql_query($sql);
			$this->close_connection();
			return $sql;
		}catch (exception $e){
			return $e;
		}
		}
		public function save($tbl,$fields,$value){
		try{
			$this->open_connection();
			$que=mysql_query("INSERT INTO ".$tbl." (".$fields.") VALUES (".$value.")");
			$this->close_connection();
			return $que;	
		}catch (exception $e){
			return $e;
		}
		}
		public function delete($tbl,$value){
		try{
			$this->open_connection();
			$del=mysql_query("DELETE FROM ".$tbl." WHERE ".$value);
			$this->close_connection();
			return $del;
		}catch (exception $e){
			return $e;
		}
		}
		public function update($tbl,$val,$field,$id){
		try{
			$this->open_connection();
			$upd=mysql_query("UPDATE ".$tbl." SET ".$val." WHERE ".$field."='".$id."'");
			$this->close_connection();
			return $upd;
		}catch (exception $e){
			return $e;
		}
		}
		public function select($tbl,$field,$filter){
		try{
			$this->open_connection();
			$view=mysql_query("SELECT ".$field." FROM ".$tbl." ".$filter);
			$this->close_connection();
			return $view;
		}catch (exception $e){
			return $e;
		}
		}
		public function validUser($tbl,$f_user,$f_pass,$uname,$pass){ 
		try{	
			$this->open_connection();
			$tc=mysql_query(sprintf("SELECT * from ".$tbl." WHERE ".$f_user."='".$uname."' and ".$f_pass."='".$pass."'",mysql_real_escape_string($uname),mysql_real_escape_string($pass)));
			$this->close_connection();
			return $tc;
		}catch (exception $e){
			return $e;
		}
		}
}
?>