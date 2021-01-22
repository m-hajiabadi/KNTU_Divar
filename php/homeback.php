<?php
$conn = new mysqli("localhost","root","","divar");
$baseUrl = "/KNTU_DIVAR/";

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
$sql = 'SELECT id,name, city,cost,image FROM advertising';
// mysqli_select_db('divar');
$retval = mysqli_query( $conn, $sql);

if(! $retval ) {
   die('Could not get data: ' . mysql_error());
}
$ads = array();

while($row = mysqli_fetch_assoc($retval)) {
      array_push($ads,$row);
}


?>