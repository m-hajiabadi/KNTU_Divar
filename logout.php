<?php 
setcookie("username","",time()-100000,"/");
session_destroy();
header("location: home.php");
?>