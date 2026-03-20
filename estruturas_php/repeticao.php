<?php 

for($i=0; $i < 5; $i++){
    echo $i;
}

$array_numeros = [3,4,5,6,7,9,2];

for($i=0; $i < count($array_numeros); $i++){
    echo $array_numeros[$i]."\n";
}

foreach($array_numeros as $indice => $value){

    if($value == 2){
        echo "value 2 \n";
        break;
    }

    if($value % 2 == 0){
        echo $value." é par\n";
    }
    echo "indice = ".$indice." valor = ".$value."\n";
}

$frutas = ['laranja', 'manga', 'uva'];

$contador = count($frutas);

$i = 0;

while($i < $contador){
    echo $frutas[$i]."\n";
    $i++;
}

do{
    if($frutas[$i] == "pera"){
        break;
    }

    echo $frutas[$i]."\n";
    $i++;
} while ($i < $contador);

?>