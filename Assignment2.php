<?php
	
	$str = "";
	if(isset($_GET['c1']))
		$str = $str.$_GET['c1'].", ";
	if(isset($_GET['c2']))
		$str = $str.$_GET['c2'].", ";
	if(isset($_GET['c3']))
		$str = $str.$_GET['c3'].", ";
	if(isset($_GET['c4']))
		$str = $str.$_GET['c4']." ";
	
	echo "Hobbies are = ".$str;

	
?>