<?php 

$string = "string";
$inteiro = 100;
$float = 100.50;
$boolean = true;

// $date("d/m/y");
// $date("D/M/Y");
// $time("H:i:s");

date_default_timezone_set('America/Sao_Paulo');
echo date("d/m/Y H:i:s");

?>