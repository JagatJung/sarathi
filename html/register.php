<?php 
include "../php/header.php";
session_start();
?>
</head>
  <body>
    <div class="container-fluid justify-content-center m-3">
        <div class="row justify-content-center mt-5">
            <div class="col-9 col-sm-9 col-lg-5 login_form_content mt-1 mb-3">
                <img src="logo.png" class="login_image">
                
                <!--the form starts here-->
                <form class="pl-5 pr-5 pb-3" action="../database/registerdb.php" method="post">
                    <div class="form-group">
                      <label for="email">Enter your email address:</label>
                      <span class="input-group-text bg-dark"><i class="fas fa-user"></i><input type="email" class="form-control ml-3" placeholder="Enter email" name="mail"></span>                      
                      <div class="row justify-content-center mt-4">
                      <button type="submit" class="btn btn-outline-warning btn-block">Send Me the token Number</button>
                   <br><label>or</label>
                   </div>
                 <a href="../login.php"><label style="margin-left: 37%;"> Go Back to LOGIN</label></a>
                </div>
                </div>
               
                </form>
            </div>
            
        </div>
    </div> 

<?php 
include "../php/footer.php";
?>