<?php

class Product
{
    public $title;
    public $price;
    public $weight;

    public function __construct($title, $price, $weight)
    {
        $this->title = $title;
        $this->price = $price;
        $this->weight = $weight;
    }

    public function printArticle()
    {
        echo
        "<div style='width: 200px;height: 200px;border: 1px solid black;margin-bottom: 20px'>
          <h2 style='text-align: center'>{$this->title}</h2>
          <h3 style='text-align: center'>{$this->price} руб.</h3>
          <h3 style='text-align: center'>{$this->weight} грамм.</h3>
        </div>";
    }

}

$productItem = new Product('Болт', 20, '60');
$productItem->printArticle();

$productItem = new Product('Винт', 30, '100');
$productItem->printArticle();

$productItem = new Product('Шпунт', 40, '120');
$productItem->printArticle();
