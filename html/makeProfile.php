<?php
include "../php/header.php";
?> 
 <body class="bg-dark">
     
  <div class="container container-fluid float-centre">
    <div class="container bg-danger m-5 col-sm-10" style="border-radius: 10px;">
    <br>
    <H1>Enter the details to edit your portfolio</H1>
    <br>  
    <form action="../database/userdata.php" method="POST">      
        <div class="row px-5 pt-2">
          <div class="form-group col-6">
            <label for="profile picture">Enter your date of birth</label>
            <input type="date" class="form-control" name="dob" id="" placeholder="Enter your DOB" required>
          </div> 
        </div>

        <div class="row px-5 pt-2">
          <div class="form-group col-6">
            <label for="organization"><h4>Gender</h4></label>
            <input type="text" class="form-control" name="gen" placeholder="Enter your gender" required> 
          </div>
        </div>

        <div class="row px-5 pt-2">
          <div class="form-group col-6">
            <label for="organization"><h4>location</h4></label>
            <input type="text" class="form-control" name="loc" placeholder="Enter your location" required>
          </div>
        </div>

        <div class="row px-5 pt-2">
          <div class="form-group col-6">
            <label for="profile picture"><h4>Social media Links</h4></label>
            <br><label for="profile picture">Facebook</label>
            <input type="text" class="form-control" name="fb" placeholder="Enter your facebook link" required>
            <br>
            <label for="profile picture">Linked In</label>
            <input type="text" class="form-control" name="ln" placeholder="Enter your linked in link" required>
            <br>
            <label for="profile picture">Whatsapp</label>
            <input type="text" class="form-control" name="wa" placeholder="Enter your whats app link" required>
          </div> 
        </div>

        <div class="row px-5 pt-2">
          <div class="form-group col-6">
            <label for="profile picture"><h4>Hobbies</h4></label>
            <br><label for="profile picture">Main hobby</label>
            <input type="text" class="form-control" name="hby" placeholder="Enter your hobby" required>
            <br>
            <label for="profile picture">Other Hobby</label>
            <input type="text" class="form-control" name="othby" placeholder="Enter your other Hobby" required>
            <br>
            <label for="profile picture">other hobby</label>
            <input type="text" class="form-control" name="ohby" placeholder="Enter your other Hobby" required>
          </div> 
        </div>

        <div class="row px-5 pt-2">
          <div class="form-group col-6">
            <label for="job title"><h4>Your job title</h4></label>
            <input type="text" class="form-control" name="jt" placeholder="Enter your jpb title" required>
          </div>
        </div>

        <div class="row px-5 pt-2">
          <div class="form-group col-6">
            <label for="organization"><h4>organization</h4></label>
            <input type="text" class="form-control" name="org" placeholder="Enter your work place name"> required
          </div>
        </div>

        <div class="row px-5 pt-2">
          <div class="form-group col-6">
            <label for="organization"><h4>Current Relationship status</h4></label>
            <input type="text" class="form-control" name="rel" placeholder="Enter your relationship status" required> 
          </div>
        </div>


        <div class="row px-5 pt-3 pb-2 mx-1">
            <label for="descritpion">Write some thing about you with-in 200 words</label>
            <br>
            <textarea class="form-control" name="desc" rows="3" required></textarea>
          </div>
          <div class="row justify-content-end pr-5 pb-5 pt-3"><button class="btn btn-warning px-5 ">submit</button></div>
      </form>
      </div>
  </div>
               
<?php
include "../php/footer.php";
?>