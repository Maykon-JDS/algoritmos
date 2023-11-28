<?php 

namespace Calculadora;

class Calculadora {
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