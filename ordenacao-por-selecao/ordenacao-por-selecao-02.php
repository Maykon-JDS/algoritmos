<?php 

function ordenacaoPorSelecao(array $arr) : array
{
    $qtdArray = count($arr);
    

    for($i = 1; $i < count($arr); $i++)
    {
        $menor = &$arr[$i - 1];
        if($arr[$i] < $menor)
        {
            $temp = $arr[$i]; //2
            $arr[$i] = $menor; //
            $menor = $temp;
        }

    }
    
    return $arr;
}

$array = [8,9,3,4];

var_dump($newArray = ordenacaoPorSelecao($array));


?>