<?php
    $array = [0,1,2,3,4,5,6,7,8,9];
    $int = 1;

    echo buscaBinaria($array, 4);

    function buscaBinaria(array $array, int $valor){
        $tamanhoArray = count($array);
        $baixo = 0;
        $alto =  $tamanhoArray - 1;

        for($i = 0; $i < $tamanhoArray; $i++){
            $meio = round(($alto + $baixo)/2, 0, PHP_ROUND_HALF_DOWN);


            if($meio == $valor){
                return $valor;
            }else if($meio < $valor){
                $baixo = $meio + 1;
            }else if($meio > $valor){
                $alto = $meio - 1;
            }
        }
        return "Não há {$valor}";
    }
?>