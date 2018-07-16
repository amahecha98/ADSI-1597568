<?php
$sever= mysqli_connect('localhost', 'root', 'root', 'First_Base') or die ("Error");
$selec= "SELECT * FROM user_data ";


$s= mysqli_query($sever, $selec);



?>
