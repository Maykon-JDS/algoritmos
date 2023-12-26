<?php 

declare(strict_types=1);

use Quicksort\Item;

use Quicksort\Category;

use PHPUnit\Framework\TestCase;

final class ItemTest extends TestCase{


    public function testGetName(): void {

        $item = new Item("Dunuts", 10.00, Category::Sweets);

        $this->assertSame('Dunuts', $item->getName());

    }

    public function testGetValue(): void{

        $item = new Item("Dunuts", 10.00, Category::Sweets);

        $this->assertEquals(10.00, $item->getPrice());

    }

    public function testGetCategory(): void{

        $item = new Item("Dunuts", 10.00, Category::Sweets);

        $this->assertTrue($item->getCategory() instanceof Category);

    }

}

?>