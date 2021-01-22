<?php
$conn = new mysqli("localhost", "root", "", "divar");
$baseUrl = "/KNTU_DIVAR/";

// Check connection
if ($conn->connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli->connect_error;
  exit();
}

if (isset($_GET['pageno'])) {
  $pageno = $_GET['pageno'];
} else {
  $pageno = 1;
}
$no_of_records_per_page = 6;
$offset = ($pageno - 1) * $no_of_records_per_page;

$total_pages_sql = "SELECT COUNT(*) FROM advertising";
$result = mysqli_query($conn, $total_pages_sql);
$total_rows = mysqli_fetch_array($result)[0];
$total_pages = ceil($total_rows / $no_of_records_per_page);

$sql = "SELECT * FROM advertising LIMIT $offset, $no_of_records_per_page";
$res_data = mysqli_query($conn, $sql);
$ads = array();

while ($row = mysqli_fetch_assoc($res_data)) {
  array_push($ads, $row);
}
// $sql = 'SELECT id,name, city,cost,type,description,image FROM advertising';
// mysqli_select_db('divar');
// $retval = mysqli_query($conn, $sql);

// if (!$retval) {
//   die('Could not get data: ' . mysql_error());
// }
// $ads = array();

// while ($row = mysqli_fetch_assoc($retval)) {
//   array_push($ads, $row);
// }





mysqli_close($conn);
?>