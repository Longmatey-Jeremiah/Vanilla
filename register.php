<?php
//include the database in this file
    include "db.php";
    // assign the form data to a variable for validation 
    $fname  =   $_POST["fname"];
    $lname  =   $_POST["lname"];
    $email  =   $_POST["email"];
    $password  =   md5($_POST["password"]);//add md5 to convert the password to a random 32 bit value
    $repassword  =   md5($_POST["repassword"]);
    $mobile  =   $_POST["mobile"];
    $address1  =   $_POST["address1"];
    $address2   =   $_POST["address2"];
    $name   =   "/^[A-Z][a-zA-Z]+$/";//declare the type of data that can be in the name section of a user's input
    $emailValidation  = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";//declare the type of data that can be in a user's  email 
    $number =   "/^[0-9]+$/";//declare the type of data that can be in a user's  mobile number 

    //check if any field of the form is empty 
    if(empty($fname) || empty($lname) || empty($email) || empty($password) || empty($repassword) || empty($mobile) || empty($address1) || empty($address2 )){
        //if any field on the form is empty prompt the user to fill that field
        echo "<div class='alert alert-warning'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <p><b>Please Fill all spaces provided..</b></p>
                </div>
        ";
        exit();
    }
    else{
        //validate the form data if no field on the form is empty 
    if(!preg_match($name,$fname)){
        //if the first name contains any foreign data(type of data that cannot be in the name section) prompt the user
        echo "<div class='alert alert-warning'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <p><b>$fname is invalid!!</b></p>
                </div>
        ";
        exit();
    }
    //if the last name contains any foreign data(type of data that cannot be in the name section) prompt the user
    if(!preg_match($name,$lname)){
        echo "<div class='alert alert-warning'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <p><b>$lname is invalid!!</b></p>
                </div>
        ";
        exit();
    }
    //if the email contains any foreign data(type of data that cannot be in the email of the user) prompt the user
    if(!preg_match($emailValidation,$email)){
        echo "<div class='alert alert-warning'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <p><b>$email is invalid!!</b></p>
                </div>
        ";
        exit();
    }
    //if the password is not long enough( < 9 ) prompt the user password is weak  
    if(strlen($password) < 9){
        echo "<div class='alert alert-danger'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <p><b>Password is weak!!</b></p>
                </div>
        ";
        exit();
    }
    //if the password is not long enough( < 9 ) prompt the user password is weak
    if(strlen($repassword) < 9){
        echo "<div class='alert danger'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <p><b>Password is weak!!</b></p>
                </div>
        ";
        exit();
    }
    //if password and repasword are not the same (prompt the user passwords do not match)    
    if($password != $repassword){
        echo "<div class='alert alert-danger'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <p><b>Passwords do not match!!</b></p>
                </div>
        ";
        exit();
    }
 //if the Mobile contains any foreign data(type of data that cannot be in the mobile number of a user) prompt the user
    if(!preg_match($number,$mobile)){
        echo "<div class='alert alert-warning'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <p><b>Mobile Number invalid!!</b></p>
                </div>
        ";
        exit();
    }
 //if mobile number is not up to 10 digits (prompt the user Modile number should be 10 digits)
    if(!strlen($mobile) == 10){
        echo "<div class='alert alert-warning'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <p><b>Mobile number should be 10 digits</b></p>
                </div>
        ";
        exit();
    }
    //check if email already exists in the database 
    $sql    =   "SELECT user_id FROM user_info WHERE email='$email' LIMIT 1";
    $check_query    =   mysqli_query($conn,$sql);
    $count_email    =   mysqli_num_rows($check_query);
    if($count_email > 0 ){
        //if email already exist alert the user to change his email
        echo "<div class='alert alert-danger'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <p><b>$email already exists Try another Email Address!!</b></p>
                </div>
        ";
        exit();
    }else{//if email doesn't exist insert the user's input into the user_info table in the database 
        $password   =   md5($password);
        $sql =  "INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`,
         `password`, `mobile`, `address1`, `address2`) VALUES (NULL, '$fname', '$lname',
          '$email', '$password', '$mobile', '$address1', '$address2')";
          $run_query    =   mysqli_query($conn,$sql);
          if($run_query){
              //on successful insertion of user input display a success message
            echo "
                <div class='alert alert-success'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <p><b>You have registered Successfully!!..</b></p>
                </div>
            ";
            exit();
          }
    }
}

?>
