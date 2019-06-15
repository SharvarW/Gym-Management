<?php
$servername="localhost";
$username="root";
$password="";
$dbname = "test";

$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully <br>" ;
if(isset($_POST['username']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$sql="select * from login where Uname='".$username."' AND PW='".$password."' limit 1";
	$result =$conn->query($sql);
	if($result->num_rows==1)
	{
		echo "  You are succesfully loged in WELCOME ! ";
		header('Location:option.php');
	}
	else
	{
		echo "  Enter valid username and password ";
		header('Location:login.php');
	}
}

?>
<!doctype html>
<html>
	<head>
		<title>LOGIN WINDOW</title>
	</head>
	<body background="Images/login.jpg">
		<div class="LOGIN BOX">
			<div style = "position:relative; left:150px; top:25px";class="user">
				<h1 style="color: red">LOGIN WINDOW</h1>
					</br></br></br></br></br>
					<form action="#" method="POST"/>
					<a  style="color:white"><font size="6">USER</a></br>
					<input type="text" id="$Username" style="height:25px;" name="username" size="35" placeholder="Enter User Name "required/></br></br>
					<a style="color:white;" value="FakePSW">PASSWORD</a></br>
					<input type="password" id="$Password" style="height:25px;" name="password" size="35"  placeholder="Enter Password"required/>
					<!--<input type ="submit" value="LOGIN" name="btn"/>-->
					<button onclick="test()">LOGIN</button>
					
					</br></br>
					<a href="url()" style="color:pink"> Forgot Password</a>
			</div>
		</div>
		</form>
	</body>
</html>