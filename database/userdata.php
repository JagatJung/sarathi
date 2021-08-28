<?php 
include "connection.php";
function tokenGen($num){
    $charset = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
    $token="";
    for($i=0;$i<$num;$i++){
        $token=$token."".$charset[rand(0,61)];
    }
    return $token;
}
if(isset($_POST['dob'])&&isset($_POST['hby'])&&isset($_POST['ohby'])&&isset($_POST['othby'])&&isset($_POST['jt'])&&isset($_POST['hby'])){
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
    else{
        $pname=$_SESSION['pname'];
        $token=tokenGen(20);
        $sql = "INSERT INTO profile (
        token, 
        bio,	
        dob,	
        fb,	
        ln,	
        wa,	
        pimg,	
        hone,	
        htwo,	
        hthree,	
        job,	
        org,
        location,	
        position,	
        Gender)
        VALUES (
        token, 
        bio,	
        dob,	
        fb,	
        ln,	
        wa,	
        pimg,	
        hone,	
        htwo,	
        hthree,	
        job,	
        org,
        location,	
        position,	
        Gender)";
        $result = $conn->query($sql);
        if($result){
            header("Location:login.php");
        }else{
            echo "somethinf went wrong";
        }
    
    }
}?>