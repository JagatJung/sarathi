<?php
session_start();
if(isset($_POST["mail"])&&isset($_POST["mail"])){
    include "connection.php";
    $mail=$_POST["mail"];
    $pass=$_POST["pass"];
    $sql = "SELECT * FROM reg_table WHERE email='$mail'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $password=$row["password"];
        $_SESSION['token']=$row['token'];
        $pnum=$row['pnum'];
    }
    if($pass===$password){
        if($pnum=="admin"){
            header("Location:../html/admin.php");    
        }else{
            header("Location:../html/profile.php");
        }
    }
    else{
        echo "password doesn match";
    }
    } else {
    echo "Your account doesnt exist";
    }
    $conn->close();
  }
?>