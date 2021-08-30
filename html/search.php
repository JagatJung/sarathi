<?php


// function findAge($bday){
//     $date=$bday;
//     //$today = new Datetime(date('y-m-d',"Asia/Kathmandu"));
//     $diff = $today->diff($date);
//     return $diff->y;
// }
if(isset($_SESSION['token'])){
    
    $pic="";
    //now playing with database
    include"../database/connection.php";
    $sql="SELECT * FROM profile WHERE token='$token'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $location=$row["location"];
            $dob=$row["dob"];
            $hone=$row["hone"];
            $htwo=$row["htwo"];
            $hthree=$row["hthree"];
            $job=$row['job'];
            $org=$row['org'];
            $position=$row['position'];
            $gender=$row['Gender'];
            $pic=$row['pimg'];
           
        }
    }
    else{
        echo "something wrong";
    }
    // codes for search goes here
?>
    <div data-aos="zoom-out-up" class="container-fluid bg-light p-5 w-100" style="margin-top:7%;" id="serve">
            <!-- <div class="p-3 bg-light"></div> -->
            <div class="row justify-content-center mb-">
                <h1 class="text-dark mb-4"><b>Suggestions for you</b></h1>
                <br><br>  
            </div>
            <div class="row mt-3 justify-content-center">
        <?php  
        $flag=0.00;
        $uname="";
        $sqlS="SELECT * FROM profile WHERE token!='$token' AND Gender!='$gender'";
        $result = $conn->query($sqlS);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $ntoken=$row['token'];
                $location=$row["location"];
                $dob=$row["dob"];
                $hone=$row["hone"];
                $htwo=$row["htwo"];
                $hthree=$row["hthree"];
                $job=$row['job'];
                $org=$row['org'];
                $position=$row['position'];
                $gender=$row['Gender'];
                
                if($org==$row['org']){
                    $flag=$flag+2;
                }
                if($location==$row['location']){
                    $flag=$flag+2;
                }
                if(($hone==$row['hone'])||($hone==$row['htwo'])||($hone==$row['hthree'])){
                    $flag=$flag+1;
                }
                if(($htwo==$row['hone'])||($htwo==$row['htwo'])||($htwo==$row['hthree'])){
                    $flag=$flag+1;
                }
                if(($hthree==$row['hone'])||($hthree==$row['htwo'])||($hthree==$row['hthree'])){
                    $flag=$flag+1;
                }
                if($job==$row['job']){
                    $flag=$flag+1;
                }
                if($position==$row['position']){
                    $flag=$flag+2;
                }
                
                // if(abs(@findAge($dob)-@findAge($row['dob']))<6){  
                    
                //     $flag=$flag+2;         
                // }
                $per=($flag*100)/12;
                if($per>10){
                    //$age=@findAge($row['dob']);
                    $sqlS="SELECT rname FROM reg_table WHERE token='$ntoken'";
                    $result = $conn->query($sqlS);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            $uname=$row['rname'];
                            
                        }
                    }
                    
                    //css goes here
                    ?>
                        
                        <a href="viewProfile.php?token=<?php echo $ntoken;?>"><div class="col-sm-12 col-lg-3 card bg-danger mt-3 shadow-lg mr-lg-4 mb-lg-0 " style="border-width:0px; border-radius: 10px;">
                        <img class="card-img-top ml-5 mt-1 pt-2" src="../database/pictures/<?php echo $pic;?>" alt="Card image" style="width:70%">
                        <div class="card-body">
                            <h4 class="card-title text-dark text-center"><b><?php echo $uname;?></b></h4>
                            <p class="card-text text-light text-center"><b>My name is <?php echo $uname;?>. My age is <?php echo $dob;?>. <br>I work in <?php echo $org;?> (<?php echo $job;?>)</b></p>
                        </div></div>

                <?php
                echo"</div></div>";
                }
            }
        }
}

else{
    header("Location:../index.php");
}

?>