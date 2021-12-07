<?php
// Start the session
// ob_start();
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login - Vali Admin</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>OCR</h1>
      </div>
      <div class="login-box">
        <form class="login-form" action="" method="post">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>CONNEXION</h3>
          <div class="form-group">
            <label class="control-label">Nom d'utilisateur</label>
            <input class="form-control" type="text" placeholder="Email" name="email" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">Mot de passe</label>
            <input class="form-control" type="password" name="motdepasse" placeholder="mot de passe">
          </div>
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                <!-- <label>
                  <input type="checkbox"><span class="label-text">Stay Signed in</span>
                </label> -->
              </div>
              <!-- <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Forgot Password ?</a></p> -->
            </div>
          </div>
          <div class="form-group btn-container">
            <button type="submit" name="login" class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
          </div>
        <!-- </form>
        <form class="forget-form" action="index.html">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Forgot Password ?</h3>
          <div class="form-group">
            <label class="control-label">EMAIL</label>
            <input class="form-control" type="text" placeholder="Email">
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET</button>
          </div>
          <div class="form-group mt-3">
            <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
          </div>
        </form> -->
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>
    <?php
 include 'connexion.php';

//login
  if (isset($_POST['login'])) {
    $email = addslashes($_POST['email']);
    $motdepasse = addslashes($_POST['motdepasse']);

    //check user
    $check = "SELECT * FROM inscription WHERE email ='$email' AND motdepasse = '$motdepasse' ";
    $result = mysqli_query($conn, $check);
    $nombre = mysqli_num_rows($result);
    //a = 2
    //si a = 0 display 5 sinon display 4

    if ($nombre == 1) {
      //aller à la page 
      $row = mysqli_fetch_assoc($result);
      $id = $row['id'];
     //Création de la session
    $_SESSION["id"] = $id;
      header('Location: home.php');
  } else {
      //afficher message d'erreure
      echo "mot de passe eronné";
    }
  }


  //fin login
  mysqli_close($conn);
  ?>
  </body>
</html>