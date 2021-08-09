<?php
 $link = mysqli_connect("localhost:3307", "root", "", "demo");

if($link === false){
   die("ERROR: Could not connect. " . mysqli_connect_error());
}

$id = mysqli_real_escape_string($link, $_POST['id']);
$first_name = mysqli_real_escape_string($link, $_POST['firstname']);
$last_name = mysqli_real_escape_string($link, $_POST['lastname']);
$email_address = mysqli_real_escape_string($link, $_POST['email']);

$sql = "INSERT INTO persons (id,first_name, last_name, email_address) VALUES ('$id','$first_name', '$last_name', '$email_address')";
if(mysqli_query($link, $sql)){
   echo "Data successfully Saved.";
} else{
   echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}mysqli_close($link);



?>