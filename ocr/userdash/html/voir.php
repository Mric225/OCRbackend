<?php
// Start the session
// ob_start();
session_start();
include 'connexion.php';
include 'session.php';
?>
<!doctype html>
<html lang="fr">

<head>
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
                    <!-- <a href="https://github.com/HackerThemes/spur-template" target="_blank" class="tools-item">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="#!" class="tools-item">
                        <i class="fasa fa-bell"></i>
                        <i class="tools-item-count">4</i>
                    </a> -->
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
  background-color: orange;
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
  
  <img src="/ocr/imagess/<?php echo $row["image"] ;?> " width="410" height="410">
</div>
</div>
<div class="card" style="overflow:scroll; height:500px;">
  <div class="column" >
      
  <h1 align="center"><b>Titre :</b> <?php echo $row["titre"] ;?></h1>
  <p><?php echo $row["texte"] ;?></p>
  <p class="price">Scanné le : <?php echo $row["datesave"] ;?></p>





        <div align="center">

        <a href="modifier.php?idsave=<?php echo $row["idsave"]; ?>"><button type="button" class="btn btn-warning">Modifier</button></a>
        
        <a href="delete.php?idsave=<?php echo $row["idsave"]; ?>"><button type="button" class="btn btn-danger">Supprimer</button></a>

</div>
  
</div>

</div>
</div>

<?php              
    }               
    mysqli_close($conn);                
?>
                
              </div>



        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="../js/spur.js"></script>
</body>

</html>