<?php

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
if(!isset($_SESSION['name'])) {
  echo"<script>alert('권한이 없습니다.');location.href='../../../index.php';</script>";
  //echo "<meta http-equiv='refresh' content='0;url=../../index.php'>";
  //exit;
}
require "dbconfig.php";

$name = $_SESSION['name'];
$sql2 = "SELECT stamp FROM user where username = '$name'";
$query2 = mysqli_query($db,$sql2);
$row=mysqli_fetch_array($query2);
$newcount = (int)$row['stamp']-2;

$username=$_GET['username'];

$sql = "UPDATE post SET isPost='f' WHERE idx='$username'";
if ($db->query($sql) === TRUE) {
	$sql = "UPDATE user SET stamp='$newcount' WHERE username='$name'";
	$db->query($sql);
    echo"<script>window.close();</script>";
} 
//require "dbconfig.php";
//$sql_new = "SELECT * from userlist where id = BINARY('$username')";
//print_r($sql_new);
//history.go(-1);
mysqli_close($db);

?>