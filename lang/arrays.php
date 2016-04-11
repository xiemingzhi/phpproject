<?php
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

function dosort($arr)
{
    sort($arr);//arr becomes sorted	
	return $arr;
}

function doprint($arr)
{
	$arrlength = count($arr);
	for($x = 0; $x < $arrlength; $x++) {
		echo $arr[$x] . "\n";
	}
}

doprint(dosort($cars));
$cars = [];
$cars[] = "Volvo";
$cars[] = "BMW";
$cars[] = "Toyota";//another way to create arrays
doprint(dosort($cars));//Notice: Array to string conversion
?>