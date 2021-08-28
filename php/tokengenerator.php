<?php
class MyData{
    var $mail="";
    var $token="";
    var $pass="";
    function tokenGen($num){
        $charset = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
        $token="";
        for($i=0;$i<$num;$i++){
            $token=$token."".$charset[rand(0,61)];
        }
        $this->token=$token;
        return $token;
    }   
    function setMail($pmail){
        $this->mail=$pmail;
    }
    function getMail(){
        return $this->mail;
    }
    
    function setPass($pmail){
        $this->pass=$pmail;
    }
    function getPass(){
        return $this->pass;
    }

    function getToken(){
        return $this->token;
    }
}
$datas=new MyData();
?>
