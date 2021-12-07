<?php
session_start();
?>
<?php 

  include 'config.php';
  // include 'idusession.php';

  $image = addslashes($_FILES['image']['name']);
  $titre = addslashes($_POST['titre']);
  $texteocr = addslashes($_POST['textOcr']);
  $email = addslashes($_POST['email']);
  $datesave = $_POST['datecreation'];


  $imagePath = "imagess/".$image;
//   `ocr`(`id`, `image`, `texte`, `titre`, `date`
  move_uploaded_file($_FILES['image']['tmp_name'],$imagePath);
  $sql = "INSERT INTO `ocr` (`image`, `texte`, `titre`, `email`, `datesave`) VALUES ('$image','$texteocr','$titre','$email','$datesave')";
  $connect->query($sql);


?>