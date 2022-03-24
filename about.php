<?php

$con = mysqli_connect('localhost', 'root');

if($con){
    echo "Connection Successfully";
}
else {
    echo "Connection Failed";
}

mysqli_select_db($con, 'art_gallery');

$name = $_POST["name"];
$email = $_POST["email"];
$num = $_POST["num"];

$query = "INSERT INTO `contact_form` (`name`, `email`, `number`) VALUES ('$name', '$email', '$num')";

mysqli_query($con, $query);
header("Location:index.php")

?>