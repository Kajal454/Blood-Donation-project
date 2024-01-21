<?php
error_reporting(0);
$con = mysqli_connect('localhost', 'root', '', 'blood_donation_db', '3306');

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$fn = mysqli_real_escape_string($con, $_POST['n1']);
$ln = mysqli_real_escape_string($con, $_POST['n2']);
$dob = mysqli_real_escape_string($con, $_POST['dt']);
$bloodgrp = mysqli_real_escape_string($con, $_POST['bd']);
$unit = mysqli_real_escape_string($con, $_POST['u']);
$hname = mysqli_real_escape_string($con, $_POST['hname']);
$hadd = mysqli_real_escape_string($con, $_POST['hadd']);
$city = mysqli_real_escape_string($con, $_POST['ct']);
$state = mysqli_real_escape_string($con, $_POST['st']);
$mob = mysqli_real_escape_string($con, $_POST['a']);
$aadhar = mysqli_real_escape_string($con, $_POST['b']);

$que = "INSERT INTO blood_requests (first_name, last_name, dob, blood_group, unit_needed, hospital_name, hospital_address, city, state, mobile, aadhar) VALUES ('$fn', '$ln', '$dob', '$bloodgrp', '$unit', '$hname', '$hadd', '$city', '$state', '$mob', '$aadhar')";
$ret = mysqli_query($con, $que);

if ($ret) {
    echo "<script>alert('Thanks for reporting us, we will help you soon.')</script>";
} else {
    echo "Error in inserting records ... Err Desc : " . mysqli_error($con);
}

mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Submission Successful</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #007bff;
            color: white; 
            text-align: center;
            padding: 20px;
        }

        .info-container {
            background-color: white;
            color: black; 
            margin: auto;
            width: 60%;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        h1 {
            color: darkred;
        }

        p {
            font-size: 18px;
            color: #333;
            line-height: 1.6;
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
    <div class="info-container">
        <h1>Submission Successful</h1>
        <p>Thank you for submitting your information. Your request for blood donation has been recorded and is being processed. We understand the urgency of your need and are working diligently to match you with suitable donors.</p>
        <p>We appreciate your trust in us and assure you that we are doing our utmost to assist you. If you have any further questions or require immediate assistance, please contact our support team.</p>
        <center><a href='homepage.php'><input type='button' value='Go To HomePage'></a></center>
    </div>
</body>
</html>




