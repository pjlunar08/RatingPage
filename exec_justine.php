<?php
include('dbcon.php');
require('user_info.php');
$ip = UserInfo::get_ip();
if (isset($_POST['submit'])) {
    $rating = $_POST['rating'];
    $comment = $_POST['comment'];
    $year = date('Y');
    $month = date('F');
    $day = date('j');
    $date = date('F j,Y');
    $email = $_POST['email'];
    $ips = 'Justine' . $ip . $date;
    $feedback1 = $_POST['feedback1'];
    $feedback2 = $_POST['feedback2'];
    $feedback3 = $_POST['feedback3'];
    $feedback4 = $_POST['feedback4'];
    $feedback5 = $_POST['feedback5'];
    $feedback6 = $_POST['feedback6'];
    $feedback7 = $_POST['feedback7'];
    $feedback8 = $_POST['feedback8'];

    $query = "INSERT INTO ratings VALUES ('', '4','$year', '$month', '$day', '$email','$rating', '" . addslashes($comment) . "', 'Justine', '$date', '$ip','$ips','$feedback1','$feedback2','$feedback3','$feedback4','$feedback5','$feedback6','$feedback7','$feedback8')";

    $i = "SELECT ipdatename from ratings where ipdatename = '$ips'";
    $ii = mysqli_query($conn, $i);

    if (mysqli_num_rows($ii) > 0) {
        echo "<script> alert('You already submitted review for Justine today. Thank you!'); window.location.href='thank.php';</script>";
    } else {
        mysqli_query($conn, $query);
        echo "<script> window.location.href='thank.php'; </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic+Coding&display=swap" rel="stylesheet">
    <title>Rating Page</title>
</head>

<body>
    <div id="container">

        <div class="whole">
            <img src="images/level6.jpg" alt="" class="level-img">
            <div class="headline">
                <h1>Share your reservation experience with us.</h1>
            </div>
            <hr>
            <form name="form1" method="POST">
                <div class="col-sm-12">
                    <label class="control-label"></label>
                    <div class="headline">
                        <h2>How satisfied were you with the assistance provided by Justine?</h2>
                    </div>
                    <div class="star-rating" required>
                        <input id="star-5" type="radio" name="rating" value="5" required="required" />
                        <label for="star-5" title="5 stars">★</label>
                        &nbsp;
                        <input id="star-4" type="radio" name="rating" value="4" required="required" />
                        <label for="star-4" title="4 stars">★</label>
                        &nbsp;
                        <input id="star-3" type="radio" name="rating" value="3" required="required" />
                        <label for="star-3" title="3 stars">★</label>
                        &nbsp;
                        <input id="star-2" type="radio" name="rating" value="2" required="required" />
                        <label for="star-2" title="2 stars">★</label>
                        &nbsp;
                        <input id="star-1" type="radio" name="rating" value="1" required="required" />
                        <label for="star-1" title="1 star">★</label>
                    </div>
                    <hr>
                    <div class="headline2">
                        <h2>What did she do effectively?</h2>
                        <div class="comment">
                            <div class="comment-col1">
                                <div class="comment1">
                                    <input type="hidden" name="feedback1" value="">
                                    <input type="checkbox" name="feedback1" value="Good Customer Service">
                                    <label for="GoodCustomerService" class="chckbx">Good Customer Service</label>
                                </div>
                                <div class="comment1">
                                    <input type="hidden" name="feedback2" value="">
                                    <input type="checkbox" name="feedback2" value="Easy to Understand">
                                    <label for="Courteous" class="chckbx">Easy to Understand</label>
                                </div>

                            </div>
                            <div class="comment-col2">

                                <div class="comment2">
                                    <input type="hidden" name="feedback3" value="">
                                    <input type="checkbox" name="feedback3" value="Knowledgeable">
                                    <label for="Emphatic" class="chckbx">Knowledgeable</label>
                                </div>
                                <div class="comment2">
                                    <input type="hidden" name="feedback4" value="">
                                    <input type="checkbox" name="feedback4" value="Courteous">
                                    <label for="Helpful" class="chckbx">Courteous</label>
                                </div>

                                <div class="comment2">
                                    <input type="hidden" name="feedback5" value="">
                                    <input type="checkbox" name="feedback5" value="Emphatic">
                                    <label for="Patient" class="chckbx">Emphatic</label>
                                </div>
                            </div>

                            <div class="comment-col3">
                                <div class="comment3">
                                    <input type="hidden" name="feedback6" value="">
                                    <input type="checkbox" name="feedback6" value="Helpful">
                                    <label for="GoodCustomerService" class="chckbx">Helpful</label>
                                </div>
                                <div class="comment3">
                                    <input type="hidden" name="feedback7" value="">
                                    <input type="checkbox" name="feedback7" value="Patient" id="cb">
                                    <label for="GoodCustomerService" class="chckbx">Patient</label>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="headline3">
                    <h2>Do you have any feedback or suggestions for Justine?</h2>
                </div>
                <div class="comments">
                    <textarea class="txtbox" type="text" id="comment" name="comment" size="150" rows="4"></textarea><br>

                </div>
                <hr>
                <div class="emailadd">
                    <h2>Name or Email Address</h2>
                    <input class="txtbox" type="text" id="email" name="email" size="30" rows="1" required placeholder="Please enter your name or email address" />
                </div>
                <input type="submit" id="btn" value="Submit" name="submit" class="btn btn-primary" />

        </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </div>
</body>

</html>