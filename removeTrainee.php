<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="test";
try
{
	$conn = mysqli_connect($servername, $username,$password,$dbname);
	#echo("successful in connection");
	//echo("1");
}

catch(MySQLi_Sql_Exception $ex)
{
	echo("error in connection");

}
if(isset($_POST['submit']))
{
	$TID = $_POST['trainee'];
	$sql="delete from trainee where Trainee_Id=$TID";
	if(!mysqli_query($conn,$sql))
	{
		echo 'NOT DELETED';
	}
	else
	{
		echo 'deleted';
	}
}
?>

<!doctype html><html>
	<head>
	<title>LOGIN WINDOW</title>
	</head>
	<body background="Images/registration1.jpg">
	<form action="#" method="POST">
	<div class="LOGIN BOX">
	<div style = "position:relative; left:150px; top:10px";class="user">
	<a style="color:white ;font-size : 30px"><b><u>REGISTRATION FORM</u></b></a></br></br>
	<select name="trainee" style="height:35px;width:275px;border-color:AF5500;border-width:4" id="trainee"required/>
					<option value="" >SELECT TRAINEE ID</option>
					<?php
					$queryQ="select Trainee_Id from trainee";
					if(!mysqli_query($conn,$queryQ))
					{
						echo 'NOT GET RECORD';
					}
					else
					{
						$result =$conn->query($queryQ);
						if($result->num_rows>0){
						while($row=$result->fetch_assoc())
						{
							echo "<option value='".$row['Trainee_Id']."'>".$row['Trainee_Id']."</option>";
						}							}
					}
					?>
					</select>
	<input type="submit" id="$sumbit"  name="submit" value="submit"style="background-color:pink;height:55px; width: 220px"></button>
	</div>
	</div>
	</form>
	</body>
</html>