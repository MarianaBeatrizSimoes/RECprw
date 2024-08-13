<?php
$str = "Amo Hello Kitty";
$tamanho = strlen($str);
$str= strtoupper($str)."<br>"; /*função strtoupper retorna string em letra maiuscula*/
for($i=0;$i<$tamanho;$i++){
    /*echo "O valor na posição $i = $str[$i]\n";*/
    if(($str[$i] == "A") || ($str[$i] == "E") || ($str[$i] == "I") || ($str[$i] == "O") || ($str[$i] == "U")){
        echo $str[$i] = "X";
    
    }
}
echo $str;
?>