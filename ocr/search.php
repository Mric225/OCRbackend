<?php
// Start the session
ob_start();
session_start();
include 'connexionadmin.php';
include 'sessionadmin.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">   
    <title>Admin dashboard</title>
    <style>
        .bg-indigo{
            background-color: indigo;
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
        .list-group-item:hover{
            background-color: white;
        }
        .list-group-item:hover .nav-link{
            color: indigo;
        }
        body {
    background-color: #FAFAFA
}

/* .container {
    margin-top: 200px
} */



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
    
    <div class="row no-getters">
        <!--sidebar-->
        <div class="col-xl-2 col-md-3 col-sm-12" id="side-bar">
            <ul class="list-group list-group-flush fixed shadow-sm" >
                <li class="list-group-item bg-indigo "><a href="#" class="nav-link  text-center">
                    <img src="assets/image2.jpg" class="shadow" style="height: 100px; width: 100px;border-radius: 50%;">
                    <h5><?php echo $prenom.' '.$nom;?></h5>
                    <div class="small"><em>ADMINISTRATEUR</em></div>
                </a></li>
                <li class="list-group-item bg-indigo "><a href="home.php" class="nav-link"><span class="fa fa-home"></span> Home</a></li>
                <li class="list-group-item bg-indigo "><a href="users.php" class="nav-link"><span class="fa fa-users"></span> Users</a></li>
                <li class="list-group-item bg-indigo "><a href="search.php" class="nav-link"><span class="fa fa-search"></span> Search</a></li>
                <li class="list-group-item1 bg-indigo "><span class="fa fa-"></span></li>
                <li class="list-group-item1 bg-indigo "><span class="fa fa-"></span> </li>
                <li class="list-group-item1 bg-indigo "><span class="fa fa-"></span> </li>
                 <li class="list-group-item1 bg-indigo "><span class="fa fa-"></span> </li>
                <li class="list-group-item1 bg-indigo "><span class="fa fa-"></span> </li>
                <li class="list-group-item1 bg-indigo "><span class="fa fa-"></span> </li> 
                <li class="list-group-item1 bg-indigo "><span class="fa fa-"></span></li>
                <li class="list-group-item1 bg-indigo "><span class="fa fa-"></span> </li>
                <li class="list-group-item1 bg-indigo "><span class="fa fa-"></span> </li>
                 <li class="list-group-item1 bg-indigo "><span class="fa fa-"></span> </li>
                <li class="list-group-item1 bg-indigo "><span class="fa fa-"></span> </li>
                <li class="list-group-item1 bg-indigo "><span class="fa fa-"></span> </li>
                <li class="list-group-item1 bg-indigo "><span class="fa fa-"></span></li>
                

            </ul>
        </div>
        <!--content-->
        <div class="col-xl-10 col-md-9 col-sm-12" id="content">
            <nav class="navbar  navbar-light bg-white" id="navbar">
                <a class="navbar-brand fixed" id="toggler"><span class="fa fa-bars text-indigo"></span></a>
                <div class="btn-group" id="icons">
                    <button class="btn bg-transaprent border-0 search-btn"><span class="fa fa-search text-indigo"></span></button>
                    <a href="logout.php"><button class="btn bg-transaprent border-0"><span class="fa fa-sign-out text-indigo"></span></button></a>
                </div>
                    <!--
                        search 
                    -->
                   <div class="form-group search-class w-100 mt-2" id="search">
                        <div class="input-group shadow-sm">
                            <div class="input-group-prepend">
                                <button class="btn bg-indigo text-white"><span class="fa fa-search"></span></button>
                            </div>
                            <input type="text" placeholder="search" class="form-control">
                            <div class="input-group-append">
                                <button class="btn bg-indigo text-white search-btn"><span class="fa fa-times"></span></button>
                            </div>
                        </div>
                   </div>
            </nav>
            <form action="" method="POST">
            <!-- <div class="container d-flex justify-content-center"> -->
                
    <div class="input-group col-sm-7 input-group-lg">
        <div class="input-group-prepend"> <span class="input-group-text google"></span> </div> <input type="text" class="form-control" name="search">
        <div class="input-group-append"> <span class="input-group-text microphone"></span> </div>
        <button type="submit" class="btn btn-primary" name="submit">Rechercher</button>
    </div>
    </form>
    <?php


if (isset($_POST['submit'])) {
    $searchValue = $_POST['search'];

    if ($searchValue != "") {
    
        $sql = "SELECT * FROM ocr WHERE  titre LIKE '%$searchValue%' OR texte LIKE '%$searchValue%'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {   
                  
    while($row = mysqli_fetch_assoc($result)) {
        

?>
           
            <div class="row mx-3 table-responsive">
                <table class="table table-striped shadow-sm">
                    <thead class="bg-indigo text-white">
                        <tr>
                            <!-- <td>Id</td> -->
                            <td>Titre</td>
                            <td>Contenu</td>
                            <!-- <td>Publier par </td> -->
                            <td>Date de numérisation</td>
                            <td>Action</td>
                        </tr>
                    </thead>
<!-- --------------------------------------------------------------------------------------------------------------------------------------- -->
                        
                              <tbody>
                              <tr>
                          
                          <td><b><?php echo $row["titre"] ;?></b></td>
                          <td><?php echo $firstdesc=substr($row['texte'], 0, 60).' . . .' ;?></td>
                          <!-- <td><b><?php echo $row["prenom"].' '.$row["nom"] ;?></b></td> -->
                          <td><?php echo $row["datesave"] ;?></td>
                          
                          <td>
                              <div class="btn-group">
                              <a href="doc.php?idsave=<?php echo $row["idsave"]; ?>"><button class="btn bg-light text-indigo border-0 shadow"><span class="fa fa-eye"></span></button></a>
                              <a href="deletedoc.php?idsave=<?php echo $row["idsave"]; ?>"><button class="btn bg-light text-indigo border-0 shadow"><span class="fa fa-trash"></span></button></a>
                              </div>
                          </td>
                      </tr>
                        <tr>
                    </tbody>  
                       
                            <?php
                            }
                        } else {
                            echo "0 results";
                        }
                    }else{
                        echo 'veuillez remplir le champ';
                    }
                }

                        mysqli_close($conn);
                        ?>
<!-- --------------------------------------------------------------------------------------------------------------------------------------- -->
                    
                </table>
            </div>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
<script src="piechart.js"></script>
<script src="xychart.js"></script>
<script>
    $(document).ready(function(){
        $("#toggler").click(function(){
            $("#side-bar").toggle(500);
            $("#content").toggleClass("col-xl-12");
            $("#navbar").toggleClass("shadow-sm");
        });

        $(".search-btn").click(function(){
            $("#search").toggleClass("search-class");
            $("#icons").toggle();
        });
    })
</script>


</body>
</html>