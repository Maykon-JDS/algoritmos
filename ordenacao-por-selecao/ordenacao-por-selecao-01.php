<?php 

function buscaMenor(array $arr) : int
{
    
    $menor = $arr[0];
    $menorIndice = 0;

    for($i = 1; $i < count($arr); $i++)
    {

        if($arr[$i] < $menor)
        {
            $menor = $arr[$i];
            $menorIndice = $i;
        }

    }

    return $menorIndice;
}

function ordenacaoPorSelecao(array $arr) : array
{
    $novoArr = [];
    $qtdArray = count($arr);

    for($i = 0; $i < $qtdArray; $i++){
        
        
        $menor = buscaMenor($arr);
        
        $novoArr[] = $arr[$menor];
        
        unset($arr[$menor]);

        $arr = array_values($arr); 

    }
    
    return $novoArr;
}

$array = [9,1,3,7];

$newArray = ordenacaoPorSelecao($array);

var_dump($newArray);

?>