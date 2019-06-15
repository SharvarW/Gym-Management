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
	$TID = $_POST['trainer'];
	$sql="delete from trainer where Trainer_ID=$TID";
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
	<select name="trainer" style="height:35px;width:275px;border-color:AF5500;border-width:4" id="trainer"required/>
					<option value="" >SELECT TRAINER ID</option>
					<?php
					$queryQ="select Trainer_ID from trainer";
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
							echo "<option value='".$row['Trainer_ID']."'>".$row['Trainer_ID']."</option>";
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