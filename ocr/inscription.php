<?php
session_start();
?>

<?php 

  include 'connexionadmin.php';

  if (isset($_POST['ajouter'])) {
  $nom = addslashes($_POST['nom']);
  $prenom = addslashes($_POST['prenom']);
  $email = addslashes($_POST['email']);
  $telephone = addslashes($_POST['telephone']);
  $motdepasse = addslashes($_POST['motdepasse']);
  
  //check user
  $check = "SELECT * FROM inscription WHERE email ='$email'";
  $result = mysqli_query($conn, $check);
  $nombre = mysqli_num_rows($result);

  if ($nombre == 0) {
  $sql = "INSERT INTO `inscription` (`nom`, `prenom`, `email`, `telephone`, `motdepasse`, `datepub`) VALUES ('$nom','$prenom','$email','$telephone','$motdepasse','$datetime')";
  $conn->query($sql);
  header('Location: users.php');
  } else {
      echo "echec d'enregistrement";
      // header('Location: users.php';
  }
}

?>