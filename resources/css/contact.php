<?php

$localhost = "localhost";
$username = "root";
$password = "";
$database = "omni";
$conn = mysqli_connect('localhost','root','','omni');

if($conn){
    echo "Connection successful";
}
else{
    echo "No connection";
}

mysqli_select_db($conn,'omni');

$name = $_POST['name'];
$email = $_POST['email'];
$find = $_POST['find'];
$right = $_POST['right'];
$text = $_POST['text'];

$query = "INSERT INTO `data`(`name`, `email`, `find`, `right`, `text`) VALUES ('$name','$email','$find','$right','$text')";
mysqli_query($conn,$query);
?>