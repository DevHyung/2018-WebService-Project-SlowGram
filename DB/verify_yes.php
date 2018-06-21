<?php
$username=$_GET['username'];
$idx = $_GET['idx'];
require "dbconfig.php";
$sql = "UPDATE transaction SET isApproval='y' WHERE username='$username' and idx = '$idx'";
if ($db->query($sql) === TRUE) {
	$sql="SELECT * FROM user_info where username ='$username'";
	$query = mysqli_query($db,$sql);
	$row=mysqli_fetch_array($query);
	$nowfund = $row['funds'];

	$sql="SELECT * FROM transaction WHERE username='$username' and idx = '$idx'";
	$query = mysqli_query($db,$sql);
	$row=mysqli_fetch_array($query);
	$addfund = $row['amount'];

	$newfund = (double)$nowfund + (double)$addfund*42500;

	$sql="UPDATE user_info SET funds='$newfund' WHERE username='$username'";
	$query = mysqli_query($db,$sql);
	$row=mysqli_fetch_array($query);
    echo"<script>window.close();</script>";
} 
//require "dbconfig.php";
//$sql_new = "SELECT * from userlist where id = BINARY('$username')";
//print_r($sql_new);
//history.go(-1);
mysqli_close($db);

?>