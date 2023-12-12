<?php 

namespace Decorator;

use Interface\Calculadora as CalculadoraI;

require_once "Calculadora.interface.php";

abstract class CalculadoraDecorator implements CalculadoraI {

    protected CalculadoraI $calculadora;

    public function __construct(CalculadoraI $calculadora) {

        $this->calculadora = $calculadora;
    
    }

    public function somarLista(array $lista) : int
    {

       return $this->calculadora->somarLista($lista);

    }

}


?>