<?php 

use Calculadora\Calculadora;

require_once "busca-binaria\somar-lista\Calculadora.class.php";

class TestCalculadora {

    public function testSomarLista(array $lista, int $valorEsperado) : string 
    {

        $calculadora = new Calculadora();

        $resultado = $calculadora->somarLista($lista);

        $mensagem = "Teste não passou!";

        if($resultado == $valorEsperado){

            $mensagem = "Teste passou!";

            return $mensagem;

        }
        
        return $mensagem;

    }

}


$testCalculadora = new TestCalculadora();

echo $testCalculadora->testSomarLista([1,2,3,4],10) . "\n";
echo $testCalculadora->testSomarLista([1,2,3,4],11) . "\n";
echo $testCalculadora->testSomarLista([1,2,3,4],12) . "\n";

?>