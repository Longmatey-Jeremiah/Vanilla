<?php
    $servername = "localhost";
    $username   =   "root";
    $password   =   "";
    $db         =   "ghshops";

    //Establish a connection to the database
    $conn = mysqli_connect($servername,$username,$password,$db);

    //Test connection
    if (!$conn){
        die("Connection Failed: ".mysqli_connect_error());
    }




?>