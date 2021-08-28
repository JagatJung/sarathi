<?php
session_start();
include "../php/header.php";
if(isset($_SESSION['token'])){
    $token=$_SESSION['token'];
    include"../database/connection.php";
    $sql="SELECT * FROM reg_table WHERE token='$token'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $name=$row['rname'];
            
        }
    }
   
?>

    <div class="container-fluid bg-light">
        <div class="row justify-content-center pt-5"><h2>Hello <?php echo $name?> </h2></div> 
        <div class="row justify-content-center pt-1"><h4>Here are some of the accounts with report</h4><div></div></div>
        <div class="row justify-content-center pt-1">
            <table border="1">
            <tr>
                <th class="p-2">Name</th>
                <th class="p-2">Email Address</th>
                <th class="p-2">Phone Number</th>
                <th class="p-2">Date of Regestration</th>
                <th class="p-2">Number of Reports</th>
            </tr>
            <?php
             $sql="SELECT * FROM reg_table WHERE report>3";
             $result = $conn->query($sql);
             if ($result->num_rows > 0) {
                 while($row = $result->fetch_assoc()) {
                     $name=$row['rname'];
                     $rtok=$row['token'];
                     
             if($row['status']!=0){    
            ?> 
            
            <tr>
                <td class="p-2"><a class="text-primary" href="../php/actions.php?id=<?php echo $rtok;?>"><?php echo $row['rname'];?></a></td>
                <td class="p-2"><?php echo $row['email'];?></td>
                <td class="p-2"><?php echo $row['pnum'];?></td>
                <td class="p-2"><?php echo $row['dateOfReg'];?></td>   
                <td class="p-2"><?php echo $row['report']; ?></td>
            </tr>
                <?php }}}?>
            </table></div>
        <div class="row justify-content-center pt-3 mt-3"><h4>To search for specific account search here</h4>
        <a name="" id="" class="btn btn-dark m-1 mb-3" href="searchid.php" role="button">Search</a></div>     
    </div>
        </div>

<?php
                
}
include "../php/footer.php";
?>