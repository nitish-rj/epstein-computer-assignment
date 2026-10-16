<?php
$server="localhost";
$username="root";
$password="";
$dbname= "users";
$conn = mysqli_connect($server,$username,$password,$dbname);
if ($conn -> connect_error) {
    echo "<script>console.log('Failed to connect to database..');</script>";
} else {
    echo "<script>console.log('Connected to database..');</script>";
}

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$msg = $_POST['msg'];
$sql = "INSERT INTO `users` VALUES ('$fname', '$lname', '$email', '$phone', '$msg')";
if ($conn -> query($sql)===TRUE) {
    echo "Signed Up Successfully";
} else {
    echo "Failure to Sign up";
}
$conn -> close();
?>