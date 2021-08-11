<?php

$link = mysqli_connect("localhost:3307", "root", "", "demo");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$id = mysqli_real_escape_string($link, $_POST['id']);
 

$sql = "DELETE FROM persons WHERE id='$id'";
if(mysqli_query($link, $sql)){
    echo "Records were deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 

mysqli_close($link);
?>
