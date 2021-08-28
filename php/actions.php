<?php
session_start();
include "../php/header.php";
if(isset($_GET['id'])){
    $token=$_GET['id'];
    include"../database/connection.php";
   
   
?>

    <div class="container-fluid bg-light">
    <div class="row justify-content-center p-3">
    <a href="../html/viewProfile.php?token=<?php echo $token; ?>"><button class="btn-dark p-2 mr-4 shadow">Visit</button></a>
    <a href="deluser.php?id=<?php echo $token; ?>"><button class="btn-dark p-2 mr-4 shadow">Deactive</button></a>
    </div>
            <table class="pt-3" border="1" align="center">
            <tr>
                <th class="p-2">Name</th>
                <th class="p-2">Email Address</th>
                <th class="p-2">Phone Number</th>
                <th class="p-2">Date of Regestration</th>
                <th class="p-2">Number of Reports</th>
            </tr>
            <?php
             $sql="SELECT * FROM reg_table WHERE token='$token'";
             $result = $conn->query($sql);
             if ($result->num_rows > 0) {
                 while($row = $result->fetch_assoc()) {
                     $name=$row['rname'];
                     $rtok=$row['token'];
                     
                 
            ?> 
            
            <tr>
                <td class="p-2"><a class="text-primary" href="../php/actions.php?id=<?php echo $rtok;?>"><?php echo $row['rname'];?></a></td>
                <td class="p-2"><?php echo $row['email'];?></td>
                <td class="p-2"><?php echo $row['pnum'];?></td>
                <td class="p-2"><?php echo $row['dateOfReg'];?></td>   
                <td class="p-2"><?php echo $row['report']; ?></td>
            </tr>
                <?php }}?>
            </table>
        <div class="row justify-content-center pt-3 mt-3"><h4></h4>
        <a name="" id="" class="btn btn-dark m-1 mb-3" href="../html/admin.php" role="button">Go Back</a></div>     
    </div>
        </div>

<?php
                
}
include "../php/footer.php";
?>