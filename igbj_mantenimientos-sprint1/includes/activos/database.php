<?php
function get_connection()
{
    $servername = "localhost";
    $database = "mantenimientos";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        return $conn;
    }
}
