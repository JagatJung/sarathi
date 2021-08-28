<?php 
include "../php/header.php";
?>
</head>
  <body>
    <div class="container-fluid justify-content-center m-3">
        <div class="row justify-content-center mt-5">
            <div class="col-9 col-sm-9 col-lg-5 login_form_content mt-1 mb-3">
                <img src="logo.png" class="login_image">
                
                <!--the form starts here-->
                <form class="pl-5 pr-5 pb-3" action="../database/registeruser.php" method="post">
                    <div class="form-group">
                      <label for="email">Enter your Full Name</label>
                      <span class="input-group-text bg-dark"><i class="fas fa-user"></i><input type="text" class="form-control ml-3" placeholder="Enter email" name="mail" required></span>                      
                                        
                      <label class="mt-2" for="email">Enter your phone number</label>
                      <span class="input-group-text bg-dark"><i class="fas fa-phone"></i><input type="text" class="form-control ml-3" placeholder="Enter Phone number" name="num" required></span>

                      <label class="mt-2" for="email">Enter your password</label>
                      <span class="input-group-text bg-dark"><i class="fa fa-key" aria-hidden="true"></i><input type="password" class="form-control ml-3" placeholder="set a password" name="pass" id="pass" required></span>

                      <label class="mt-2" for="email">Comform your password</label>
                      <span class="input-group-text bg-dark"><i class="fa fa-key" aria-hidden="true"></i><input type="password" class="form-control ml-3" placeholder="comform your password" name="cpass" id= "cpass" required></span> 

                      <div class="row justify-content-center mt-4 m-1">
                      <button type="submit" class="btn btn-outline-warning btn-block">Register ME</button>
                   <br><label>or</label>
                   </div>
                 <a href="../login.php"><label style="margin-left: 37%;"> Go Back to LOGIN</label></a>
                </div>
                </div>
               
                </form>
              
</div>
</div>
</div>
<script>
//form validate left to be done
</script>
<?php 
include "../php/footer.php";
?>