<?php
$data = date("m-d-Y");
$dia = substr($data,3,2);
$mes = substr($data,0,2);
$ano = substr($data,6,4);
echo "O dia é $dia"."<br>";
echo "O mês é $mes"."<br>";
echo "O ano é $ano"."<br>";
?>