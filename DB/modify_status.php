<?php
$graph=$_POST['graph'];
$btcAddress = $_POST['btcAddress'];
require "dbconfig.php";
$sql = "UPDATE status SET graph='$graph', btcAddress='$btcAddress' WHERE username='admin'";

if ($db->query($sql) === TRUE) {
	echo"<script>alert('수정되었습니다.');history.go(-1);</script>";
    
} 
//require "dbconfig.php";
//$sql_new = "SELECT * from userlist where id = BINARY('$username')";
//print_r($sql_new);
//history.go(-1);
mysqli_close($db);

?>