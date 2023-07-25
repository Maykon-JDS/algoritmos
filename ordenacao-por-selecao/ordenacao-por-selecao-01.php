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
        
        
        echo count($arr), "\n";
        
        
        $menor = buscaMenor($arr);
        
        echo "index: ", $menor, "\n";
        
        $novoArr[] = $arr[$menor];
        
        echo "Novo array: ";
        var_dump($novoArr);
        echo "\n";
        
        unset($arr[$menor]);

        $arr = array_values($arr); 

        var_dump($arr);

        
    }
    
    return $novoArr;
}

$array = [9,2,3,4];

$newArray = ordenacaoPorSelecao($array);


?>