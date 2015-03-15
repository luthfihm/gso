<? /*
	*****************************************************************
	* 	frame name     : qFrame.form 						 		*
	*	author   	   : iadifriandi (iadifriandi@yahoo.co.id)		*
	*	build date     : 15/1/2011 									*
	*****************************************************************
	*/
	//require_once("../qFrame.php");
	class q_form{		
		function input($type,$id,$value=null,$opt=null){
			if(($type=="text")||($type=="file")){
				echo "<input type='".strtolower($type)."' name='".strtolower($id)."' id='".strtolower($id)."' class='input_style' value='$value' $opt />";
			}else if(($type =="submit") || ($type =="button") || ($type =="reset")){
				 echo "<input type='".strtolower($type)."' name='".strtolower($id)."' id='".strtolower($id)."' class='button_style' value='$value' $opt/>";
			}else if(($type =="radio") || ($type =="checkbox")){
				 echo "<input type='".strtolower($type)."' name='".strtolower($id)."' id='".strtolower($id)."' class='input_style' value='$value' $opt/>";		
			}
		}
		function select($id,$optionvalue,$opt){
			echo"<select name='".strtolower($id)."' id='".strtolower($id)."' class='select_style'  $opt/> $optionvalue </select>";
		} 
		function textarea($id,$cols,$rows,$value){
			echo"<textarea name='".strtolower($id)."' id='".strtolower($id)."' class='textarea_style' cols='$cols' rows='$rows' />$value</textarea>";
		}
	}
	
	//echo(is_subclass_of('q_form','qframe')? 'TRUE' : 'FALSE').'<br />';
?>