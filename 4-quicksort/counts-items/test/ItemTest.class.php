<?php 

declare(strict_types=1);

use ShoppingCart\Item;


require_once "D:\Meus Projetos\algoritmos\\4-quicksort\counts-items\Item.class.php";
require_once "D:\Meus Projetos\algoritmos\\4-quicksort\counts-items\Item.class.php";

final class ItemTest extends PHPUnit\Framework\TestCase{


    public function testGetName(): void {

        $Item = new Item("Dunuts", 10.00);

        $this->assertSame('Dunuts', $Item->getName());

        

    }

    public function testGetValue(): void{

    }

    
}


?>