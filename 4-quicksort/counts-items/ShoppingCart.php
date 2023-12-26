<?php 

namespace Quicksort;

use Quicksort\Item;

class ShoppingCart {

    protected array $items;

    public function getItems(): array|null
    {

        return $this->items ?? null;

    }

    public function setItems(Item $item): void
    {

       $this->items[] = $item;

    }

    public function getSubTotal(): float
    {
        
        $subtotal = 0;

        foreach($this->items as $item){

            $subtotal += $item->getPrice();

        }

        return $subtotal;

    }

}


?>