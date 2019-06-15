<html>
<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="test";
try{
$conn = mysqli_connect($servername, $username,$password,$dbname);
echo("successful in connection");
#echo("1");
}catch(MySQLi_Sql_Exception $ex){
echo("error in connection");
}

if(isset($_POST['submit']))
{
$Set_name=$_POST['Set_name'];
$Body_part=$_POST['Body'];
$Intermediate=$_POST['intermediate'];
$Beginner=$_POST['beginner'];
$Advance=$_POST['advance'];
$query="INSERT INTO set_details(Set_Name,Body_part,Beginner,Intermediate,Advance)VALUES ('$Set_name','$Body_part','$Beginner','$Intermediate','$Advance')";
	if(!mysqli_query($conn,$query))
	{
		echo 'Set details not inserted';
	}
	else
	{
		echo 'Set details inserted !';
	}
}
 
?>

<html>
<head>
<title>Sets</title>
</head>

<body background="Images/ss.jpg">

<style>
input[type=text]  
{
	height:28px;
	width:220px;
	border-color:red;
	border-width:4;
} 

input[type=submit]
{
	-moz-box-shadow:inset 0px 0px 15px 3px #23395e;
	-webkit-box-shadow:inset 0px 0px 15px 3px #23395e;
	box-shadow:inset 0px 0px 15px 3px #23395e;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #2e466e), color-stop(1, #415989));
	background:-moz-linear-gradient(top, #2e466e 5%, #415989 100%);
	background:-webkit-linear-gradient(top, #2e466e 5%, #415989 100%);
	background:-o-linear-gradient(top, #2e466e 5%, #415989 100%);
	background:-ms-linear-gradient(top, #2e466e 5%, #415989 100%);
	background:linear-gradient(to bottom, #2e466e 5%, #415989 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#2e466e', endColorstr='#415989',GradientType=0);
	background-color:#2e466e;
	-moz-border-radius:17px;
	-webkit-border-radius:17px;
	border-radius:17px;
	border:1px solid #1f2f47;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	padding:10px 30px;
	text-decoration:none;
	text-shadow:0px 1px 0px #263666;
}

td
{
	color: ivory;
	text-shadow: 3px 2px black;
	font-size: 30px;
}

div
{
	font-size: 30px;
	color: ivory;
	text-shadow: 3px 2px black;
}

</style>



<br>
<br>
<div class="well text-center" align="center"><?php echo date("d-m-Y");?> </div>

<form action="" method="post">
<table cellspacing="10" align="center">
<tr>
<br>
<br>
<td>Set Name</td>
<td><input type="text" name="Set_name" id="$Set_name" placeholder="Enter the Set name"required/><br></td>
</tr>
<tr>
<tr>
<td>Select Body Part</td>
					<td><select style="width:220px;height:25px;border-color:red;border-width:4" name="Body" id="$Body"required/>
					<option value="">Select</option>
					<option value="Biceps">Biceps</option>
					<option value="Triceps">Triceps</option>
					<option value="Chest">Chest</option>
					<option value="Back">Back</option>
					<option value="Legs">Legs</option>
					<option value="Abdominal">Abdominal</option>
					</select></td></br></br>
<td>					
</tr>
<tr>
<br>
<td>Set Details : Beginner</td>
<td><input type="text" name="beginner" id="$beginner" placeholder="Enter the Set name"required/><br></td>
</tr>
<tr>
<br>
<td>Set Details : Intermediate</td>
<td><input type="text" name="intermediate" id="$intermediate" placeholder="Enter the Set name"required/><br></td>
</tr>

<tr>
<br>
<td>Set Details : Advance</td>
<td><input type="text" name="advance" id="$advance" placeholder="Enter the Set name"required/><br></td>
</tr>

<tr>
<td><input type="submit" name="submit" align="center" value="Submit"></td>
</tr>
</table>

</form>
</body>
</html>
<!-- YAAR HE ALIGN KARUN GHYA RE PLZ MI JHOPTOY -->