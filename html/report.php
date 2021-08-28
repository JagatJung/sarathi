<?php 
if(isset($_GET['token'])){
    $token=$_GET['token'];
    include "../database/connection.php";
$sql="UPDATE reg_table SET report=15 WHERE token='$token'";
$conn->query($sql);
header("Location:profile.php");
}?>