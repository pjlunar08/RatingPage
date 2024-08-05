<?php include('dbcon.php');
include('session_admin.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/rating.css" />
</head>

<body>
    <nav class="navbar">
        <img src="images/level6.jpg" alt="logo" class="lvllogo">
        <a href="admin.php" class="dash">Dashboard</a>
        <div class="dropdown">
            <a>Executives <span>▼</span></a>
            <div class="dropdown-content">
                <ul>
                    <li> <a href="agent_rating_april.php">April</a></li>
                    <li> <a href="agent_rating_novelle.php">Novelle</a></li>
                    <li> <a href="agent_rating_justine.php">Justine</a></li>
                </ul>
            </div>
        </div>
        <a href="index.php" class="dashlogout">Logout</a>
    </nav>
    <div id="welcome">
        <p>April's Dashboard</p>
    </div>
    <div class="tableratings">
        <table class="table">
            <thead class=" thead">
                <tr class="table" style="table-layout:fixed">
                    <th style="width: 20%">Name/Email</th>
                    <th style="width: 20%">Rating</th>
                    <th style="width: 50%">Feedback</th>
                    <th style="width: 50%">Comment</th>
                    <th style="width: 20%">Date</th>

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
                            <td><?php echo $row['feedback1'] . ' ' . $row['feedback2'] . ' ' . $row['feedback3'] . ' ' . $row['feedback4'] . ' ' . $row['feedback5'] . ' ' . $row['feedback6'] . ' ' . $row['feedback7'] . ' ' . $row['feedback8']; ?></td>
                            <td><?php echo $row['comment']; ?></td>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>