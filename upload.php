<?php
require_once 'inc/config.inc.php';
if(isset($_POST['title'])){
  $data = array();
  $data['title'] = $_POST['title'];
  $data['description'] = $_POST['description'];
  $data['text'] = $_POST['text'];
  $data['bid'] = $_POST['blog_id'];
  $statement = $pdo->prepare("INSERT INTO articles (title, description, text, blog_id) VALUES (:title, :description, :text, :bid)");
  $statement->execute($data);
  header("Location:index.php?msg=1");
}
else{header("Location:index.php?msg=2");}
 ?>
