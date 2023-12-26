<?php 

declare(strict_types=1);

use Quicksort\Item;

use Quicksort\Category;

use Quicksort\ShoppingCart;

use PHPUnit\Framework\TestCase;

final class ShoppingCartTest extends TestCase{

    public function testGetItemsIsEmpty(): void
    {

        $shoppingCart = new ShoppingCart();

        $this->assertEmpty($shoppingCart->getItems());
        
    }

    public function testSetItems(): void
    {

        $shoppingCart = new ShoppingCart();

        $kiwi = new Item("Kiwi", 2.30, Category::Fruits);

        $banana = new Item("banana", 3.50, Category::Fruits);

        $shoppingCart->setItems($kiwi);

        $shoppingCart->setItems($banana);

        $this->assertCount(2, $shoppingCart->getItems());

        $this->assertSame($kiwi, $shoppingCart->getItems()[0]);

        $this->assertSame($banana, $shoppingCart->getItems()[1]);
        
    }

    public function testGetItems(): void
    {

        $shoppingCart = new ShoppingCart();

        $item1 = new Item("Chocolate Donuts", 10.00, Category::Sweets);

        $item2 = new Item("Chocolate Donuts", 10.00, Category::Sweets);

        $item3 = new Item("Donuts", 8.00, Category::Sweets);

        $shoppingCart->setItems($item1);

        $shoppingCart->setItems($item2);
        
        $shoppingCart->setItems($item3);

        $this->assertIsArray($shoppingCart->getItems());

        $this->assertCount(3, $shoppingCart->getItems());
        
        $this->assertSame($item1, $shoppingCart->getItems()[0]);
        
        $this->assertSame($item2, $shoppingCart->getItems()[1]);

        $this->assertSame($item3, $shoppingCart->getItems()[2]);

    }

}

?>