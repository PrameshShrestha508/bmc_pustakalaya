<?php
session_start();
$id=$_SESSION['username'];
include("config.php");
$itemno=$_REQUEST['itemno'];
if(!$_SESSION['username']=='')
{

 if(mysqli_query($connection,"insert into mycart(username,new_id) values('$id','$itemno')"))
    {
	   header("location:cart.php");
    }
else
{
header("location:index.php");
}
}
else{
    header("location:login-register.php");
}
	
?>

