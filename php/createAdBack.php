<?php
extract($_POST);
$conn = new mysqli("localhost", "root", "", "divar");

// Check connection
if ($conn->connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli->connect_error;
  exit();
} elseif (isset($_POST['save'])) {

  $image = $_FILES['file']['name'];
  $target_dir = "../upload/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);
  // var_dump($target_file);
  // Select file type
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

  //upload file 
  move_uploaded_file($_FILES['file']['tmp_name'], $target_dir . $image);
  //insert advertising record to database 
  $query = "INSERT INTO advertising(name,description,city, cost, type,image,phone) VALUES ('$name','$desc', '$city', '$cost', '$type','".$image."','$phone')";
  var_dump($query);
  $sql = mysqli_query($conn, $query) or die('Could Not Perform the Query' . mysqli_error($conn));


  $allVars = get_defined_vars();
  // var_dump($allVars);
  //return to home page 
  header("Location: ../home.php");
}
?>