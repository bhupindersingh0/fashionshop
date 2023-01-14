 <?php
$con=mysqli_connect("localhost","root","","project");
$x="select sum(price) from cart";
$y=mysqli_query($con,$x);
while($c=mysqli_fetch_array($y))

	echo $c[0];
	
?>