<?php
require 'connect.php';
$sql = 'SELECT * FROM list';
$query = mysqli_query($conn, $sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIST DATA</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>
            LIST DATA EKSKUL
        </h1>
    </header>

    <section class="section-content">
    <table border="2" cellspacing="0" cellpadding="20">
        <tr class="header-table">
            <td>
                Name
            </td>
            <td>
                Age
            </td>
            <td>
                Address
            </td>
            <td>
                Aksi
            </td>
        </tr>
        <?php
            while($data = mysqli_fetch_assoc($query)){
        ?>
        <tr>
            <td>
                <?= $data['name']?>
            </td>
            <td>
                <?= $data['age']?>
            </td>
            <td>
                <?= $data['address']?>
            </td>
            <td class="aksi-content">
            <button class="edit-container"><a href="edit.php?id=<?= $data["id"];?>">Edit</a></button>
            <button class="delete-border"><a href="delete.php?id=<?= $data["id"]; ?>">Delete</a></button>
            </td>
        </tr>
        <?php
            }
        ?>
    </table>
    </section>

   
    <a href="create.php" class="link">
        <button class="button-index">Add More Data</button>
    </a>
   
</body>
</html>