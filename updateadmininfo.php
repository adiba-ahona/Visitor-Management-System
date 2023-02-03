<?php
$connct= mysqli_connect('localhost','root','','visitor management');
$db= mysqli_select_db($connct,'visitor management');

$username=$_POST['username'];
$name=$_POST['name'];
$email =$_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];

$query= "UPDATE `admin` SET `name`='".$name."',`email`='".$email."',`phone`='".$phone."',`password`='".$password."' WHERE `username`='$username';";
$query_run = mysqli_query($connct,$query);
if($query_run){
    echo '<script type="text/javascript"> alert("Data updated")</script>';
}
else{
    echo '<script type="text/javascript"> alert("Data not updated")</script>';
}


