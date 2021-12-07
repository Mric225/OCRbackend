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

        body {
    background-color: #FAFAFA
}

.container {
    margin-top: 200px
}

.microphone {
    border-top-right-radius: 32px !important;
    border-bottom-right-radius: 32px !important;
    background-color: #fff
}

.google {
    border-top-left-radius: 32px !important;
    border-bottom-left-radius: 32px !important;
    background-color: #fff
}

.input-group-prepend {
    margin-right: -2px !important
}

.input-group-append {
    margin-left: -2px !important
}

.form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #ced4da;
    outline: 0;
    box-shadow: 0 0 0 0 !important
}

.form-control {
    border-right: 0 !important;
    border-left: 0 !important
}

    </style>
</head>

<body>
    <div class="dash">
        <div class="dash-nav dash-nav-dark"><br>
            <header>
                <li class="list-group-item bg-indigo "><a href="#" class="nav-link  text-center">

                   
                    <div class="small" style="font-size:54%;"><em><?php echo $prenom.' '.$nom;?></em></div>
                </a></li>

            </header><br><br><br><br>
            <nav class="dash-nav-list">
                <a href="home.php" class="dash-nav-item">
                    <i class="fas fa-home"></i> Dashboard </a>
                    <a href="search.php" class="dash-nav-item">
                    <i class="fas fa-search"></i> Rechercher </a>
                <!-- <div class="dash-nav-dropdown">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-chart-bar"></i> Charts </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="chartjs.html" class="dash-nav-dropdown-item">Chart.js</a>
                    </div>
                </div>
                <div class="dash-nav-dropdown ">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-cube"></i> Components </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="cards.html" class="dash-nav-dropdown-item">Cards</a>
                        <a href="forms.html" class="dash-nav-dropdown-item">Forms</a>
                        <div class="dash-nav-dropdown ">
                            <a href="#" class="dash-nav-dropdown-item dash-nav-dropdown-toggle">Icons</a>
                            <div class="dash-nav-dropdown-menu">
                                <a href="icons.html" class="dash-nav-dropdown-item">Solid Icons</a>
                                <a href="icons.html#regular-icons" class="dash-nav-dropdown-item">Regular Icons</a>
                                <a href="icons.html#brand-icons" class="dash-nav-dropdown-item">Brand Icons</a>
                            </div>
                        </div>
                        <a href="stats.html" class="dash-nav-dropdown-item">Stats</a>
                        <a href="tables.html" class="dash-nav-dropdown-item">Tables</a>
                        <a href="typography.html" class="dash-nav-dropdown-item">Typography</a>
                        <a href="userinterface.html" class="dash-nav-dropdown-item">User Interface</a>
                    </div>
                </div>
                <div class="dash-nav-dropdown">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-file"></i> Layouts </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="blank.html" class="dash-nav-dropdown-item">Blank</a>
                        <a href="content.html" class="dash-nav-dropdown-item">Content</a>
                        <a href="login.html" class="dash-nav-dropdown-item">Log in</a>
                        <a href="signup.html" class="dash-nav-dropdown-item">Sign up</a>
                    </div>
                </div>
                <div class="dash-nav-dropdown">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-info"></i> About </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="https://github.com/HackerThemes/spur-template" target="_blank" class="dash-nav-dropdown-item">GitHub</a>
                        <a href="http://hackerthemes.com" target="_blank" class="dash-nav-dropdown-item">HackerThemes</a>
                    </div>
                </div> -->
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
            <form action="" method="POST">
            <div class="container d-flex justify-content-center">
                
    <div class="input-group col-sm-7 input-group-lg">
        <div class="input-group-prepend"> <span class="input-group-text google"></span> </div> <input type="text" class="form-control" name="search">
        <div class="input-group-append"> <span class="input-group-text microphone"></span> </div>
        <button type="submit" class="btn btn-primary" name="submit">Rechercher</button>
    </div>
    </form>
    </div>

            <div class="container">
                

            
    <?php


if (isset($_POST['submit'])) {
    $searchValue = $_POST['search'];

    if ($searchValue != "") {
    
        $sql = "SELECT * FROM ocr WHERE  titre LIKE '%$searchValue%' OR texte LIKE '%$searchValue%'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {   
                  
    while($row = mysqli_fetch_assoc($result)) {
        

?>
<table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th>Titre</th>
                      <th>Contenu</th>
                      <th>Date de numérisation</th>
                      <th>Voir</th>
                    </tr>
                  </thead>

<tbody>
                    <tr>
                    <td><b><?php echo $row["titre"] ;?></b></td>
                            <td><?php echo $firstdesc=substr($row['texte'], 0, 60).' . . .' ;?></td>
                           
                            <td><?php echo $row["datesave"] ;?></td>
                      <td>
                      <div class="btn-group">
                        <a href="voir2.php?idsave=<?php echo $row["idsave"]; ?>"><button class="btn bg-light text-black border-0 shadow"><span class="fa fa-eye"></span></button></a>
                        
                        <!-- <p><a href="modifier.php?idsave=<?php echo $row["idsave"]; ?>"><button class="btn bg-light text-black border-0 shadow"><span class="fa fa-edit"></span></button></a>
                        <a href="delete.php?idsave=<?php echo $row["idsave"]; ?>"><button class="btn bg-light text-black border-0 shadow"><span class="fa fa-trash"></span></button></a> -->
                        
                    </div>
                    </td>
                    </tr>
                    </tbody>  
                    <?php      
}

        
} else {
        echo "0 results";
    }
}else{
    echo 'Entrez un mot à rechercher';
}
}
    mysqli_close($conn);
    ?>
                  
                </table>
                
              </div>
            





        
</div>
           




        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="../js/spur.js"></script>
</body>

</html>
