<?php

abstract class Product
{
    public $title;
    public $width;
    public $height;

    public function __construct(string $title, int $width, int $height)
    {
        $this->title = $title;
        $this->width = $width;
        $this->height = $height;
    }

    public function showImage()
    {
        echo "<div style='width: {$this->width}px;height: {$this->height}px;border: 1px solid black;margin-bottom: 20px'>
          <h2 style='text-align: center'>{$this->title}</h2>
        </div>";
    }
}

class Chocolate extends Product
{
    public $cal;

    public function __construct(string $title, int $width, int $height, int $cal)
    {
        $this->cal = $cal;
        parent::__construct( $title,  $width,  $height);
    }

    public function showImage()
    {
        echo
        "<div style='display:flex; flex-direction: column; align-items: center; justify-content: space-between; background: url(choco.png) no-repeat center/100%;width: {$this->width}px;height: {$this->height}px;border: 1px solid black;margin-bottom: 20px'>
          <h2 style='text-align: center; margin: 0;'>{$this->title}</h2>
          <h3 style='text-align: center; margin: 0;'>{$this->cal} ККАЛ</h3>
        </div>";
    }

}

class Candy extends Product
{
    public function __construct(string $title, int $width, int $height)
    {
        parent::__construct( $title,  $width,  $height);
    }

    public function showImage()
    {
        echo
        "<div style='background: url(konfeta.png) no-repeat center/100%;width:{$this->width}px;height: {$this->height}px;border: 1px solid black;margin-bottom: 20px'>
          <h2 style='text-align: center; margin: 0;'>{$this->title}</h2>
        </div>";
    }
}

$choco = new Chocolate('Konfeta', 200, 200, 120);
$choco->showImage();

$cand = new Candy('Konfeta', 200, 200);
$cand->showImage();

