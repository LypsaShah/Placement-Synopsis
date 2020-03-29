<?php
session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'select');

$name = $_POST['user'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$gender = $_POST['gender'];
$skills = $_POST['skills'];
$internship = $_POST['internship'];

$s = " select * from person where name = '$name'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1){
  echo"Username Already Taken";
}
else {
   $reg="insert into person(name,email,contact,gender,skills,internship) values('$name','$email','$contact','$gender','$skills','$internship')";
   mysqli_query($con,$reg);
   echo"Register Successful";
}
