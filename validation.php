<head>
    <title>Update data</title>
</head>

<?php
session_start();

$conct= mysqli_connect('localhost','root','');
mysqli_select_db($conct,'Visitor Management');
$username =$_POST['username'];
$name=$_POST['name'];
$email =$_POST['email'];
$phone = $_POST['phone'];
$pass = $_POST['password'];
$s = "select * from admin where username = '$username' && password= '$pass'";
$result = mysqli_query($conct,$s);
$num = mysqli_num_rows($result);
if($num==1){
    header('location:adminlogin.html');
}
else{
   header('location:admin.html');
}
?>

