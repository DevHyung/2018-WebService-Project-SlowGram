<?php

require_once("../../../DB/dbconfig.php");
$sql2 = "SELECT count(*) FROM rsk.user_info where joinDate = curdate();";
$query2 = mysqli_query($db,$sql2);
$row=mysqli_fetch_array($query2);
$newcount = (int)$row['count(*)'];

$sql3 = "SELECT count(*) FROM rsk.transaction where isApproval = 'n'";
$query3 = mysqli_query($db,$sql3);
$row=mysqli_fetch_array($query3);
$newtransaction = (int)$row['count(*)'];
//echo "<script>alert('$newcount,$newtransaction');</script>";
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
if(!isset($_SESSION['nt'])) {
  $_SESSION['nt'] = $newtransaction;
}
else{
	if ( $_SESSION['nt'] != $newtransaction )
	{
		echo "<script>var audio = new Audio('./alarm.mp3');audio.play();</script>";
		$_SESSION['nt'] = $newtransaction;
	}
}
?>
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
  <i class="fa fa-bell-o"></i>
  <span class="label label-warning"><?php echo  $newtransaction;?></span>
</a>
<ul class="dropdown-menu">
  <li class="header">You have <?php echo  $newtransaction;?> notifications</li>
  <li>
    <!-- inner menu: contains the actual data -->
    <ul class="menu">
      <li>
        <a href="#">
          <i class="fa fa-users text-aqua"></i><?php echo  $newcount;?>  new members joined today
        </a>
      </li>
       <li>
        <a href="#">
          <i class="fa fa-shopping-cart text-green"></i> <?php echo $newtransaction;?> new transaction
        </a>
      </li>
     
    </ul>
  </li>
</ul>
