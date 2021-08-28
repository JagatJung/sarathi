<?php
include "../database/connection.php";
session_start();
if(isset($_SESSION['token'])){
    $bid=$_SESSION['token'];
    $rname=$_POST['rname'];
    $pw=$_POST['pw'];
    $bio=$_POST['bio'];
    $dob=$_POST['dob'];
    $fb=$_POST['fb'];
    $wa=$_POST['wa'];
    $ln=$_POST['ln'];
    $ho=$_POST['hone'];
    $ht=$_POST['htwo'];
    $htr=$_POST['hthree'];
    $jt=$_POST['jt'];
    $og=$_POST['og'];
    $lc=$_POST['lc'];
    $gen=$_POST['gen'];
    
    $sql="UPDATE reg_table SET rname='$rname', password='$pw' WHERE token='$bid'";
    echo $sql;
    $result = $conn->query($sql);
    $sql="UPDATE profile SET
    bio='$bio',
    dob='$dob',
    fb='$fb',
    ln='$ln',
    wa='$wa',
    hone='$ho',
    htwo='$ht',
    hthree='$htr',
    job='$jt',
    org='$og',
    `location`='$lc',
    Gender='$gen'
    WHERE token='$bid'";
    $result = $conn->query($sql);
    if(!$result){
        echo "not working why";
    }
    header("Location:../php/profile");
}
else echo "wtf";
// <a href="Delete.php?PID=<?php echo $row['PersonID'];
?>

