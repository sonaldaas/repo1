<?php
 $link = mysqli_connect("localhost:3307", "root", "", "register");

if($link === false){
   die("ERROR: Could not connect. " . mysqli_connect_error());
}
var_dump($_POST);
$id =  $_POST['id'];
$username = mysqli_real_escape_string($link, $_POST['name']);
$password = mysqli_real_escape_string($link, $_POST['pass']);
$email = mysqli_real_escape_string($link, $_POST['Email']);
$mobileno = $_POST['phone'];
$gender = mysqli_real_escape_string($link, $_POST['gender']);
$address= mysqli_real_escape_string($link, $_POST['address']);

$sql = "INSERT INTO persons (id,username, password, email,mobileno,gender,address) VALUES ('$id','$username', '$password', '$email','$mobileno','$gender','$address')";
if(mysqli_query($link, $sql)){
   echo "Data successfully Saved.";
} else{
   echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}mysqli_close($link);



?>