<?php

require_once 'class_moo.php';

$sapi = new Sapi ('sapi', 'rumput','moooooooo....');
$Ikan = new Ikan ('ikan cupang', 'cacing sutra','violet');

echo 'info hewan :<br>';
$sapi->getinfosapi();
echo '<br>';

echo 'info hewan :<br>';
$Ikan->getinfoikan();
echo '<br>';

?>