<?php
$servername="localhost";
$username="root";
$password="";
$dbname = "test";

$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 
#echo "Connected successfully <br>" ;
if(isset($_POST['submit']))
{
	$USERNAME = $_POST['username'];
	$PASSWORD = $_POST['password'];
	$DOB = $_POST['dob'];
	#echo $TYPE;echo $FirstName;echo $MiddleName;echo $LastName;echo $Gender;echo $Address;echo $Contact;echo $BloodGroup;echo $DOB;echo $Branch;
	$sql="INSERT INTO login(Uname,PW,DOB)VALUES ('$USERNAME','$PASSWORD','$DOB')";
	if(!mysqli_query($conn,$sql))
	{
		echo 'NOT INSERTED PERSONAL RECORDS';
	}
	else
	{
		
		echo " Login credentials INSERTED SUCCESSFULLY!!!";
	}
}
?>
		<!doctype html>
		<html>
		<head>
		<title>New User ID and Password</title>
		</head>
		<body background="Images/newlogin.png">
		<form action="#" method="POST">
		<div style = "position:relative; left:500px; top:50px";class="user"></br></br>
		<input type="text" id="$username" style="height:30px;width:150px;border-color:pink;border-width:4" name="username" size="35" placeholder="  New Username"required/></td>
		<br><br>
		<input type="password" id="$password" style="height:30px;width:150px;border-color:pink;border-width:4" name="password" size="35"  placeholder="  New Password"></td>
		</br><br>
		<a style="color:white;font-size:24px">Date Of Birth</a></br>
		<input type="date" id="$dob" style="height:30px;width:170px;border-color:pink;border-width:4" name="dob" size="35"  placeholder="D O B"></td>
		</br><br>
		<input type="submit" id="$sumbit"  name="submit" value="S U B M I T"style="background-color:pink;height:55px; width: 100px"></button>
		</div>
		</form>
		</body>
		</html>		
		