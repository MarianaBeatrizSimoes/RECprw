<?php
$dd = date("w");
switch($dd) {
    case"0": $dia_semana = "domingo"; break;

    case"1": $dia_semana = "segunda-feira"; break;

    case"2": $dia_semana = "terça-feira"; break;

    case"3": $dia_semana = "quarta-feira"; break;

    case"4": $dia_semana = "quinta-feira"; break;

    case"5": $dia_semana = "sexta-feira"; break;

    case"6": $dia_semana = "sábado"; break;
}
echo "Hoje é $dia_semana";
?>