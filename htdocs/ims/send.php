<?
	// Prevents browser from reloading hole frameset on refresh
	//Header('Last-Modified: Thu, 13 Jan 2000 00:00:00 GMT');

	$LS_BASEPATH = "../";
	include $LS_BASEPATH."../includes/ls_base.inc";
	
?>
<html>
<head>
	<title><? echo _("Send Message"); ?></title>
</head>

<FRAMESET border=2 frameSpacing=2 frameBorder=2 rows="*,180"> 
  <FRAME name=history marginWidth=2 marginHeight=2 src="send_history.php?to=<? echo $to; ?>">
  <FRAME name=content marginWidth=0 marginHeight=0 src="send_content.php?to=<? echo $to; ?>">
</FRAMESET>

</html>
