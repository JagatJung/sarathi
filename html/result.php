<?php
include "../php/header.php";
session_start();
function findAge($bday){
    $date=$bday;
    $today = new Datetime(date('y-m-d',"Asia/Kathmandu"));
    $diff = $today->diff($date);
    return $diff->y;
}
if(isset($_SESSION['token'])&&isset($_POST['item'])){
    $token=$_SESSION['token'];
    $category=$_POST['cat'];
    $item=$_POST['item'];
    $pic="";
    //now playing with database

    //css code
    
    ?>
         <div data-aos="zoom-out-up" class="container-fluid bg-light p-5 w-100" style="margin-top:7%;" id="serve">
            <!-- <div class="p-3 bg-light"></div> -->
            <div class="row justify-content-center mb-">
                <h1 class="text-dark mb-4"><b>SEARCH RESULTS HERE</b></h1>
                <br><br>  
            </div>
            <div class="row mt-3 justify-content-center">
         
    <?php
    include"../database/connection.php";
    $sql="SELECT * FROM reg_table WHERE $category='$item'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $stoken=$row['token'];
            $uname=$row['rname'];
     
    // codes for search goes here
        $sqlS="SELECT * FROM profile WHERE token='$stoken'";
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
                    //$age=@findAge($row['dob']);
                    $sqlS="SELECT rname FROM reg_table WHERE token='$ntoken'";
                    $result = $conn->query($sqlS);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            $uname=$row['rname'];
                    }
                    
                    //css goes here
                    ?>
                        
                        <a href="viewProfile.php?token=<?php echo $ntoken;?>">
                        <div class="col-sm-12 col-lg-3 card bg-danger mt-3 shadow-lg mr-lg-4 mb-lg-0 " style="border-width:0px; border-radius: 10px;">
                        <img class="card-img-top ml-5 mt-1 pt-2" src="../pictures/<?php echo $pic;?>" alt="Card image" style="width:70%">
                        <div class="card-body">
                            <h4 class="card-title text-dark text-center"><b><?php echo $uname;?></b></h4>
                            <p class="card-text text-light text-center"><b>My name is <?php echo $uname;?>. My age is <?php echo $dob;?>. <br>I work in <?php echo $org;?> (<?php echo $job;?>)</b></p>
                        </div></a></div>

                <?php
                echo"</div></div></div>";
                }
            }
        }
}   }
}
else{
    echo "something wrong";
}
echo "</div></div>";
include "../php/footer.php";
?>