<?php
include("dbcon.php");
if (!isset($_SESSION)) {
    session_start();
}
error_reporting(0);
if (!isset($_SESSION['id'])) {
    header('location:index.php');
}
$id = $_SESSION['id'];
$query = mysqli_query($conn, "SELECT * FROM users WHERE user_id ='$id'");

$row = mysqli_fetch_array($query);

$firstname = $row['firstname'];
$lastname = $row['lastname'];
