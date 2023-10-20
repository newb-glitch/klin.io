<?php

// Create connection
$conn = new mysqli('localhost','root','','database');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect data from the HTML form
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$password = $_POST['password'];
$number = $_POST['contact'];
$user = $_POST['usr'];

// Insert data into the SQL database
$sql = "INSERT INTO regform (fname, lname, gender, email, password, number, user_type) VALUES ('$fname','$lname','$gender', '$email','$password','$number','$user')";

if ($conn->query($sql) === true) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>