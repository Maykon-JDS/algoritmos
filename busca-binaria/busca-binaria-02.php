<?php 

/**
 * Se achar o valor retorna seu index
 */
function buscaBinaria(array $arr, $valor)
{
    $idxInferior = 0;
    $idxSuperior = count($arr) - 1; 

    while($idxInferior <= $idxSuperior)
    {
        $idxMedia = round(($idxInferior + $idxSuperior) / 2);
        $chute = $arr[$idxMedia];

        if($chute == $valor){
            return $idxMedia;
        }else if($chute < $valor){
            $idxInferior = $idxMedia + 1;
        }else if($chute > $valor){
            $idxSuperior = $idxMedia - 1;
        }
    }

    return "Não há {$valor}";

}


$array = [1,2,3,4,5,6,7,8,9];
$int = 1;

echo buscaBinaria($array, 1);

?>