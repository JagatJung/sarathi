<?php
session_start();
if(isset($_POST['code'])){
    if($_POST['code']==$_SESSION['token']){
        header("Location: ../html/fullregister.php");
    }
    else{
        echo "k bhai raxa ya";
    }
}
else{
    echo "Please enter before submitting";
}