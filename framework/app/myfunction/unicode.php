<?php
class unicode {
	function vn_str_filter ($str){
		$unicode = array(
		   'a'=>'�|�|?|�|?|a|?|?|?|?|?|�|?|?|?|?|?',
		   'd'=>'d',
		   'e'=>'�|�|?|?|?|�|?|?|?|?|?',
		   'i'=>'�|�|?|i|?',
		   'o'=>'�|�|?|�|?|�|?|?|?|?|?|o|?|?|?|?|?',
		   'u'=>'�|�|?|u|?|u|?|?|?|?|?',
		   'y'=>'�|?|?|?|?',
		   'A'=>'�|�|?|�|?|A|?|?|?|?|?|�|?|?|?|?|?',
		   'D'=>'�',
		   'E'=>'�|�|?|?|?|�|?|?|?|?|?',
		   'I'=>'�|�|?|I|?',
		   'O'=>'�|�|?|�|?|�|?|?|?|?|?|O|?|?|?|?|?',
		   'U'=>'�|�|?|U|?|U|?|?|?|?|?',
		   'Y'=>'�|?|?|?|?',
		);

		foreach($unicode as $nonUnicode=>$uni){
		   $str = preg_replace("/($uni)/i", $nonUnicode, $str);
		
		}
		return $str = str_replace( ' ', '-', $str );
	
	}
}
?>