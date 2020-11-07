<?php



require_once 'vendor/autoload.php';

use openWebX\Variables\Variable_String;


$testStr = new Variable_String('Äch bün einß');


echo $testStr->toLatin1()->get();

$testInt = new \openWebX\Variables\Variable_Integer(17);

echo $testInt->sqrt()->get();