<?php 



function buscaBinaria(array $arr, int $valor) : int | string 
{

    $tamanhoArray = count($arr);
    $idxBaixo = 0;
    $idxAlto = $tamanhoArray - 1;

    while($idxBaixo <= $idxAlto){
        $idxMeio = round((($idxAlto + $idxBaixo)/2), 0, PHP_ROUND_HALF_DOWN);
        $chute = $arr[$idxMeio];

        if($chute == $valor)
        {
            return $idxMeio;
        }
        else if($chute < $valor)
        {
            $idxBaixo = $idxMeio + 1;
        }
        elseif ($chute > $valor)
        {
            $idxAlto = $idxMeio - 1;
            
        }

    }

    return "Não há o valor \"$valor\" no array pesquisado!";
}

$array = [0,1,2,3,4,5,6,7,8,9];
$int = 1;

echo buscaBinaria($array, 10); 

?>