<?php
include "../database/connection.php";
if(isset($_GET['id'])){
    $bid=$_GET['id'];
    $sql="UPDATE reg_table SET status='0' WHERE token='$bid'";
    $result = $conn->query($sql);
    if($result)
        header("Location:../html/admin.php");
    else{
        echo "something wrong";
    }
}