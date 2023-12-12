<?php 

use Calculadora\Calculadora;
use Calculadora\CalculadoraRecursivaDecorator;
use Interface\Calculadora as CalculadoraI;
use SebastianBergmann\Complexity\Calculator;

require_once "D:\Meus Projetos\algoritmos\\4-quicksort\somar-lista\Calculadora.class.php";
require_once "D:\Meus Projetos\algoritmos\\4-quicksort\somar-lista\CalculadoraRecursivaDecorator.class.php";

class TestCalculadora {

    public function testSomarLista(CalculadoraI $calculadora, array $lista, int $valorEsperado) : string 
    {

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

$calculadora = new Calculadora();

$calculadoraRecursiva = new CalculadoraRecursivaDecorator($calculadora);

echo $testCalculadora->testSomarLista($calculadora, [1,2,3,4] ,10) . "\n";
echo $testCalculadora->testSomarLista($calculadora, [1,2,3,4] ,11) . "\n";
echo $testCalculadora->testSomarLista($calculadora, [1,2,3,4] ,12) . "\n";

echo $testCalculadora->testSomarLista($calculadoraRecursiva, [1,2,3,4] ,10) . "\n";
echo $testCalculadora->testSomarLista($calculadoraRecursiva, [1,2,3,4] ,10) . "\n";
echo $testCalculadora->testSomarLista($calculadoraRecursiva, [1,2,3,4] ,12) . "\n";



?>