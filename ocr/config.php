<?php 
    $username = 'root';
    $password = '';
    $host="localhost";
    $dbname = "flutter";
    // $encode = "charset=utf8";


    $connect=mysqli_connect($host,$username,$password,$dbname);

    if(!$connect)
    {
        echo json_encode("Connexion non etablie");
    }else{
         echo json_encode("Connexion reussie");
    }

?>