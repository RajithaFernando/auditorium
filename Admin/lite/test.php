<?php

date_default_timezone_set('Asia/Colombo');


$day   = date('d');
$month = date('m');
$year  = date('y');
$hour = date('H');
$min = date('i');
$sec = date('s');

$refCode = $year.$month.$day.$hour.$min.$sec;
settype($refCode, "integer");
echo $refCode;

$refCode = $refCode + 1;
echo '      ';
echo '      ';
echo '      ';
echo $refCode;

for($i = 0; $i<2555 ; $i++){
    echo $i;
}
echo '      ';
echo '      ';
echo '      ';
echo $refCode;

?>