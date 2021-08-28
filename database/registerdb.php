<?php
session_start();
if(isset($_POST["mail"])){
    include "connection.php";
    $gmail=$_POST["mail"];
    echo "<br> the mailing address is ". $gmail;
    $sql = "SELECT password FROM reg_table WHERE email='$gmail'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<br>The account from the mail already exists";
        }
    else{
      //script for sending mail
      include "../php/tokengenerator.php";
      $token=$datas->tokenGen(6);
      
      $datas->setMail($gmail);
      
  //mail goes from here
        $to = $gmail;
        $subject = "Token for your registeration";

        $message = "
            <html>
            <head>
            <title>This is the mail for the verification your email</title>
            </head>
            <body>
            <p> Thank you for choosing us. Here is token for your registeration: ".$token."</p>
            </body>
            </html>
        ";

        // It is mandatory to set the content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers. From is required, rest other headers are optional
        $headers .= 'From: star5lakandri@gmail.com' . "\r\n";
        $headers .= 'Cc: star5lakandri@gmail.com' . "\r\n";
        $_SESSION["mail"]=$gmail;
        $_SESSION['token']=$token;
        mail($to,$subject,$message,$headers);
        header("Location: ../html/registerPass.php");
    }
    $conn->close();
}

?>