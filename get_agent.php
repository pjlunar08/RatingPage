<?php
include('dbcon.php');
$sql1 = "SELECT * from users WHERE user_id = $id";
$result1 = mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_assoc($result1);
