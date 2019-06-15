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
	$TYPE = $_POST['type'];
	$FirstName = $_POST['fname'];
	$MiddleName = $_POST['mname'];
	$LastName = $_POST['lname'];
	$Gender = $_POST['gender'];
	$Address = $_POST['address'];
	$Contact = $_POST['phone'];
	$BloodGroup = $_POST['bloodgroup'];
	$Branch = $_POST['branch'];
	$DOB = $_POST['dob'];
	$HEIGHT = $_POST['height'];
	$WEIGHT = $_POST['weight'];
	$DOJ=date("Y-m-d") ;
	echo $Branch;
	#echo $TYPE;echo $FirstName;echo $MiddleName;echo $LastName;echo $Gender;echo $Address;echo $Contact;echo $BloodGroup;echo $DOB;echo $Branch;
	$sql="INSERT INTO memberpersonal(Type, FirstName,MiddleName,LastName,Gender,Address,Contact,BloodGroup,Branch_Id,DOB,DOJ)VALUES ('$TYPE','$FirstName','$MiddleName','$LastName','$Gender','$Address','$Contact','$BloodGroup','$Branch','$DOB','$DOJ')";
	if(!mysqli_query($conn,$sql))
	{
		echo 'NOT INSERTED PERSONAL RECORDS';
	}
	else
	{
		echo 'Personal Details Recorded Thank you !';
		$last_id = mysqli_insert_ID($conn);
		$sql="INSERT INTO memberphysical(ID,Height,Weight)VALUES ('$last_id','$HEIGHT','$WEIGHT')";
		if(!mysqli_query($conn,$sql))
		{
		echo 'NOT INSERTED PHYSICAL RECORDS';
		}
		else
		{
			echo '<span style="color:#AFA">New record created successfully.YOUR ID is: ' . $last_id;
			#inserting to trainer table or trainee
			
		}
		
	}
	if(isset($_POST['submit']))
	{
		if($TYPE=="Trainer")
			{
				$query="INSERT INTO trainer(Trainer_ID,Salary,Quallification,Designation)VALUES ('$last_id',25000.00,'sbcs0','shgddv')";
				if(!mysqli_query($conn,$query))
				{
					echo 'NOT INSERTED TRAINER RECORDS';
				}
				else
				{
					echo 'Inserted';
				}
			}
			else
			{
				$query="INSERT INTO trainee(Trainee_Id,Trainer_Id,Plan)VALUES ('$last_id',1,'GOLD')";
				if(!mysqli_query($conn,$query))
				{
					echo 'NOT INSERTED TRAINEE RECORDS';
				}
				else{
					echo 'inserted';
				}
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
	<div style = "position:relative; left:150px; top:10px";class="user">
	<a style="color:white ;font-size : 30px"><b><u>REGISTRATION FORM</u></b></a></br></br>
	
	<input type="text" id="$fname" style="height:30px;width:110px;border-color:pink;border-width:4" name="fname" size="35" placeholder="     Fisrt Name "required/></td>
	<input type="text" id="$mname" style="height:30px;width:110px;border-color:pink;border-width:4" name="mname" size="35"  placeholder="    Middle Name"></td>
	<input type="text" id="$lname" style="height:30px;width:110px;border-color:pink;border-width:4" name="lname" size="35" placeholder="     Last Name "required/></td>
	</br></br>
	
	<input type="text" id="$address" style="height:30px;width:275px;border-color:pink;border-width:4" name="address" size="35" placeholder="                        Address "required/>
	</br></br>
	
	<a style="color:white ;font-size : 60x left:150px ">Date of Birth</a></br>
	<input type="date" id="$dob" style="height:30px;width:150px;border-color:pink;border-width:4" name="dob" placeholder="DOB"required/>
	</br></br>
	
	<input type="text" id="$phone" style="height:30px;width:105px;border-color:pink;border-width:4" name="phone" size="35" placeholder="Contact "required/></td>
	</br></br>
	
	<input  type="radio" id="$gender" name="gender" value="Male"><a style="color:white ;font-size :20px">Male</a></td>
	<input type="radio" id="$gender" name="gender" value="Female"><a style="color:white ;font-size :20px">Female</a></td>
	<input type="radio" id="$gender" name="gender" value="Other"><a style="color:white;font-size :20px">Other</a></td>
	</br></br>
	
	<input type="text" id="$height" style="height:30px;width:100px;border-color:pink;border-width:4" name="height" size="35" placeholder="Height (in cms)"required/><td><td>
	<input type="text" id="$weight" style="height:30px;width:100px;border-color:pink;border-width:4" name="weight" size="35" placeholder="Weight (in kgs)"required/></br>
	</br></br>
	
	<input  type="radio" id="$type" name="type" value='Trainer'><a style="color:white;font-size :20px">Trainer</a></td>
	<input type="radio" id="$type" name="type" value='Trainee'><a style="color:white; font-size :20px">Trainee</a></td>
	</br></br>
	
	<select name="branch" style="height:30px;width:220px;border-color:pink;border-width:4" id="branch"required/></br></br>
	<option value="" >Select Branch</option>
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
				}							}
		}
	?>
	</select>
	</br></br>
	
	<select name="bloodgroup" style="height:30px;width:105px;border-color:pink;border-width:4" id="bloodgroup"required/>
	<option value="">Blood Group</option>
	<option value="O+ve">O+ve</option>
	<option value="O-ve">O-ve</option>
	<option value="A+ve">A+ve</option>
	<option value="B+ve">B+ve</option>
	<option value="AB+ve">AB+ve</option>
	<option value="A-ve">A-ve</option>
	<option value="B-ve">B-ve</option>
	<option value="AB-ve">AB-ve</option>
	</select><br><br>
	</br>
	<input type="submit" id="$sumbit"  name="submit" value="S U B M I T"style="background-color:pink;height:55px; width: 220px"></button>
	</div>
	</div>
	</form>
	</body>
</html>