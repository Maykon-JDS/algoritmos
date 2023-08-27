<?php

// Dados de exemplo para LPA e Cotação
$lpa = array(-0.55, 4.66, 5.51, 3.02, 4.28, 5.26, 6.25, 4.37, 6.17, 10.42, 11.10);
$cotacao = array(42.97, 35.67 , 31.43 , 35.40 , 49.24 , 36.00 , 31.58 , 20.65 , 20.94 , 25.51 , 24.60);



// Função para calcular a correlação
function calcularCorrelacao($x, $y) {
    $n = count($x);
    
    $sumX = array_sum($x);
    $sumY = array_sum($y);
    
    $sumXY = 0;
    for ($i = 0; $i < $n; $i++) {
        $sumXY += $x[$i] * $y[$i];
    }
    
    $sumXSquare = 0;
    $sumYSquare = 0;
    
    for ($i = 0; $i < $n; $i++) {
        $sumXSquare += $x[$i] * $x[$i];
        $sumYSquare += $y[$i] * $y[$i];
    }
    
    $correlacao = ($n * $sumXY - $sumX * $sumY) / sqrt(($n * $sumXSquare - $sumX * $sumX) * ($n * $sumYSquare - $sumY * $sumY));
    
    return $correlacao;
}

// Calcular a correlação
$correlacao = calcularCorrelacao($lpa, $cotacao);

// Exibir o resultado
printf("A correlação entre LPA e Cotação é: " . round($correlacao, 4));

?>