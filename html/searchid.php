<?php
include "../php/header.php";
?>
<div class="container-fluid bg-danger ">
<div class="row justify-content-center">
<h1 class="pt-5">Search your query here</h1>
</div>
<div class="row justify-content-center pb-5">
<form action="result.php" method="post">
    <label>Catogery</label>
    <select id="cat" name="cat">
        <option value="rname">Name</option>
        <option value="email">Email</option>
    </select><br>
    <input id="item" name="item" type="text" placeholder="Thing you want to search" required>
    <input type="submit" placeholder="Submit">
</form>
</div>
</div>
<?php
include "../php/footer.php";
?>