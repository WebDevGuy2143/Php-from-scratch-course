<?php
// interface is a blueprint for a class
interface ContentInterface {
  // interface methods
  public function display();
  public function edit();
}

// class implements interface
class Article implements ContentInterface {

  // class properties
  private $title;
  private $content;

  // class constructor
  public function __construct($title, $content) {
    $this->title = $title;
    $this->content = $content;
  }

  // interface method display which will be implemented in Article class
  public function display() {

    // access class properties to display on the page
    echo "<h1>{$this->title}</h1>";
    echo "<p>{$this->content}</p>";
  }

  // interface method edit which will be implemented in Article class
  public function edit() {

    // access class properties to display on the page
    echo "Editing article: {$this->title}";
  }
}

class Video implements ContentInterface {

  // class properties
  private $title;
  private $url;

  // class constructor
  public function __construct($title, $url) {
    $this->title = $title;
    $this->url = $url;
  }

  // interface method display which will be implemented in Video class
  public function display() {
    echo "<h1>{$this->title}</h1>";
    echo "<video src='{$this->url}' controls></video>";
    // echo "<iframe width='560' height='315' src='{$this->url}' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
  }

  // interface method edit which will be implemented in Video class
  public function edit() {
    echo "Editing video: {$this->title}";
  }
}

// create objects of Article and Video classes and pass arguments
$article = new Article('Introduction to PHP', 'Php is a versitle programming language.');
$video = new Video('Php for Beginners', 'https://www.youtube.com/watch?v=BUCiSSyIGGU');



?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <!-- Output -->

      <!-- pass object to display method and display content -->
       <?= $article->display(); ?>
    </div>
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <!-- Output -->
       
      <!-- pass object to display method and display content -->
       <?= $video->display(); ?>
    </div>
  </div>
</body>

</html>