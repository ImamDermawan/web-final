<?php
include '../koneksi.php';
session_start();

if (isset($_SESSION ['username'])){
    header ("Location : dashboard.php");
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/styles.css">
        <title>Login</title>
    </head>
    <body>
    <div class="container">
        <h1>Selamat Datang!</h1>
        <p>Masuk sebagai admin</p>
        <form action="login_action.php" method="POST">
            <p>Username</p>
            <input type="text" placeholder="Masukan Username" name="username_admin">
            <p>Password</p>
            <input type="password" placeholder="Masukan Password" name="password_admin">
       
            <button type="submit" name="login">Login</button>
        </div>
        </form>
    </div>
    </body>
</html>