<?php
$con=new mysqli('localhost','root','','yt_crud_operation');
// $con=mysqli_connect('localhost','root','','yt_crud_opreation');

if(!$con){
    die(mysqli_error($con));
}