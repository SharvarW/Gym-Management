<?php
$servername="localhost";
$username="root";
$password="";
$dbname = "test";
$user_name = "";
if (isset($_GET["user_name"])) 
{
$user_name = $_POST["user_name"];
}
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully <br>" ;

			$password=$_POST['password2'];
			echo $user_name;
			$sqlw="UPDATE login SET PW='$password' where Uname='$user_name'";
			if(!mysqli_query($conn,$sqlw))
			{
				echo " Not updated";

			}
			else
			{
				echo " updated";
			}
?>
<!doctype html>
		<html>
		<head>
		<title>New Password</title>
		</head>
		<body background="Images/newlogin.png">
		<form action="#" method="POST">
		<div style = "position:relative; left:500px; top:50px";class="user">
		<input type="password" id="$password2" style="height:30px;width:110px;border-color:pink;border-width:4" name="password2" size="35"  placeholder="Enter Password2"></td>
		</br><br>
		<input type="submit" id="$sumbit2"  name="submit2" value="submit2"style="background-color:pink;height:55px; width: 220px"></button>
		</div>
		</form>
		</body>
		</html>		