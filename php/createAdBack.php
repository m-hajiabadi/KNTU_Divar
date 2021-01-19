<?php
extract($_POST);
$conn = new mysqli("localhost","root","","divar");

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}elseif(isset($_POST['save']))
{

        $query="INSERT INTO advertising(name,description,city, cost, type) VALUES ('$name','$desc', '$city', '$cost', '$type')";
        $sql=mysqli_query($conn,$query)or die('Could Not Perform the Query'. mysqli_error($conn));
        header ("Location: ../home.php");
    
}

?>