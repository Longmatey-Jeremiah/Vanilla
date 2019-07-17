<?php
include "db.php";

session_start();

if(isset($_POST["userLogin"])){
    $email  =   mysqli_real_escape_string($conn,$_POST["userEmail"]);
    $passwords   =   md5($_POST["userPassword"]);
    $sql    =   "SELECT * FROM user_info WHERE email='$email' AND password='$passwords'";
    $run_query  =   mysqli_query($conn,$sql);
    $count  =   mysqli_num_rows($run_query);
    if($count == 1){
        $row = mysqli_fetch_array($run_query);
        $_SESSION["uid"] = $row["user_id"];
        $_SESSION["name"] = $row["first_name"];
        echo "Hello";
    }
}

?>