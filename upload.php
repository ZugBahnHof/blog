<?php
include 'inc/config.inc.php';
if(isset($_POST['title'])){
  $data = array();
  $data['title'] = $_POST['title'];
  $data['description'] = $_POST['description'];
  $data['text'] = $_POST['text'];
  $statement = $pdo->prepare("INSERT INTO articles (title, description, text) VALUES (:title, :description, :text)");
  $statement->execute($data);
  header("Location:index.php?msg=1");
}
else{header("Location:index.php?msg=2");}
 ?>
