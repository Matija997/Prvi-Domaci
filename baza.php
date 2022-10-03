<?php

$host="localhost";
$dbname="domaci1";
$username="root";
$password="";

$mysqli=new mysqli(hostname:$host,username:$username,password:$password,database:$dbname);

if($mysqli->connect_errno){
    echo'<script>alert("Loša konekcija sa bazom!")</script>';
}

return $mysqli;
