<?php
require 'connect.php';

if($_SERVER['REQUEST_METHOD'] == 'POST')  {
    $nama = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['addres'];
    
    $sql = "INSERT INTO list(name, age, address) VALUES('$nama', '$age', '$address')";
    $query = mysqli_query($conn, $sql);

    IF($query){
        header('location: index.php');
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENAMBAHKAN DATA</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <header class="tambah-container">
        <h1>TAMBAH DATA</h1>
    </header>
    <form action="" method="post">
    <ul class="ul-create">
        <li><label for="">Name</label>
        <input type="text" name="name" id="" class="input-first"></li>
        <li><label for="">Age</label>
        <input type="text" name="age" id="" class="input-second"></li>
        <li><label for="">Address</label>
        <input type="text" name="addres" id="" class="input-third"></li>
        <button type="submit" class="submit-button">submit</button>
        </ul>
    </form>



</body>
</html>