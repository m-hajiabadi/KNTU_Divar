<?php 
if (isset($_GET['id'])){
    $conn = new mysqli("localhost","root","","divar");
    $id = $_GET['id'];
// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
$sql = "SELECT * FROM advertising WHERE id='$id'";
// mysqli_select_db('divar');
$retval = mysqli_query( $conn, $sql);

if(! $retval ) {
   die('Could not get data: ' . mysql_error());
}

$ad = mysqli_fetch_assoc($retval);
// var_dump(get_defined_vars());

}






?>