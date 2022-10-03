<?php
$mysqli= require __DIR__."/baza.php";
$is_invalid=false;
$sql=sprintf("SELECT * FROM user WHERE email='%s'",$mysqli->real_escape_string($_POST["email"]));

$result=$mysqli->query($sql);

$user=$result->fetch_assoc();

if($user){
    if(password_verify($_POST["password"],$user["password_hash"])){
       session_start();
       session_regenerate_id();
       $_SESSION["user_id"]=$user["id"];
       header("Location:home.php");
       exit;
    }else{
        $is_invalid=true;
      
    }
}
