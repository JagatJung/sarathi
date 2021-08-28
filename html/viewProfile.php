<?php
include "../php/header.php";
session_start();
if(isset($_GET['token'])){
    $token=$_GET['token'];
    include"../database/connection.php";
    $sql="SELECT * FROM profile WHERE token='$token'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $location=$row["location"];
            $bio=$row["bio"];
            $dob=$row["dob"];
            $fb=$row["fb"];
            $ln=$row["ln"];
            $wa=$row["wa"];
            $pimg=$row["pimg"];
            $hone=$row["hone"];
            $htwo=$row["htwo"];
            $hthree=$row["hthree"];
            $job=$row['job'];
            $org=$row['org'];
            $rel=$row['position'];
            $gender=$row['Gender'];
            $sql="SELECT * FROM reg_table WHERE token='$token'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $name=$row['rname'];
                    $mail=$row['email'];
?>
<div class="container-fluid bg-white">
    <div class="row justify-content-end p-3">
        <a href="report.php?token=<?php echo $token;?>"><button class="btn-dark p-2 mr-4 shadow">report</button></a>
    </div>
</div>
   <!--ABOUT STARTS HERE-->
   <div class="container" style="margin-top:0%;" id="about">
        
        <div class="row p-5">
            <div class="bg-danger mt-2 p-5">
                <h1 class="font-weight-bold" style="font-size: 60px;">ABOUT ME</h1>
                <hr class="pLine"><br>
                <p class="col-sm-12 col-lg-6 mt-3" style="float: left;">
                <?php echo $bio?>
                
                <br>
                <b>Name</b>
                <?php echo $name ?>
                    <br>
                    <b>Date of Birth</b>
                    <?php echo $dob ?><br>
                    <b>Gender</b>
                    <?php echo $gender ?><br>
                    <b>Location:</b>
                    <?php echo $location ?><br>
                    <b>Works as:</b>
                    <?php echo $job ?><br>
                    <b>Works at:</b>
                    <?php echo $org ?>
                    <br>
                    <b>Hobbies</b>
                    <?php echo $hone.",".$htwo.",".$hthree ?>
                    <br>
                    <b>RelationShip status:</b>
                    <?php echo $rel ?><br>
                    <b>Social Media Links:</b>
                    <a href="<?php echo $ln ?>"><i class="fa fa-linkedin bg-light text p-1 text-primary " style="border-radius:10px ;"></i></a>
                    <a href="<?php echo $fb ?>"><i class="fa fa-facebook-square bg-light text p-1 text-primary" style="border-radius:10px ;"></i></a>
                    <a href="<?php echo $ln ?>"><i class="fa fa-whatsapp bg-light text p-1 text-success" style="border-radius:10px ;"></i></a>
                    <a href="<?php echo $mail ?>"><i class="fa fa-envelope bg-light text p-1 text-danger" style="border-radius:10px ;"></i></a>
                    <br><br>
  
                </p>
            
            <div class="col-sm-12 col-lg-5 ml-5 mt-5 shadow" style="float:left; margin-top:0%;">
                <img class="Pimage my-5" src="../database/pictures/<?php echo $pimg ?>" width="100%">
            </div>
            </div>
        </div>
   </div>
        
   



<?php
   
        }
    }
    include "../php/footer.php";
    }
}
    else{
        echo "something wrong";
    }
}

else{
    //header("Location:../index.php");
}

?>