
	<?php
{
	include("a.php");
}
?>
	
	<!--LOGIN START-->
	<br>
	<head>
<style>
#p1
{
	background-color:#6A8367;color:white; border-color:#6A8367;
}
#p1:hover
{
	background-color:white;color:black;
}
</head>
</style>
<center>
<body>
<br>
<h1 class="Form__Title Heading u-h1">C O N T A C T&nbsp;&nbsp;&nbsp;&nbsp;U S</h1><br>
<h3 class="Form__Title Heading u-h1">GET IN TOUCH</h3>
<p><h5>Comments,Questions?Drop us a note,and we'll get back with you shortly!</h5></p><br>
<form method="post" enctype="multipart/form-data">

<p><input type="text" name="user" placeholder="Name" class="form-control" style="width:30%" required></p>

<p><input type="email" name="id" placeholder="Email Address" class="form-control" style="width:30%" required></p>

<p><input type="text" name="number" placeholder="Contact" class="form-control" style="width:30%" required></p>

<p><textarea name="msg" placeholder="Message"  class="form-control" style="width:30%" required></textarea></p>

<p><input type="submit" name="sub" class="form-control"  value="SEND MESSAGE" style="width:30%" id="p1"></p><br>

</form>



<?php

	if(isset($_POST['sub']))
	{
	$name=$_POST['user'];
	$email=$_POST['id'];
	$number=$_POST['number'];
	$message=$_POST['msg'];

$con=mysqli_connect("localhost","root","","project");
$x="insert into query(name,email,contact,message)values('$name','$email','$number','$message')";
$y=mysqli_query($con,$x);
if($y)
{
	echo"<h4>Sent</h4>";
}
else
{
	echo"<h4>Not Sent</h4>";
}
	}
	?>
</form>
</body>
</center>
<br>
	
    <?php
{
	include("b.php");
}
?>