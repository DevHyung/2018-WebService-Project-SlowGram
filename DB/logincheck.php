<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
$username=$_POST['username'];
$userpw=$_POST['userpw'];
if('g2820480' == $userpw and 'khuphj@gmail.com' == $username)
{
	echo"<script>alert('로그인 성공');location.href='../admin/pages/tables/post.php';</script>";
	$_SESSION['name'] = '박형준';
}
else
{
	echo"<script>alert('비밀번호가 틀렸습니다. ');history.go(-1);</script>";
}

?>