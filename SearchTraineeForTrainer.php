<?php
$servername="localhost";
$username="root";
$password="";
$dbname = "test";

include('SearchEquipment/database_connection.php');
if(isset($_POST['submit']))
{
	$Tid = $_POST['ID'];
	#echo '$Tid';
	$query = "SELECT * FROM trainee where Trainer_Id='$Tid'";
		$statement = $connect->prepare($query);
		$statement->execute();
		$result = $statement->fetchAll();
		foreach($result as $row)
		{
			echo nl2br("\r\n ID :".$row['Trainee_Id']."\r\n Plan :".$row['Plan']."");	
		}
}
?>
<!doctype html>
<html>
	<head>
		<title>LOGIN WINDOW</title>
	</head>
	<body background="Images/registration1.jpg">
		<form action="#" method="POST">
			<div class="LOGIN BOX">
			<div style = "position:relative; left:50px; top:10px";class="user">
					<a style="color:white ;font-size : 25px">FILL THE DETAILS</a></br></br></br>
					<select name="ID" style="height:30px;width:220px;border-color:pink;border-width:4" id="ID"required/></br></br>
	<option value="" >Select ID</option>
	<?php
		$query="select Trainer_ID from trainer";
		if(!mysqli_query($conn,$query))
		{
			echo 'NOT GET RECORD';
		}
		else
		{
			$result =$conn->query($query);
			if($result->num_rows>0){
				while($row=$result->fetch_assoc())
				{
					echo "<option value='".$row['Trainer_ID']."'>".$row['Trainer_ID']."</option>";
				}							}
		}
	?>
	</select>
					<input type="submit" id="$sumbit"  name="submit" value="submit"style="background-color:pink;height:45px; width: 250px"></button>
			</div>
			</div>
		</form>
	</body>
</html>