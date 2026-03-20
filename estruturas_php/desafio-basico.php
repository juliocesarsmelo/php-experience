<?php
$numero = 3;

$soma = 0;

for($i = 1; $i <= $numero; $i++){
    if($i % 3 != 0){
        $soma += $i;
    }
}

echo"Soma dos números de 1 a $numero, exceto os divisíveis por 3: $soma";

?>