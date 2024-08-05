<?php include('dbcon.php');
include('session_admin.php');
include('get_agent.php');
include('average.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/rating_agent.css" />
</head>

<body>
    <nav class="navbar">
        <img src="images/level6.jpg" alt="logo" class="lvllogo">
        <a href="index.php" class="dashlogout">Logout</a>
    </nav>
    <!--<div id="welcome">
        <p>Hello <?php echo $row1['firstname']; ?>!</p>
    </div> -->
    <div id="mainmenu">
        <div id="sidemenu">
            <h1>Summary</h1>
            <p>Number of Ratings</p>
            <h2><?php echo $numberofratings ?></h2>
            <p>Average Ratings</p>
            <h2><?php echo $averagerating ?></h2>
        </div>
        <h1></h1>
        <table class="content-table">
            <thead class=" thead">
                <tr id="table">
                    <th>Name/Email</th>
                    <th>Feedback</th>
                    <th>Comment</th>
                    <th>Rating</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * from ratings WHERE user_id = $id";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    foreach ($result as $row) {
                        $date = $row['date'];
                        $rating = $row['rating'];
                ?>
                        <tr>
                            <td><?php echo $row['email']; ?></td>

                            <td><?php echo $row['feedback1'] . ' ' . $row['feedback2'] . ' ' . $row['feedback3'] . ' ' . $row['feedback4'] . ' ' . $row['feedback5'] . ' ' . $row['feedback6'] . ' ' . $row['feedback7'] . ' ' . $row['feedback8']; ?></td>
                            <td><?php echo $row['comment']; ?></td>
                            <td id=" ratings">
                                <?php
                                $ratings = $rating;
                                switch ($ratings) {
                                    case "1":
                                        echo '<img src="images/1.png" alt="icon" width = "150px" />';
                                        break;
                                    case "2":
                                        echo '<img src="images/2.png" alt="icon" width = "150px" />';
                                        break;
                                    case "3":
                                        echo '<img src="images/3.png" alt="icon" width = "150px" />';
                                        break;
                                    case "4":
                                        echo '<img src="images/4.png" alt="icon" width = "150px" />';
                                        break;
                                    case "5":
                                        echo '<img src="images/5.png" alt="icon" width = "150px" />';
                                        break;
                                }
                                ?></td>
                            <td class="tdate"><?php echo $date; ?></td>
                        </tr>
                <?php
                    }
                }

                ?>
            </tbody>
        </table>
    </div>
</body>

</html>