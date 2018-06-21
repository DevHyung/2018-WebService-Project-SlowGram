<?php
$username=$_GET['username'];
require "dbconfig.php";
$sql = "UPDATE post SET isPost='r' WHERE idx='$username'";
if ($db->query($sql) === TRUE) {
    echo"<script>window.close();</script>";
} 
//require "dbconfig.php";
//$sql_new = "SELECT * from userlist where id = BINARY('$username')";
//print_r($sql_new);
//history.go(-1);
mysqli_close($db);

?>