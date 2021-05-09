<?php

// database connection
$conn = mysqli_connect('localhost', 'root', '', 'test');
    
// Getting data from form
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$subject = $_POST['subject'];
$city = $_POST['city'];
$mobile = $_POST['mobile'];

// insert query
$sql = "INSERT INTO test(fname, lname, gender, age, subject, city, mobile) values('$fname', '$lname', '$gender', '$age','$subject', '$city', '$mobile')";
$result = mysqli_query($conn, $sql);
?>