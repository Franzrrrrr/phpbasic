<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>username:</label><br>
        <input type="text" name="username"><br>
        <label>password:</label><br>
        <input type="password" name="password"><br>
        <label>pesanan</label><br>
        <input type="text" name="pesanan"><br>
        <input type="submit" value="Log in"><br>

    </form>
</body>
</html>

<?php

    $name = $_POST['username'];    
    $password = $_POST['password'];    
    $pesanan = $_POST['pesanan'];    
    $name = $_POST['username'];
    $harga = 12000 ;
    $total = $pesanan * $harga ;      

    $profil = 'password     : ' . $password . "<br>". $name ; 



    echo "$profil telah memesan makanan sebanyak $pesanan <br>
    total harga : Rp$total,00"

?>