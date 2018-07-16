<?php


if (isset($_POST['inser'])){
    $user = $_POST ['user'];
    $name =$_POST ['name'];
    $last_name = $_POST ['last_name'];
    $phone = $_POST ['phone'];
    $password= $_POST ['passw'];
    $sever= mysqli_connect('localhost', 'root', 'root', 'First_Base') or die ("Error");
    
    $ingre="INSERT INTO user_data ( User, Name, LastName, Phone, Password) VALUES ('$user', '$name', '$last_name', '$phone', '$password')";
    $eject= mysqli_query($sever, $ingre);
    
   
    
    if ($eject){
        
        echo "<script>alert('Created User')</script>";
        
    }
 else {
    echo "error 3323" ;   
    }
}
require 'index.php';