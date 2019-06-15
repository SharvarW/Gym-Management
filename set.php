<html>
<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="gym";
try{
$conn = mysqli_connect($servername, $username,$password,$dbname);
#echo("successful in connection");
echo("1");
}catch(MySQLi_Sql_Exception $ex){
echo("error in connection");
}

if(isset($_POST['submit'])){
$Set_name=$_POST['Set_name'];
$Body_part=$_POST['Body_part'];
$Category=$_POST['Category'];


$query = "INSERT INTO sets(Set_name,Body_part,Category) VALUES ('$Set_name','$Body_part','$Category')";
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
<title>Salary</title>
</head>

<body background="Images/salary.jpg">

<style>
input[type=text]  
{
	height:28px;
	width:220px;
	border-color:orange;
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
<td><input type="text" name="Set_name" placeholder="Enter the Set name"required/><br></td>
</tr>
<tr>
<tr>
<td>
</select>
					</br></br>
					<select name="Body_part" id="Body_part"required/>
					<option value="">Select the Body part</option>
					<option value="Biceps">Biceps</option>
					<option value="Triceps">Triceps</option>
					<option value="Chest">Chest</option>
					<option value="Back">Back</option>
					<option value="Legs">Legs</option>
					<option value="Abdominal">Abdominal</option>
					</select></br></br>
<td>					
</tr>

<td>
Category</br>
			<input  type="radio" id="$Category" name="Category" value="Beginner"><a style="color:white ;font-size :20px">Beginner</a>
			<input type="radio" id="$Category" name="Category" value="Intermedite"><a style="color:white ;font-size :20px">Intermedite</a>
			<input type="radio" id="$Category" name="Category" value="Advanced"><a style="color:white;font-size :20px">Advanced</a>
			</br>
</td>
</br>
</tr>
<td><input type="submit" name="submit" align="center" value="Submit"></td>
</tr>
</table>

</form>
</body>
</html>
<!-- YAAR HE ALIGN KARUN GHYA RE PLZ MI JHOPTOY -->