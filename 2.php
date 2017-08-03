<?php

/**
* 
*/
class Mobile
{

	public $modelno;		//="123";
	public $imeino;		//="124578";
	
	public $volume=0;

	function volumeup()
	{
		# code...
		$this->volume++;
	}

	function volumedown()
	{
		# code...
		$this->volume--;
		
	}
function __construct($m,$i){
	$this->modelno=$m;
	$this->imeino=$i;

}

}

$obj1=new Mobile('123','1001');
$obj2=new Mobile('1234','1002');
$obj3=new Mobile('12345','1003');

echo $obj1->modelno;
echo $obj2->modelno;
echo $obj3->modelno;

/*
$obj1 =new Mobile();
$obj2 =new Mobile();
$obj3 =new Mobile();

$obj1->volumeup();
$obj1->volumeup();			//
$obj1->volumeup();

$obj2->volumeup();

$obj3->volumeup();
$obj3->volumeup();
$obj3->volumeup();
$obj3->volumeup();
$obj3->volumeup();

echo "\n".$obj1->volume;
echo "\n".$obj2->volume;
echo "\n".$obj3->volume;

$obj1->volumedown();


$obj3->volumedown();
$obj3->volumedown();
$obj3->volumedown();


echo "\n".$obj1->volume;
echo "\n".$obj2->volume;
echo "\n".$obj3->volume;
*/
?>