<?php
session_start(); 
include "connection.php";

if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
    else{
        if(isset($_POST['dob'])&&isset($_POST['gen'])&&isset($_POST['loc'])&&isset($_POST['fb'])&&isset($_POST['wa'])&&isset($_POST['ln'])&&isset($_POST['hby'])&&isset($_POST['othby'])&&isset($_POST['ohby'])&&isset($_POST['jt'])&&isset($_POST['org'])&&isset($_POST['rel'])&&isset($_POST['desc']))
        {
            $token=$_SESSION['token']; 
            $bio=$_POST['desc'];	
        
            $dob=$_POST['dob'];	
            $fb=$_POST['fb'];		
            $ln=$_POST['ln'];	
            $wa=$_POST['wa'];	
            $pimg=$_SESSION['pname'];	
            $hone=$_POST['hby'];	
            $htwo=$_POST['othby'];	
            $job=$_POST['jt'];
            $hthree=$_POST['ohby'];	
            $org=$_POST['org'];
            $location=$_POST['loc'];	
            $position=$_POST['ohby'];	
            $Gender=$_POST['gen'];

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
                header("Location:login.php");
            }
            else{
                echo mysqli_error($conn);
            }
        }
    
    }
?>