<?php

if(isset($_GET['x']))
{
	$sno=$_GET['x'];
$con=mysqli_connect("localhost","root","","project");


	$x="delete from cart where sno='$sno'";
	$y=mysqli_query($con,$x);
	if($y)
	{
		header("location:shop.php");
	}
	else{
		echo"not deletd";
	}
}
?>