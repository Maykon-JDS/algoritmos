<?php 

namespace Calculadora;

use Decorator\CalculadoraDecorator;
use SebastianBergmann\Environment\Console;

require_once "CalculadoraDecorator.abstract.php";

class CalculadoraRecursivaDecorator extends CalculadoraDecorator{

    public function somarLista(array $lista, int $total = 0) : int
    {

        if(empty($lista)){
            
            return $total;
            
        }

        $valor = array_pop($lista);

        $total += $valor;

        return $this->somarLista($lista, $total);

    }
    
}


?>