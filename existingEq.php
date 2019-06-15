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
	$DATE = date('Y-m-d');
	$BRANCHID = $_POST['Branch'];
	$sql="INSERT INTO equipment(Equipment_Name,DOI,Branch_Id)VALUES ('$NAME','$DATE','$BRANCHID')";
		
		if(!mysqli_query($conn,$sql))
		{
		echo 'NOT INSERTED EQUIPMENT RECORDS';
		}
		else
		{
		echo '<span style="color:#AFA">New record created successfully.';
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
			<div style = "position:relative; left:50px; top:10px";class="user">
					<a style="color:white ;font-size : 25px">FILL THE DETAILS</a></br></br></br>
					<select name="name" style="height:35px;width:275px;border-color:pink;border-width:4" id="name"required/></br></br>
					<option value="" >Select Name Of Equipment</option>
					<?php
					$queryQ="select Name from equipmentdetails";
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
							echo "<option value='".$row['Name']."'>".$row['Name']."</option>";
						}						}
					}
					?>
					
					</select>
					<br><br>
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
					<input type="submit" id="$sumbit"  name="submit" value="submit"style="background-color:pink;height:45px; width: 250px"></button>
			</div>
			</div>
		</form>
	</body>
</html>