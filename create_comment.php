<?php

$name = $_POST['name'];
$text = $_POST['text'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "internship";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$query = "INSERT into `comments`(`name`, `comment`) VALUES ('$name', '$text')";
$result = mysqli_query($conn, $query);
if ($result) {
    header("Location: comments.php");
} else {
    echo '"Something went wrong"';
}
