<?php
session_start();
$id=$_SESSION['username'];
include("config.php");
$itemno=$_REQUEST['itemno'];
$sql="select * from mycart where new_id='$itemno' && username='$id'";
$query_run = mysqli_query($connection, $sql);
    while($row = mysqli_fetch_assoc($query_run))
        {  
            $cid=$row['new_id'];
           
         
        } 
if($cid==$itemno){
    header("Refresh:5; url=checkout-direct.php?itemno='$itemno'");
    echo '<h1>Your Product is already in cart.<h1>
        <h3>Redirecting To checkout.....</h3>';
}else if(!$_SESSION['username']=='')
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

