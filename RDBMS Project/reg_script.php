<html>
    <head>
        <title>Home | Chores Made Easy Home Repairs</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="index.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>    
    <body>
<?php
require("includes/header.php");
$con = mysqli_connect("localhost", "root", "", "homerepairs") or die(mysqli_error($con));
session_start();
$name = mysqli_escape_string($con, filter_input(INPUT_POST, 'name'));
$contact= filter_input(INPUT_POST, 'contact');
$email =  mysqli_escape_string($con, filter_input(INPUT_POST, 'email'));
$address =  mysqli_escape_string($con, filter_input(INPUT_POST, 'address'));
$city =  mysqli_escape_string($con, filter_input(INPUT_POST, 'city'));
$can_afford= filter_input(INPUT_POST, 'can_afford');
$description =  mysqli_escape_string($con, filter_input(INPUT_POST, 'description'));
$user_registration_query = "insert into application(name,contact,email,address,city,can_afford,description) values ('$name', '$contact', '$email','$address','$city','$can_afford','$description')";
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
?>
<p style="font-size: 25px">Your application has been submitted.Your application id is 
    <?php
    $sql = "SELECT * FROM application WHERE contact=$contact";
    $result = mysqli_query($con, $sql) or die(mysqli_error($con));
    $row = mysqli_fetch_array($result);
    echo $row['id'];
    ?>
    .Thank you for associating with Chores Made Easy Home Repairs</p>
<footer style="position: fixed">
    <div class="container">
        <center>
            © Copyright 2019 | Home Repairs | All Rights Reserved.| Site Design by Roystan and Rohith.                                </center>
    </div>
</footer></body>
</html>