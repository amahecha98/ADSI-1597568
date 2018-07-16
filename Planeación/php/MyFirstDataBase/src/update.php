<?php
  

$update_user = $_POST['user'];
$update_pass = $_POST['password'];
$update_name = $_POST['name'];
$update_lastname = $_POST['lastname'];
$update_phone = $_POST['phone'];
$edit= $_POST['edit'];
$sess=mysqli_connect('localhost', 'root', 'root', 'First_Base') or die ("Error");

$update ="UPDATE user_data SET User='$update_user', Password='$update_pass', Name='$update_name', Lastname='$update_lastname', Phone='$update_phone' WHERE ID='$edit'" ;
$jec =mysqli_query($sess, $update);

if($jec ===TRUE){
    echo "<script>alert('data update')</script>";
    echo "<script>window.open('../Public/table.php','sel')</script>";
}

