<?php
$val = $_GET['txtVal'];
$funType = $_GET['num'];



switch($funType)
{
	case "Prime"		: 	if(isPrime($val))
							{
								echo $val." is a Prime Number";
							}
							else
							{
								echo $val." is not a Prime Number";
							}
							break;
	case "Factorial" 	: 	echo "Factorial of $val is =" . findFactorial($val);
							break;
	case "Armstrong" 	: 	echo "Armstrong";
							break;
	default 			:	echo "Number is unknown";
							break;
}



function findFactorial($var1)
{
	$fact= 1;
	for($i=1; $i<= $var1; $i++)
		$fact *= $i;
	return $fact;
}

function isPrime($var)
{
	$i=2;
	$result=1;
	while($i<$var)
	{
		if($var % $i == 0)
		{
			global $result;
			$result = 0;
		}
		$i++;
	}
	return $result;
}

?>