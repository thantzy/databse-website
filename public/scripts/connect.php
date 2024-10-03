<?php

$conn = mysqli_connect('localhost', 'root', '', 'cybercode');


function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM list WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function data($id) {
    global $conn;
    mysqli_query($conn, "UPDATE list SET name = '$nama', age = '$age', address = '$address' WHERE id = '$id'");
    return mysqli_affected_rows($conn);
}