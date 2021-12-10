<?php
session_start();

$con=mysqli_connect('localhost','root','','schoolform');
if($con){
    echo"success";
}
else{
    die("connection unsccessuful".mysqli_connect_error());
}

?>