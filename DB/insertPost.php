<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
$name = $_SESSION['name'];
$imgurl = $name.'.jpg';
$content=$_POST['content'];
require_once("dbconfig.php");
$sql = "INSERT INTO post (id,content,date,isPost,imgUrl) VALUES ('$name','$content',now(),'n','$imgurl');";
if ($db->query($sql) === TRUE) {
	mysqli_close($db);
	echo"<script>alert('발송되었습니다.');history.go(-1);</script>";
    
} 
//require "dbconfig.php";
//$sql_new = "SELECT * from userlist where id = BINARY('$username')";
//print_r($sql_new);
//history.go(-1);


?>