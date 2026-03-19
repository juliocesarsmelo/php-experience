<?php 

    if(1 == 1){
        echo "Verdadeiro";
    }else if(1 == 2){
        echo "Falso";
    }else{
        echo "Final";
    }

    $sorteio = rand(0,4);
    switch($sorteio){
        case 1:
            echo "1";
            break;
        case 2:
            echo "2";
            break;
        case 3:
            echo "3";
            break;
        default:
            echo "Default";
    }

?>