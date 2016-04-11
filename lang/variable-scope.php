<?php
$a = 1; /* global scope */ 

function test()
{ 
    echo $a; /* reference to local scope variable */ 
	//does not run undefined variable a
} 

function test1() 
{
	$a = 2;
	print "test1 " . $a . "\n";
}

function test2()
{
    global $a;
	$a = 3;
}
//test();//inside test function $a is local and has not been initialized therefore nothing is printed
test1();//$a is local 
test2();
print "after test2 " . $a . "\n";

?>