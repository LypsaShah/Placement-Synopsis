<?php
session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'detail');

$name = $_POST['user'];
$depart = $_POST['depart'];
$roll = $_POST['roll'];
$sem = $_POST['sem'];
$gender = $_POST['gender'];
$contact = $_POST['contact'];
$address = $_POST['address'];

$s = " select * from info where name = '$name'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1){
  echo"Username Already Taken";
}
else {
   $reg="insert into info(name,depart,roll,sem,gender,contact,address) values('$name','$depart','$roll','$sem','$gender','$contact','$address')";
   mysqli_query($con,$reg);
   echo"Register Successful";
}
