<html>
<body>


<?php
$validateemail="";
$validatename="";
$validatepassword="";
$validateradio="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$uname=$_REQUEST["uname"];
	$email=$_REQUEST["email"];
	if(empty($uname) && (preg_match("/^[a-zA-Z-' ]*$/",$uname)) && $uname<5)
	{
		$validatename="Please Enter Valid name";
	}
	else
	{
		$validatename= "your name is " .$uname;
	}

	if (empty($email) ||!filter_var($email, FILTER_VALIDATE_EMAIL))
	{
		$validateemail= "Please Enter valid email";
	}
	else
	{
		$validateemail="your email is " .$email;
	}

	


}
?>

<form action="<?php echo $_SERVER["PHP_SELF"];?>" method = "post">
	<table>
	<tr> <td> Full Name: </td>
	<td> <input type="text" name ="fname"> </td></tr>
	<tr> <td> Email</td>
	<td> <input type="text" name="email"> <?php echo $validateemail; ?></td>
	<tr> <td> Username </td>
	<td> <input type="text" name ="uname"><?php echo $validatename; ?> </td></tr>
<tr> <td> Password </td>
	<td> <input type="Password" name ="pass"> </td></tr>
	<tr> <td> Confirm Password: </td>
	<td> <input type="Password" name ="Cpass"> </td></tr>
</tr>
</table>

	
<br>

	<br> <input type = "submit" value="Register">
<input type="Reset" name="Reset">
</form>
</body>
</html>
