<!DOCTYPE HTML>
<html>
<head> 
	<title> Registration</title> </head>
<body>
<style>
	#bar {background-color: white;
       width:800px;
       height: 400px;
       margin: auto; 
       margin-top: 50px;
       padding:10px;
       padding-top: 20px}
   </style>

<form>
<table>
	
<tr> <td> First Name: </td>
<td><input type="text" id = "name"> </td> </tr>
<tr><td> Last Name: </td>
	<td><input type="text" id = "name"> </td> </tr>
<tr><td> Email: </td>
	<td><input type="Email" id = "email"> </td> </tr>
<tr><td> Username: </td>
	<td><input type="text" id = "username"> </td> </tr>
	<tr><td> Password: </td>
	<td><input type="Password" id = "password"> </td> </tr>

<tr><td> Confirm Password: </td>
	<td><input type="ConPassword" id = "password"> </td> </tr>

</table>

	Gender
	<input type="radio" name="Gender">
	Male
	<input type="radio" name="Gender">
	Female 
	<input type="radio" name="Gender">
	Other  
	<br>

Date of Birth:
  <input type="date" id="birthday" name="birthday">
  <br>

  <input type="submit" name="submit" >
  <input type="Reset" name="Reset">
</form>
</body>
</html>