<?php include('dbcon.php');
include('user_info.php');
$sqlcon = "SELECT count(*) as total from ratings where user_id = $id";
$resultcon = mysqli_query($conn, $sqlcon);
$data = mysqli_fetch_assoc($resultcon);
$numberofratings = $data['total'];


$sqlsum = "SELECT SUM(rating) as sum_rating from ratings where user_id = $id";
$resultsum = mysqli_query($conn, $sqlsum);
$datasum = mysqli_fetch_assoc($resultsum);
$sumofratings = $datasum['sum_rating'];
$ave = $sumofratings / $numberofratings;
$averagerating = number_format($ave, 2, '.', ' ');
