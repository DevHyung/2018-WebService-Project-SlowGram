<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
$username=$_POST['username'];
$userpw=$_POST['userpw'];
if('PW' == $userpw and 'ID' == $username)
{
	echo"<script>alert('로그인 성공');location.href='../admin/pages/tables/userinfo.php';</script>";
	$_SESSION['name'] = 'admin';
}
else
{
	echo"<script>alert('비밀번호가 틀렸습니다. ');history.go(-1);</script>";
}

?>