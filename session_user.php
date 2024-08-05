<?php
include("dbcon.php");
$userquery = mysqli_query($conn, "SELECT * FROM users");
$userrow = mysqli_fetch_assoc($userquery);

$userid = $userrow['user_id'];
$userfirstname = $userrow['firstname'];
$userlastname = $userrow['lastname'];
