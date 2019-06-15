<?php
$host    = "localhost";
$user    = "root";
$pass    = "";
$db_name = "test";

//create connection
$connection = mysqli_connect($host, $user, $pass, $db_name);

//test if connection failed
if(mysqli_connect_errno()){
    die("connection failed: ". mysqli_connect_error(). " (" . mysqli_connect_errno(). ")");
}
if(isset($_POST['submit']))
{
	$Start_date=$_POST['Start_date'];
	$End_date=$_POST['End_date'];
//get results from database
$result = mysqli_query($connection,"SELECT *FROM payment where Payment_Date BETWEEN '$Start_date' and '$End_date'");
$all_property = array();  //declare an array for saving property

//showing property
echo '<table class="data-table"><tr class="data-heading">';  //initialize table tag
while ($property = mysqli_fetch_field($result)) {
    echo '<td width="20%">'.$property->name.'</td>';  //get field name for header
    array_push($all_property, $property->name);  //save those to array
}
//showing all data
	echo '<tr>';
	while($row = mysqli_fetch_array($result))
	{
	echo "<td>" . $row['TraineeID'] . "</td>";
	echo "<td>" . $row['PayNo'] . "</td>";
	echo "<td>" . $row['Payment_Date'] . "</td>";
	echo "<td>" . $row['StartDate'] . "</td>";
	echo "<td>" . $row['Enddate'] . "</td>";
	echo "<td>" . $row['Amount'] . "</td>";
	echo "<td>" . $row['Mode'] . "</td>";
	echo "<tr>";
	} 
    echo '</tr>';
}		?>
		
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
	<br><br>
	<tr>
	<td>Start Date</td>
	<td><input type="date" name="Start_date" placeholder="Enter the start date of plan"required/><br></td>
	</tr>
	<td>End Date</td>
	<td><input type="date" name="End_date" placeholder="Enter the end date of plan"required/><br></td>
	</tr>
	</tr>
	<td><td><input type="submit" name="submit" align="center" value="Submit"></td>
	</tr>
	</table>
	</form>
	</body>
	</html>