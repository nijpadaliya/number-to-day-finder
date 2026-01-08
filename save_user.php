<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require "../loops/config.php";


$user_no = (int) $_POST['user_no'];
$query = "INSERT INTO user (user_no) VALUES ('$user_no')";




$query = "INSERT INTO user (user_no) VALUES ('$user_no')";

if (mysqli_query($conn, $query)) {
    header("Location: ../forms.php");
    exit();
} else {
    echo "MySQL Error: " . mysqli_error($conn);
}
