<?php
session_start();
if(isset($_SESSION["user_id"]))
{
    $mysqli= require __DIR__."/baza.php";

    $sql="SELECT * FROM user WHERE id = {$_SESSION["user_id"]} ";

    $result=$mysqli->query($sql);

    $user=$result->fetch_assoc();


}


?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
        <title>Dobrodošli</title>
    </head>
    <body>
        <h1>Dobrodošli</h1>

        <?php if(isset($user)): ?>
            <p>Zdravo  <?=htmlspecialchars($user["name"])?></p>
            <p><a href="home1.php">Nastavi</a></p>
            <p><a href="signout.php">Odjavi se</a></p>
        <?php else:?>
            <p><a href="index.php">Prijavi se</a></p>
        <?php endif;?>

    </body>
</html>