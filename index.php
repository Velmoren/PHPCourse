<?php

abstract class Product
{
    public $title;
    public $width;
    public $height;
    public $img;

    public function __construct(string $title, int $width, int $height, string $img)
    {
        $this->title = $title;
        $this->width = $width;
        $this->height = $height;
        $this->img = $img;
    }

    abstract public function showImage();
}

class Chocolate extends Product
{
    public $cal;

    public function __construct(string $title, int $width, int $height, string $img, int $cal)
    {
        $this->cal = $cal;
        parent::__construct($title, $width, $height, $img);
    }

    public function showImage()
    {
        echo
        "<div style='display:flex; flex-direction: column; align-items: center; justify-content: space-between; background: url({$this->img}) no-repeat center/100%;width: {$this->width}px;height: {$this->height}px;border: 1px solid black;margin-bottom: 20px'>
          <h2 style='text-align: center; margin: 0;'>{$this->title}</h2>
          <h3 style='text-align: center; margin: 0;'>{$this->cal} ККАЛ</h3>
        </div>";
    }
}

//class Candy extends Product
//{
//    public function __construct(string $title, int $width, int $height, string $img)
//    {
//        parent::__construct($title, $width, $height, $img);
//    }
//}

$choco = new Chocolate('Choco', 200, 200,'choco.png', 120);
$choco->showImage();

//$cand = new Candy('Konfeta', 200, 200,'konfeta.png');

