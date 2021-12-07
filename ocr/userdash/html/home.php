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
            
            <div class="container">
                <h2>Documents scannés</h2><br>
                
                <table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th>Titre</th>
                      <th>Contenu</th>
                      <th>Date de numérisation</th>
                      <th>Actions</th>
                    </tr>
                  </thead>

                  <?php
                        $sql = "SELECT * FROM ocr WHERE email='" . $email . "' ORDER BY idsave DESC";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                         
                            while($row = mysqli_fetch_assoc($result)) {
                            ?>

                  <tbody>
                    <tr>
                    <td><b><?php echo $row["titre"] ;?></b></td>
                            <td><?php echo $firstdesc=substr($row['texte'], 0, 60).' . . .' ;?></td>
                           
                            <td><?php echo $row["datesave"] ;?></td>
                      <td>
                        <div class="btn-group">
                        <a href="voir.php?idsave=<?php echo $row["idsave"]; ?>"><button class="btn bg-light text-black border-0 shadow"><span class="fa fa-eye"></span></button></a>
                        <p><a href="modifier.php?idsave=<?php echo $row["idsave"]; ?>"><button class="btn bg-light text-black border-0 shadow"><span class="fa fa-edit"></span></button></a>
                        <a href="delete.php?idsave=<?php echo $row["idsave"]; ?>"><button class="btn bg-light text-black border-0 shadow"><span class="fa fa-trash"></span></button></a>
                        
                    </div>
                    </td>
                    </tr>
                    <?php
                            }
                            
                    } else {
                            echo "0 results";
                        }

                        mysqli_close($conn);
                        ?>
                 
                  </tbody>
                </table>
                
              </div>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="../js/spur.js"></script>
</body>

</html>