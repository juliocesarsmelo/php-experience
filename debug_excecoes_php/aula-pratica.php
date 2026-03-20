<?php 

function divisao($dividendo, $divisor){

    try{
        if($divisor == 0){
            throw new RangeException("Número não pode ser dividido por zero \n");
        }

        $resultado = $dividendo/$divisor;
        
        echo "O resultado é: ".$resultado."\n";
    }catch(Exception $e){
        echo $e->getMessage();
    }finally{
        echo "Tratando exceções";
    }
}
divisao(10,2);
?>