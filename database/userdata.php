<?php
session_start(); 
include "connection.php";

if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
    else{
        $token=$_SESSION['token']; 
        $bio="random honi";	
      
        $dob="random honi";	
        $fb="random honi";		
        $ln="random honi";	
        $wa="random honi";	
        $pimg="random honi";	
        $hone="random honi";	
        $htwo="random honi";	
        $job="random honi";
        $hthree="Random";	
        $org="random honi";
        $location="random honi";	
        $position="random honi";	
        $Gender="female";

        $sql = "INSERT INTO `profile` (`token`, `bio`, `dob`, `fb`, `ln`, `wa`, `pimg`, `hone`, `htwo`, `hthree`, `job`, `org`, `location`, `position`, `Gender`) 
        VALUES (
        '$token', 
        '$bio',	
        '$dob',	
        '$fb',	
        '$ln',	
        '$wa',	
        '$pimg',	
        '$hone',	
        '$htwo',
        '$hthree',	
        '$job',	
        '$org',
        '$location',	
        '$position',	
        '$Gender'
        )";

        $result = $conn->query($sql);

        if($result){
            header("Location:../html/login.php");
        }
        else{
            echo mysqli_error($conn);
        }
    
    }
?>