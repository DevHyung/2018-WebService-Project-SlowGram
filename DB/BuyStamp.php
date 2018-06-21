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
$num = $_GET['num'];

$sql2 = "SELECT stamp FROM user where username = '$name'";
$query2 = mysqli_query($db,$sql2);
$row=mysqli_fetch_array($query2);
$newcount = (int)$row['stamp']+(int)$num;
$sql = "UPDATE user SET stamp='$newcount' WHERE username='$name'";
if ($db->query($sql) === TRUE) {
    echo"<script>alert('구매 되었습니다.');history.go(-1);</script>";
} 
//require "dbconfig.php";
//$sql_new = "SELECT * from userlist where id = BINARY('$username')";
//print_r($sql_new);
//
mysqli_close($db);

?>