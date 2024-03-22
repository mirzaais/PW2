<?php

require_once 'class_kendaraan.php';

$motor = new motor ('motor', 'bensin',2);
$submarine = new submarine ('submarine', 'solar',1000);

echo 'info motor :<br>';
$motor->getinfomotor();
echo '<br>';

echo 'info kapal selam :<br>';
$submarine->getinfosubmarine();
echo '<br>';

?>