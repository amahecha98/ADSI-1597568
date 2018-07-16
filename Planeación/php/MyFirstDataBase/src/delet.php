<?php
 

    $delet_id = $_GET['delet'];
    
    $delet = "DELETE FROM user_data WHERE ID='$delet_id'";
    $ex = mysqli_query($sever, $delet);
    
    if ($ex===TRUE){
    echo "<script>alert('data update')</script>";
    echo "<script>window.open('../Public/table.php','self')</script>";
    
}
