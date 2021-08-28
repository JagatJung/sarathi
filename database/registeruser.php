<?php
session_start();
function tokenGen($num){
    $newnum=$num;
    include 'connection.php';
    $charset = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
    $token="";
    for($i=0;$i<$num;$i++){
        $token=$token."".$charset[rand(0,61)];
    }
    $sql = "SELECT password FROM reg_table WHERE email='$token'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0){
        tokenGen($newnum);
    }
    else{
    return $token;
    }
}   
if(isset($_POST['mail'])&&isset($_POST['num'])&&isset($_POST['pass'])&&isset($_POST['pass'])){
    
    $token=tokenGen(64);
    $mail=$_SESSION['mail'];
    $name=$_POST['mail'];
    $num=$_POST['num'];
    $pass=$_POST['pass'];
    date_default_timezone_set('Asia/Kathmandu');      
$date=date("Y-m-d");
    include 'connection.php';
    $sql="INSERT INTO reg_table (`token`, `rname`, `password`, `email`, `pnum`, `dateOfReg`) VALUES ('$token', '$name', '$pass', '$mail', '$num','$date')";
    if(mysqli_query($conn, $sql)){
        $_SESSION['token']=$token;
        header("location:picupload.php");
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
}
else{
    echo "some thing went wrong. Head back to registeration again";
}
?>