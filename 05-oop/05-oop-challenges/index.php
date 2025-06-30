<?php

class Article{
  public $title;
  public $content;
  private $published = false;

  public function __construct($title, $content)
  {
    $this->title = $title;
    $this->content = $content;
  }

  public function publish(){
    $this->published = true;
  }

  public function isPublished(){
    return $this->published;
  }
}

$article1 = new Article('My First Article Post', 'This is the content of my first article post.');
$article2 = new Article('My Second Article Post', 'This is the content of my second article post.');

$article1->publish();

var_dump($article1);
// var_dump($article2);