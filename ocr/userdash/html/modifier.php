<?php
// Start the session
ob_start();
session_start();
include 'connexion.php';
include 'session.php';
?>
<!doctype html>
<html lang="fr">

<head>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600|Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="../css/spur.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
    <script src="../js/chart-js-config.js"></script>
    <title>Spur - A Bootstrap Admin Template</title>
    <style>
        .bg-indigo{
            background-color: #181F2C;
        }
        .text-indigo{
            color: #4b0082;
        }
        .search-class{
            display: none;
        }
        .cursor{
            cursor: pointer;
        }
        .btn:focus {
            box-shadow: none;
        }
        .list-group-item a{
            color: white;
        }
        /* .list-group-item:hover{
            background-color: white;
        } */
        /* .list-group-item:hover .nav-link{
            color: indigo;
        } */
    

    </style>
</head>

<body>
    <div class="dash">
        <div class="dash-nav dash-nav-dark"><br>
            <header>
                <li class="list-group-item bg-indigo "><a href="#" class="nav-link  text-center">
                    <!-- <img src="assets/image2.jpg" class="shadow" style="height: 80px; width: 80px;border-radius: 50%;"> -->
                   
                    <div class="small" style="font-size:54%;"><em><?php echo $prenom.' '.$nom;?></em></div>
                </a></li>
                <!-- <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                <a href="index.html" class="spur-logo"><i class="fas fa-bolt"></i> <span>Spur</span></a> -->
            </header><br><br><br><br>
            <nav class="dash-nav-list">
                <a href="home.php" class="dash-nav-item">
                    <i class="fas fa-home"></i> Dashboard </a>
                    <a href="search.php" class="dash-nav-item">
                    <i class="fas fa-search"></i> Rechercher </a>
                
                
                
            </nav>
        </div>
        <div class="dash-app">
            <header class="dash-toolbar">
                <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                <a href="#!" class="searchbox-toggle">
                    <i class="fas fa-search"></i>
                </a>
                <!-- <form class="searchbox" action="#!">
                    <a href="#!" class="searchbox-toggle"> <i class="fas fa-arrow-left"></i> </a>
                    <button type="submit" class="searchbox-submit"> <i class="fas fa-search"></i> </button>
                    <input type="text" class="searchbox-input" placeholder="type to search">
                </form> -->
                <div class="tools">
                <em><?php echo $prenom.' '.$nom;?></em>
                    <div class="dropdown tools-item">
                        <a href="#" class="" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                            <a class="dropdown-item" href="#!">Profile</a>
                            <a class="dropdown-item" href="logout.php">Déconnexion</a>
                        </div>
                    </div>
                </div>
            </header>
            
            <div class="container">
            <!DOCTYPE html>
<html>
<head>
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 700px;
  margin: auto;
  text-align: justify;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button1 {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: red;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}

.row {
  display: flex;
}

/* Create two equal columns that sits next to each other */
.column {
  flex: 50%;
  padding: 10px;

}

</style>
</head>
<body>
            <?php
        //check user
                $check = "SELECT * FROM ocr WHERE idsave='" . $_GET["idsave"] . "'";
                $result = mysqli_query($conn, $check);
                $nombre = mysqli_num_rows($result);

            if ($nombre == 1) {
                
                $row = mysqli_fetch_assoc($result);
                
                ?>

<div class="row">
<div class="card">
<div class="column">
  
  <img src="/ocr/imagess/<?php echo $row["image"] ;?> " width="350" height="350">
</div>
</div>
<div class="card" style="overflow:scroll; height:400px;">
  <div class="column" >
      
  <h1 align="center"><?php echo $row["titre"] ;?></h1>
  <p><?php echo $row["texte"] ;?></p>
  <!-- <p><a href="delete.php?idsave=<?php echo $row["idsave"]; ?>"><button>Supprimer</button></a></p> -->
  <div align="center">

  </div>
</div>

</div>
<style>
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 6px 10px;
  border: none;
  /* border-radius: 4px; */
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* .container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
} */
</style>

<div class="container"><br>
  <form action="" method="POST">
    <b><label for="fname">Titre</label></b>
    <input type="text" id="fname" name="titre" value="<?php echo $row["titre"] ;?>">
    <div>
     <textarea name="editordata" id="summernote" ><?php echo $row["texte"] ?></textarea>
</div>

<div id="summernote"></div>
    <script>
      $('#summernote').summernote({
        
             // set focus to editable area after initializing summernote

        placeholder: 'Hello stand alone ui',
        tabsize: 40,
        height: 100,
        width: 1110,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
        ]
      });
    </script><br>
    <div align="center">
    <input type="submit" name="update" value="Mettre à jour">
    <a href="delete.php?idsave=<?php echo $row["idsave"]; ?>"><button type="button" class="btn btn-danger">Supprimer</button></a>
</div>
    </form>

</div>
<?php 
       //edition
       if (isset($_POST['update'])) {
           //collecte information

    $titre = addslashes($_POST['titre']);
    $editordata = addslashes($_POST['editordata']);
    // $prenom = addslashes($_POST['prenom']);
     echo  $_GET["idsave"];

    

    $sql = "UPDATE ocr SET titre='$titre', texte='$editordata'  WHERE idsave='" . $_GET["idsave"] . "'";  
    
    if (mysqli_query($conn, $sql)) {
        // echo "Record updated successfully";
        header('Location: home.php');
      } else {
        echo "Error updating record: " . mysqli_error($conn);
      }
      

       }
       ?>
<?php              
    }               
    mysqli_close($conn);                
?>
</div> 
 </p>
 </div>

           
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="../js/spur.js"></script>
</body>

</html>
