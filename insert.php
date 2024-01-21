<?php
error_reporting(0);
$con = mysqli_connect('localhost','root','','blood_donation_db','3306');

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$fn = mysqli_real_escape_string($con, $_POST['n1']);
$ln = mysqli_real_escape_string($con, $_POST['n2']);
$gender = mysqli_real_escape_string($con, $_POST['gender']);
$dob = mysqli_real_escape_string($con, $_POST['dt']);
$bloodgrp = mysqli_real_escape_string($con, $_POST['bd']);
$aadhar = mysqli_real_escape_string($con, $_POST['b']);
$mob = mysqli_real_escape_string($con, $_POST['a']);
$mail = mysqli_real_escape_string($con, $_POST['m']);
$addr = mysqli_real_escape_string($con, $_POST['ad']);
$city = mysqli_real_escape_string($con, $_POST['ct']);
$state = mysqli_real_escape_string($con, $_POST['st']);

$que = "INSERT INTO registered_donors (first_name, last_name, gender, dob, blood_group, aadhar, mobile, email, address, city, state) VALUES ('$fn', '$ln', '$gender', '$dob', '$bloodgrp', '$aadhar', '$mob', '$mail', '$addr', '$city', '$state')";
$ret = mysqli_query($con, $que);

if ($ret) {
    echo "<script>alert('Thanks For Registration.')</script>";
} else {
    echo "Error in inserting records ... Err Desc : " . mysqli_error($con);
}

mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Successful</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #007bff; /* Blue background */
            text-align: center;
            padding: 20px;
            color: white; /* White text color for better contrast */
        }

        .thank-you-container {
            background-color: white;
            margin: auto;
            width: 60%;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            color: black; /* Black text color for the content */
        }

        h1 {
            color: darkred;
        }

        p {
            font-size: 18px;
            color: #333;
            line-height: 1.6;
        }

        blockquote {
            font-style: italic;
            color: #555;
            margin: 20px 0;
            padding: 10px;
            border-left: 3px solid darkred;
        }

        input[type="button"] {
            background-color: darkred;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 5px;
        }

        input[type="button"]:hover {
            background-color: #b30000;
        }
    </style>
</head>
<body>
    <div class="thank-you-container">
        <h1>Thank You for Registering!</h1>
        <p>Your contribution is incredibly valuable and can save lives. We truly appreciate your willingness to help others.</p>
        <blockquote>“The blood is red gold in time of saving a life.”</blockquote>
        <p>Remember, your one act of kindness can be the reason for someone's smile. Keep making a difference!</p>
        <center><a href="homepage.php"><input type="button" value="Go To HomePage" ></a></center>
    </div>
</body>
</html>


