
<?php
{
	include("a.php");
}
?>
   
	
	<!--LOGIN START-->
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
<h1 class="Form__Title Heading u-h1">L O G I N</h1><br>
<h5>Please enter your e-mail and password:</h5><br>
<form method="post" enctype="multipart/form-data">
<p><input type="email" name="id" placeholder="Email Address" class="form-control" style="width:30%" required></p>

<p><input type="password" name="pass" placeholder="Password" class="form-control" style="width:30%" required></p>

<p><input type="submit" name="sub" class="form-control"  value="LOGIN" style="width:30%" id="p1"></p><br>




<?php

	if(isset($_POST['sub']))
	{
	$email=$_POST['id'];
	$password=$_POST['pass'];

$con=mysqli_connect("localhost","root","","project");
$x="select * from form where email='$email' and password='$password'";
$y=mysqli_query($con,$x);
$n=mysqli_num_rows($y);
if($n>0)
{
echo"<h4>Login Successful</h4>";
}
else
{	
echo"<h4>Wrong Email Address and Password</h4>";
}
	}
	
	?>
Don't have an account?&nbsp <a href="signup.php" style="color:blue">Create one</a>
</form>
</body>
</center>
<br>
	
      <?php
{
	include("b.php");
}
?>