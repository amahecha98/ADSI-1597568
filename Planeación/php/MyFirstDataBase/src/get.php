<?php


 if (isset($_GET['edit'])){
     $editar_id =$_GET['edit'];
     
     $consult="SELECT * FROM user_data WHERE ID='$editar_id'";
     $eje = mysqli_query($sever, $consult);
     
     $fila = mysqli_fetch_array($eje);
     
     $users = $fila['User'];
     $pass = $fila['Password'];
     $names = $fila['Name'];
     $lastname =$fila['LastName'];
     $phones =$fila['Phone'];
 }
 require '../Public/edit.php';