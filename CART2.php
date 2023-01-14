<?php
$con=mysqli_connect("localhost","root","","project");
if(isset($_GET['x']))
{
	$sno=$_GET['x'];
	$sel="select* from shoping where sno='$sno'";
	$yy=mysqli_query($con,$sel);
	while($c=mysqli_fetch_array ($yy))
	{
		$name=$c['name'];
		$price=$c['price'];
		$image=$c['image'];

	
	$con=mysqli_connect("localhost","root","","project");
	$x="insert into cart(name,price,photo)values('$name','$price','$image')";
	$y=mysqli_query($con,$x);
	if($y)
	{
		echo"<script>alert('Product successfully added into cart');</script>";
		header("location:shop.php");
	}
	}
	}

	?>