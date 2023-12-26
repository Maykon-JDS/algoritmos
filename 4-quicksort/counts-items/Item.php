<?php 

namespace Quicksort;

enum Category{
    
    case Fruits;

    case Vegetables;

    case GrainsAndCereals;

    case Proteins;

    case DairyProducts;

    case Sweets;

}

class Item{

    protected string $name;

    protected float $price;

    protected Category $category;

    public function __construct(string $name, float $price, Category $category) {

        $this->name = $name;

        $this->price = $price;

        $this->category = $category;

    }

    public function getName() : string{

        return $this->name;

    }

    public function getPrice() : float{

        return $this->price;

    }

    public function getCategory() : Category{

        return $this->category;

    }

}

?>