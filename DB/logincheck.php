<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
$username=$_POST['username'];
$userpw=$_POST['userpw'];
if('khuphj@gmail.com' == $userpw and 'g2820480' == $username)
{
	echo"<script>alert('어드민이시네요');location.href='../admin/pages/tables/userinfo.php';</script>";
	$_SESSION['name'] = 'admin';
}
else
{
	echo"<script>alert('비밀번호가 틀렸습니다. ');history.go(-1);</script>";
}

?>