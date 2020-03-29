<?php
session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'userquery');

$name = $_POST['user'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$msg = $_POST['message'];


$s = " select * from users where name = '$name'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1){
  echo"Username Already Taken";
}
else {
   $reg="insert into users(name,subject,email,message) values('$name','$subject','$email','$msg')";
   mysqli_query($con,$reg);
   echo"Register Successful";
}