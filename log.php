<?php
$conn = new mysqli('localhost','root','','database');
if($conn->connect_error){
    die("Connection Failed: ". $conn->connect_error);
}
$email = $_POST['email'];
$password = $_POST['password'];
$usert = $_POST['usert'];
$sql = "SELECT * FROM regform WHERE email = '$email' AND password = '$password' AND user_type='$usert'";
$result = $conn->query($sql);
if($result->num_rows>0){
    echo"nice one";
} else{
    echo "fuck off";
}
$conn->close();
?>