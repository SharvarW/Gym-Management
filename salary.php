<html>
<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="test";
try{
$conn = mysqli_connect($servername, $username,$password,$dbname);
#echo("successful in connection");
echo("1");
}catch(MySQLi_Sql_Exception $ex){
echo("error in connection");
}

if(isset($_POST['submit'])){
$Salary_no=$_POST['Salary_no'];
$Amount=$_POST['Amount'];
$Remark=$_POST['Remark'];
$Date_of_salary=$_POST['Date_of_salary'];
$Mode=$_POST['Mode'];

$query = "INSERT INTO salary(Salary_no,Amount,Remark,Date_of_salary,Mode) VALUES ('$Salary_no','$Amount','$Remark','$Date_of_salary','$Mode')";
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
<title>Salary</title>
</head>

<body background="payment.jpg">

<style>

input[type=date]
{
	height:30px;
	width:180px;
	border-color:orange;
	border-width:4;
} 

input[type=text]  
{
	height:28px;
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

div
{
	font-size: 30px;
	color: ivory;
	text-shadow: 3px 2px black;
}

</style>


<br>
<br>
<div class="well text-center" align="center"><?php echo date("d-m-Y");?> </div>

<form action="" method="post">
<table cellspacing="10" align="center">
<tr>
<br>
<br>
<td>Salary Number</td>
<td><input type="text" name="Salary_no" placeholder="Enter the Salary no."required/><br></td>
</tr>
<tr>
<td>Salary Amount ₹</td>
<td><input type="text" name="Amount" placeholder="Enter the Payment Amount "required/><br></td>
</tr>
<br>
<br>

<tr>
<td>Remarks</td>
<td><input type="text" name="Remark" placeholder="Enter remarks if any !"><br></td>
</tr>

<td>Date of Salary</td>
<td><input type="date" name="Date_of_salary" placeholder="Enter the date of payment"required/><br></td>
</tr>
<br>
<br>
<br> 

<td>
Salary Mode</br>
			<input  type="radio" id="$Mode" name="Mode" value="Cash"><a style="color:white ;font-size :20px">Cash</a>
			<input type="radio" id="$Mode" name="Mode" value="Cheque"><a style="color:white ;font-size :20px">Cheque</a>
			<input type="radio" id="$Mode" name="Mode" value="Credit"><a style="color:white;font-size :20px">Credit</a>
			<input type="radio" id="$Mode" name="Mode" value="Debit"><a style="color:white;font-size :20px">Debit</a>
			</br>
</td>

</tr>
<td><input type="submit" name="submit" align="center" value="Submit"></td>
</tr>
</table>

</form>
</body>
</html>