<?php
include "connect.php";
$id = $_GET['id'];
$sql = "SELECT * FROM list WHERE id = '$id'";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<form action="" method="post">
    <ul class="ul-create">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        <li><label for="">Name</label>
        <input type="text" name="name" id="" class="input-first" value="<?= $data['name'] ?>"></li>
        <li><label for="">Age</label>
        <input type="text" name="age" id="" class="input-second" value="<?= $data['age'] ?>"></li>
        <li><label for="">Address</label>
        <input type="text" name="addres" id="" class="input-third" value="<?= $data['address'] ?>"></li>
        <button type="submit" class="submit-button">submit</button>
        </ul>
    </form>


</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')  {
    $id = $_POST['id'];
    $nama = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['addres'];
    
    $sql = "UPDATE list SET name = '$nama', age = '$age', address = '$address' WHERE id = '$id'";
    $query = mysqli_query($conn, $sql);

    if($query){
        echo "
    <script>
    alert('DATA BERHASIL DIEDIT SILAHKAN KEMBALI KE HALAMAN');
    document.location.href = 'index.php';
    </script>"; 
} else {
    echo "
   <script>
   alert('DATA GAGAL DIEDIT COBA LAGI');
   document.location.href = 'index.php';
   </script>";
}
}


?>