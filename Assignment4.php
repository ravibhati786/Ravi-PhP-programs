<?php
	$f1 = fopen("file1.txt","r");
	$f2 = fopen("file2.txt","w");
	
	if($f1 == false)
	{
		echo "Error while opening.";
		exit();
	}
	$fileread = fread($f1,filesize("file1.txt"));
	$string = explode(" ",$fileread);
	
	sort($string);
	
	foreach($string as $s)
	{
		fwrite($f2,$s." ");
	}
?>