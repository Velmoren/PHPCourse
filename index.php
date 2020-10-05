<?php

class Product
{
    static $companyName = 'Мороженко_и_Ко';
    const YEAR_START = '1987г';

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

    public function showImage()
    {
        echo
        "<div style='display:flex; flex-direction: column; align-items: center; justify-content: space-between; background: url({$this->img}) no-repeat center/100%;width: {$this->width}px;height: {$this->height}px;border: 1px solid black;margin-bottom: 20px'>
          <h2 style='text-align: center; margin: 0;'>{$this->title}</h2>
        </div>";
    }
}




$choco = new Product('Choco', 200, 200,'choco.png');
$choco->showImage();
echo Product::$companyName . " " . Product::YEAR_START;


