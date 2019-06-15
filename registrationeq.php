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
	$NAME = $_POST['name'];
	$TYPE = $_POST['type'];
	$PRICE = $_POST['price'];
	$USERGUIDE = $_POST['userguide'];
	$DATE = date('Y-m-d');
	$BRANCHID = $_POST['Branch'];
#echo $TYPE;echo $NAME;echo $PRICE;echo $USERGUIDE;echo $DATE;echo $BRANCHID;
	$sql="INSERT INTO equipmentdetails(Name,Type,Price,UserGuide)VALUES ('$NAME','$TYPE','$PRICE','$USERGUIDE')";
	if(!mysqli_query($conn,$sql))
	{
		echo 'NOT INSERTED EQUIPMENT DETAILS';
	}
	else
	{
		$query="INSERT INTO equipment(Equipment_Name,DOI,Branch_Id)VALUES ('$NAME','$DATE','$BRANCHID')";
		if(!mysqli_query($conn,$query))
		{
		echo 'NOT INSERTED EQUIPMENT RECORDS';
		}
		else
		{
		echo '<span style="color:#AFA">New record created successfully.EQUIPMENT ID is: ';
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
	<body background="Images/registration1.jpg">
		<form action="#" method="POST">
			<div class="LOGIN BOX">
			<div  style = "position:relative; left:50px; top:10px;";class="user">
					<a style="color:white ;font-size : 25px">FILL THE DETAILS</a></br></br></br>
					<input type="text" id="$name" style="height:40px;width:200px;border-color:pink;border-width:4" name="name" size="35" placeholder="Equipment Name"required/></td></br></br>
					<input type="text" id="$type" style="height:35px;width:200px;border-color:pink;border-width:4" name="type" size="35" placeholder="Type of Equipment"required/></br></br>
					<input type="text" id="$price" style="height:35px;width:200px;border-color:pink;border-width:4" name="price" size="35" placeholder="Price"required/></br></br>
					
					<select name="Branch" style="height:35px;width:275px;border-color:pink;border-width:4" id="Branch"required/>
					<option value="" >BRANCH ID</option>
					<?php
					$queryQ="select Branch_Id,Branch_Name from branch";
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
							echo "<option value='".$row['Branch_Id']."'>".$row['Branch_Name']."</option>";
						}						
					}
					}
					?>
					</select>
					</br></br>
					<input type="text" id="$userguide" style="height:35px;width:275px;border-color:pink;border-width:4" name="userguide" size="35" placeholder="UserGuide"required/></br>
					</br></br>
					<input type="submit" id="$submit"  name="submit" value="submit"style="background-color:pink;height:45px; width: 250px"></button>
			</div>
			</div>
		</form>
	</body>
</html>