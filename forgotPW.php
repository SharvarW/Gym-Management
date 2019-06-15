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
echo "Connected successfully <br>" ;
if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$dob=$_POST['dob'];
	$password=$_POST['password'];
	$sql="select * from login where Uname='".$username."' AND DOB='".$dob."'";
	$result =$conn->query($sql);
	if($result->num_rows==1)
	{
		echo "  You can changed password! ";
		$sqlw="UPDATE login SET PW='$password' where Uname='$username'";
			if(!mysqli_query($conn,$sqlw))
			{
				echo " Not updated";

			}
			else
			{
				echo " updated";
			}
	}
			mysqli_close($conn);
}
?>
<!doctype html>
<html>
	<head>
	<title>LOGIN WINDOW</title>
	</head>
	<body background="Images/newlogin.png">
	<form action="#" method="POST">
	<div class="LOGIN BOX">
	<p align="center" style="color:red"><center>Note* Only admin can add New User</center></p>
	<div style = "position:relative; left:500px; top:50px";class="user">
	<input type="text" id="$username" style="height:30px;width:130px;border-color:pink;border-width:4" name="username" size="35" placeholder="Enter Username"required/></td>
	<br><br>
	<input type="date" id="$dob" style="height:30px;width:130px;border-color:pink;border-width:4" name="dob" size="35"  placeholder="Enter dob"></td>
	</br><br>
	<input type="password" id="$password" style="height:30px;width:130px;border-color:pink;border-width:4" name="password" size="35"  placeholder="Enter new password"></td>
	</br><br>
	<input type="submit" id="$sumbit"  name="submit" value="S U B M I T"style="background-color:pink;height:55px; width: 220px"></button>
	</div>
	</div>
	</form>
	</body>
</html>