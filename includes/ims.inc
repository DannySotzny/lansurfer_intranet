<?
	define('IMS_READ', 1);

	function GetIMSContactURL($to) {
		global $LS_BASEPATH;
		
		//return $LS_BASEPATH.'ims/send.php?to='.$to;
		return 'JavaScript:IMSOpenSend('.$to.')';
	}
	
	function PrintIMSContactLink($to, $title) {
		global $LS_BASEPATH, $user_valid;
		
		if ($user_valid)
			echo '<a href="'.GetIMSContactURL($to).'">'.$title.'</a>';
		else
			echo $title;
	}	
	
?>