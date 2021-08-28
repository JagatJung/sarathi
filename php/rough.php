<?php 
    // function checkNumber($num){
    //     if($num>=1)
    //         throw new Exception("value must be less than 1");
    // return true;
    // }

    // try{
    //     checkNumber(0);
    //     echo ("if you see this text, the passes value is less than 1");
    // }
    // catch(Exception $e){
    //     echo "Exception message: ".$e->getMessage();
    // }

    // function checkNumber($num){
    //     if($num==0){
    //         throw new Exception("The value must not be 0");
    //     }
    // }

    // try{
    //     $fnum=45;
    //     $snum=0;
    //     if($fnum/$snum){
    //         throw new Exception("The value must be greater than 0");
    //     }
    //     // checkNumber($snum);
    //     // echo("if you see this text, the passes value is not equal to 0");
    // }
    // catch(Exception $e){
    //     echo "Exception message: ".$e->getMessage();
    // }
    include "../php/tokengenerator.php";
      echo $datas->getMail();
?> 