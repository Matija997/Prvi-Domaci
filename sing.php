<?php
if(strlen($_POST["password"])<8){
    echo"<script>alert('Šifra mora da ima bar 8 karaktera.')</script>";
}
if(!preg_match("/[a-z]/i",$_POST["password"])){
    echo'<script>alert("Šifra mora da ima bar 1 slovo.")</script>';
}
if(!preg_match("/[0-9]/i",$_POST["password"])){
    echo'<script>alert("Šifra mora da ima bar 1 broj.")</script>';
}

$passwor_hash=password_hash($_POST ["password"],PASSWORD_DEFAULT);

$mysqli=require __DIR__."/baza.php";

$sql="INSERT INTO user(name,email,password_hash) VALUES(?,?,?)";

$stmt=$mysqli->stmt_init();

if(! $stmt->prepare($sql)){
    die("SQL error: ".$mysqli->error);
}

$stmt->bind_param("sss",$_POST["name"],$_POST["email"],$passwor_hash);

if($stmt->execute()){


    header("Location: index.php");
    echo '<script>alert("Uspešno  ste se registrovali")</script>';
}
else{
   
    echo'<script>alert("Već imate nalog sa ovim email-om.")</script>';
}
