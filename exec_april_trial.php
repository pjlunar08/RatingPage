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
    $ips = 'April' . $ip . $date;
    $feedback1 = $_POST['feedback1'];
    $feedback2 = $_POST['feedback2'];
    $feedback3 = $_POST['feedback3'];
    $feedback4 = $_POST['feedback4'];
    $feedback5 = $_POST['feedback5'];
    $feedback6 = $_POST['feedback6'];
    $feedback7 = $_POST['feedback7'];
    $feedback8 = $_POST['feedback8'];

    $query = "INSERT INTO ratings VALUES ('', '2','$year', '$month', '$day', '$email', '$rating', '" . addslashes($comment) . "', 'April', '$date', '$ip','$ips','$feedback1','$feedback2','$feedback3','$feedback4','$feedback5','$feedback6','$feedback7','$feedback8')";

    $i = "SELECT ipdatename from ratings where ipdatename = '$ips'";
    $ii = mysqli_query($conn, $i);

    if (mysqli_num_rows($ii) > 0) {
        echo "<script> alert('You already submitted review for April today. Thank you!'); window.location.href='thank.php';</script>";
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
                        <h2>How satisfied were you with the assistance provided by April?</h2>
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
                                    <input type="hidden" name="feedback" value="">
                                    <input type="checkbox" name="feedback" id="feedback1" value="Knowledgeable">
                                    <label for="Knowledgeable" class="chckbx" onclick="ckChange(this)">Knowledgeable</label>
                                </div>
                                <div class="comment1">
                                    <input type="hidden" name="feedback" value="">
                                    <input type="checkbox" name="feedback" id="feedback2" value="Courteous">
                                    <label for="Courteous" class="chckbx" onclick="ckChange(this)">Courteous</label>
                                </div>
                                <div class="comment1">
                                    <input type="hidden" name="feedback" value="">
                                    <input type="checkbox" name="feedback" id="feedback3" value="Emphatic">
                                    <label for="Emphatic" class="chckbx" onclick="ckChange(this)">Emphatic</label>
                                </div>
                            </div>
                            <div class="comment-col2">
                                <div class="comment2">
                                    <input type="hidden" name="feedback" value="">
                                    <input type="radio" name="feedback" id="feedback4" value="Helpful">
                                    <label for="Helpful" class="chckbx" onclick="ckChange(this)">Helpful</label>
                                </div>

                                <div class="comment2">
                                    <input type="hidden" name="feedback" value="">
                                    <input type="checkbox" name="feedback" id="feedback5" value="Patient">
                                    <label for="Patient" class="chckbx" onclick="ckChange(this)">Patient</label>
                                </div>
                                <div class="comment2">
                                    <input type="hidden" name="feedback" value="">
                                    <input type="checkbox" name="feedback" id="feedback6" value="Easy to understand">
                                    <label for="Easytounderstand" class="chckbx" onclick="ckChange(this)">Easy to understand</label>
                                </div>
                            </div>

                            <div class="comment-col3">
                                <div class="comment3">
                                    <input type="hidden" name="feedback" value="">
                                    <input type="checkbox" name="feedback" id="feedback7" value="Good Customer Service">
                                    <label for="GoodCustomerService" class="chckbx" onclick="ckChange(this)">Good Customer Service</label>
                                </div>
                                <div class="comment3">
                                    <input type="hidden" name="feedback" value="">
                                    <input type="checkbox" name="feedback" id="feedback8" value="None">
                                    <label for="None" class="chckbx" onclick="ckChange(this)">None</label>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="headline3">
                    <h2>Do you have any feedback or suggestions for April?</h2>
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
    </div>
</body>
<script>
    function ckChange(ckType) {
        var ckName = document.getElementsByName(ckType.name);
        var checked = document.getElementById(ckType.id);

        if (checked.checked) {
            for (var i = 0; i < ckName.length; i++) {

                if (!ckName[i].checked) {
                    ckName[i].disabled = true;
                } else {
                    ckName[i].disabled = false;
                }
            }
        } else {
            for (var i = 0; i < ckName.length; i++) {
                ckName[i].disabled = false;
            }
        }
    }
</script>

</html>