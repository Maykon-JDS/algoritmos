<?php

function buscaBinariaRecursiva(array $array, int $inicio, int $fim, int $valor){

    $metade = round(($inicio + $fim) / 2, 0, PHP_ROUND_HALF_DOWN);

    if($inicio > $fim){
        return "Não encontrado";
    }

    if($array[$metade] == $valor){
        return $metade;
    }else if($array[$metade] < $valor){
        return buscaBinariaRecursiva($array, $metade + 1, $fim, $valor);
    }else if($array[$metade] > $valor){
        return buscaBinariaRecursiva($array, $inicio, $metade - 1, $valor);
    }

    
}


$array = [1,2,3,4,5];

echo buscaBinariaRecursiva($array, 0, 4, 10);


?>