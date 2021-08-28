<?php
include "../database/connection.php";
include "../php/header.php";
$id="";
    if($id=$_GET['edit']){
        
        echo "<div class='results row justify-content-center bg-light' style='overflow-x:scroll'><h3 class='pt-5'>Edit your query:</h3></div>
        <div class='results row bg-light pl-5' style='overflow-x:scroll'>
            <table border='1' padding='2' class='text-center'>
                <tr class='p-3'>
                <th class='p-2'>Name</th>
                <th class='p-2'>Password</th>
                <th class='p-2'>Bio</th>
                <th class='p-2'>Date of Birth</th>
                <th class='p-2'>Facebook</th>
                <th class='p-2'>Whatsapp</th>
                <th class='p-2'>Linked In</th>
                
                <th class='p-2'>Hobby One</th>
                <th class='p-2'>Hobby Two</th>
                <th class='p-2'>Hobby Three</th>
                <th class='p-2'>Job</th>
                <th class='p-2'>Organization</th>
                <th class='p-2'>Location</th>
                <th class='p-2'>Position</th>
                <th class='p-2'>Gender</th>
            </tr>";
        $sql="SELECT * FROM reg_table WHERE token='$id'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo " <form action='update.php' method='post' style='float:left;'>
                    <tr><td>
                    <input type='text' name='rname' value='".$row['rname']."'></td>";
                    echo "<td><input type='text' name='pw' value='".$row['password']."'></td>";
                   
            
        }
    }
        $sql="SELECT * FROM profile WHERE token='$id'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<td><input type='text' name='bio' value='".$row['bio']."'></td>";
                    echo "<td><input type='text' name='dob' value='".$row['dob']."'></td>";
                    echo "<td><input type='text' name='fb' value='".$row['fb']."'></td>";
                    echo "<td><input type='text' name='wa' value='".$row['wa']."'></td>";
                    echo "<td><input type='text' name='ln' value='".$row['ln']."'></td>";
                    
                    echo "<td><input type='text' name='hone' value='".$row['hone']."'></td>";
                    echo "<td><input type='text' name='htwo' value='".$row['htwo']."'></td>";
                    echo "<td><input type='text' name='hthree' value='".$row['hthree']."'></td>";
                    echo "<td><input type='text' name='jt' value='".$row['job']."'></td>";
                    echo "<td><input type='text' name='og' value='".$row['org']."'></td>";
                    echo "<td><input type='text' name='lc' value='".$row['location']."'></td>";
                    echo "<td><input type='text' name='pos' value='".$row['position']."'></td>";
                    echo "<td><input type='text' name='gen' value='".$row['Gender']."'></td></tr><br>";
            }
        }
        ?>
         
        </table> 
        </div>
        <div class='results row justify-content-center bg-light' style='overflow-x:scroll'>
        <a href="update.php"><button class="btn-dark mt-4 mx-2 mb-5" value="" style="float:left;">Submit</button>
        </a></form>
        </form><a href="profile.php"><button class="btn-dark mt-4 mx-2 mb-5" value="" style="float:left;">Return</button>
        </a></div>
        <?php
    }
    else{
        echo "<h3>SomeThing went wrong";
    }
    include "../php/footer.php";
?>