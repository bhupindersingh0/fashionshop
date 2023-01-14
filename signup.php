
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
<h1 class="Form__Title Heading u-h1">S I G N U P</h1><br>
<h5>Please fill in the information below:</h5><br><form method="post" enctype="multipart/form-data">

<p><input type="text" name="user" placeholder="Name" class="form-control" style="width:30%" required></p>

<p><input type="email" name="id" placeholder="Email Address" class="form-control" style="width:30%" required></p>

<p><input type="text" name="number" placeholder="Contact" class="form-control" style="width:30%" required></p>

<p><input type="password" name="pass" placeholder="Password" class="form-control" style="width:30%" required></p>

<p><input type="submit" name="sub" class="form-control"  value="CREATE MY ACCOUNT" style="width:30%" id="p1"></p><br>
</form>


<?php

	if(isset($_POST['sub']))
	{
	$name=$_POST['user'];
	$email=$_POST['id'];
	$number=$_POST['number'];
	$password=$_POST['pass'];
	
	
	$con=mysqli_connect("localhost","root","","project");

	$p="select * from form where email='$email'and contact='$number' ";
	$o=mysqli_query($con,$p);
	$u=mysqli_num_rows($o);
	$a="select * from form where email='$email'";
	$b="select * from form where contact='$number'";
	$x=mysqli_query($con,$a);
	$y=mysqli_query($con,$b);
	$i=mysqli_num_rows($x);
	$j=mysqli_num_rows($y);
	if($u>0)
	{
	echo"<h4><p>This Email Address and Contact is Already Exist</p>
	<p>Please Enter Another Email Id and Contact</p></h4>";
	}

	elseif($i>0){
	echo"<h4><p>This Email Address Already Exist</p>
	<p>Please Enter Another Email Address</p></h4>";
	}
	elseif($j>0){
	echo"<h4><p>This Contact is Already Exist</p>
	<p>Please Enter Another Contact</p></h4>";
	}
	else{
		$c="insert into form(name,email,contact,password)values('$name','$email','$number','$password')";
	   $z=mysqli_query($con,$c);
	    if($z)
	{
		echo"<h4>Registration Successful</h4>";
	}
		
	}}
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
    