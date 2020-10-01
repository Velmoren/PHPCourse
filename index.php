<?php

class Article
{
    public $title;
    public $titleFontSize;
    public $articleBody;
    public $articleBodyFontSize;
    public $border;
    public $bg;

    public function __construct($title, $titleFontSize, $articleBody, $articleBodyFontSize, $border, $bg)
    {
        $this->title = $title;
        $this->titleFontSize = $titleFontSize;
        $this->articleBody = $articleBody;
        $this->articleBodyFontSize = $articleBodyFontSize;
        $this->border = $border;
        $this->bg = $bg;
    }

    public function printArticle()
    {
        echo
        "<div style='border: {$this->border}; background: {$this->bg}; font-size: {$this->articleBodyFontSize}px'>
          <h2 style='font-size: {$this->titleFontSize}px'>{$this->title}</h2>
          <span>{$this->articleBody}</span>
        </div>";
    }

}

$sportsNews = new Article('Привет, Мир!', 20, 'Lorem Lorem', 14, '2px solid black', 'red');
$sportsNews->printArticle();
