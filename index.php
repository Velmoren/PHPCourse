<?php

class Product
{
    public $title;
    public $price;
    public $weight;
    public $nds;

    public function __construct($title, $price, $weight, $nds)
    {
        is_string($title) ? $this->title = $title : NULL;
        is_int($price) ? $this->price = $price : NULL;
        is_int($weight) ? $this->weight = $weight : NULL;
        is_int($nds) ? $this->nds = $nds : NULL;
    }

    public function printPrice()
    {
        return $this->price;
    }

    public function printNDSPrice()
    {
        return $this->printPrice() - $this->nds;
    }

    public function printArticle()
    {
        echo
        "<div style='width: 200px;height: 200px;border: 1px solid black;margin-bottom: 20px'>
          <h2 style='text-align: center'>{$this->title}</h2>
          <h3 style='text-align: center'>{$this->printPrice()} руб.</h3>
          <h3 style='text-align: center'>{$this->printNDSPrice()} руб. без НДС</h3>
          <h3 style='text-align: center'>{$this->weight} грамм.</h3>
        </div>";
    }
}

$productItem = new Product('Болт', 20, 60, 10);
$productItem->printArticle();

$productItem = new Product('Винт', 30, 100, 12);
$productItem->printArticle();

$productItem = new Product('Шпунт', 40, 120, 7);
$productItem->printArticle();
