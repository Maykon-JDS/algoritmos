<?php 

namespace Calculadora;

use Interface\Calculadora as CalculadoraI;

require_once "Calculadora.interface.php";

class Calculadora implements CalculadoraI {

    public function somarLista(array $lista) : int
    {
        $resultado = 0;

        foreach($lista as $valor){

            $resultado += $valor;
        
        }

        return $resultado;
        
    }

}


?>