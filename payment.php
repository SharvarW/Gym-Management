<html>
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
	$Trainee=$_POST['trainee'];
	$Amount=$_POST['Amount'];
	$Start_date=$_POST['Start_date'];
	$End_date=$_POST['End_date'];
	$Date_of_payment=date("Y-m-d");
	$Mode=$_POST['Mode'];
	echo $Trainee;echo $Amount;echo $Start_date;echo $End_date;echo $Date_of_payment;echo $Mode;
	$query = "INSERT INTO payment(TraineeID,Amount,StartDate,Enddate,Payment_Date,Mode) VALUES ('$Trainee','$Amount','$Start_date','$End_date','$Date_of_payment','$Mode')";
	if(!mysqli_query($conn,$query))
	{
		echo 'Payment details not inserted';
	}
	else
	{
		echo 'Payment details inserted !';
	}
}
 
?>

	<html>
	<head>
	<title>Payment</title>
	</head>
	 
	<body background="Images/payment.jpg">
	<style>

	input[type=date]
	{
		height:40px;
		width:180px;
		border-color:orange;
		border-width:4;
	} 

	input[type=text]  
	{
		height:40px;
		width:220px;
		border-color:orange;
		border-width:4;
	} 

	input[type=submit]
	{
		-moz-box-shadow:inset 0px 0px 15px 3px #23395e;
		-webkit-box-shadow:inset 0px 0px 15px 3px #23395e;
		box-shadow:inset 0px 0px 15px 3px #23395e;
		background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #2e466e), color-stop(1, #415989));
		background:-moz-linear-gradient(top, #2e466e 5%, #415989 100%);
		background:-webkit-linear-gradient(top, #2e466e 5%, #415989 100%);
		background:-o-linear-gradient(top, #2e466e 5%, #415989 100%);
		background:-ms-linear-gradient(top, #2e466e 5%, #415989 100%);
		background:linear-gradient(to bottom, #2e466e 5%, #415989 100%);
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#2e466e', endColorstr='#415989',GradientType=0);
		background-color:#2e466e;
		-moz-border-radius:17px;
		-webkit-border-radius:17px;
		border-radius:17px;
		border:1px solid #1f2f47;
		display:inline-block;
		cursor:pointer;
		color:#ffffff;
		font-family:Arial;
		font-size:15px;
		padding:10px 30px;
		text-decoration:none;
		text-shadow:0px 1px 0px #263666;
	}

	td
	{
		color: ivory;
		text-shadow: 3px 2px black;
		font-size: 30px;
	}

	</style>
	<form action="" method="post">
	<table cellspacing="10" align="center">
	<tr>
	<br><br>
	<td>Tainee ID</td>
	<td><select name="trainee" style="height:35px;width:275px;border-color:AF5500;border-width:4" id="trainee"required/>
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
					</td>
					</select>
					</tr>
	<td>Payment Amount ₹</td>
	<td><input type="text" name="Amount" placeholder="Enter the Payment Amount "required/><br></td>
	</tr>
	<br><br>
	<td>Start Date</td>
	<td><input type="date" name="Start_date" placeholder="Enter the start date of plan"required/><br></td>
	</tr>
	<td>End Date</td>
	<td><input type="date" name="End_date" placeholder="Enter the end date of plan"required/><br></td>
	</tr>
	<br><br><br> 
	<td>Mode Of Payment<td>
	<input type="radio" id="$Mode" name="Mode" value="Cash"><a style="color:white ;font-size :20px">Cash</a>
	<input type="radio" id="$Mode" name="Mode" value="Cheque"><a style="color:white ;font-size :20px">Cheque</a>
	<input type="radio" id="$Mode" name="Mode" value="Credit"><a style="color:white;font-size :20px">Credit</a>
	<input type="radio" id="$Mode" name="Mode" value="Debit"><a style="color:white;font-size :20px">Debit</a>
	</br>
	</td>
	</tr>
	<td><td><input type="submit" name="submit" align="center" value="Submit"></td>
	</tr>
	</table>
	</form>
	</body>
	</html>