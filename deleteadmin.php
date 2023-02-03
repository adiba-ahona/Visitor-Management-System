<?php
$conct= mysqli_connect('localhost','root','');
$db=mysqli_select_db($conct,'visitor management');
if(isset($_POST['delete'])){
    $username= $_POST['username'];
    $query= "DELETE FROM `admin` WHERE username='$username';";
    $query_run=mysqli_query($conct,$query);
    if($query_run){
        echo '<script type="text/javascript"> alert("Data has been deleted")</script>';
    }
    else{
        echo '<script type="text/javascript"> alert("Data not deleted")</script>';

    }
}

