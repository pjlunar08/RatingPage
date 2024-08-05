
<?php
include("dbcon.php");
if (isset($_POST['submit'])) {
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $sql = "SELECT * from admin where username = '$username' and password = '$password'";
    $sql1 = "SELECT * from users where username = '$username' and password = '$password'";

    $result = mysqli_query($conn, $sql);
    $result1 = mysqli_query($conn, $sql1);

    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);
    $count1 = mysqli_num_rows($result1);


    if ($count == 1) {
        session_start();
        header("Location:admin.php");
        $_SESSION['id'] = $row['user_id'];
    } elseif ($count1 == 1) {
        session_start();
        header("Location:agent.php");
        $_SESSION['id'] = $row1['user_id'];
    } else {
        echo "<script> alert('Invalid Username or Password!'); window.location.href='index.php';</script>";
    }
}
?>