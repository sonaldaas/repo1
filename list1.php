<?php

$link = mysqli_connect("localhost:3307", "root", "", "register");
$sql = "SELECT * FROM persons";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border=1>";
            echo "<tr>";
                echo "<th>Id</th>";
                echo "<th>Username</th>";
                echo "<th>Password</th>";
                echo "<th>Email</th>";
				echo "<th>Gender</th>";
				echo "<th>Address</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
          //  echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
			   echo "<td>" . $row['gender'] . "</td>";
			   echo "<td>" . $row['address'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";

        mysqli_free_result($result);
    } 
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 

mysqli_close($link);
?>