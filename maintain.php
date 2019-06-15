<html>
<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="test";
try{
$conn = mysqli_connect($servername, $username,$password,$dbname);
#echo("successful in connection");
//echo("1");
}catch(MySQLi_Sql_Exception $ex){
echo("error in connection");
}

if(isset($_POST['submit'])){
$Date1=date("Y-m-d");
$Cost1=$_POST['Cost'];
$Contractor1=$_POST['Contractor_name'];
$equi_id1=$_POST['ID'];
#echo "$Date1";echo "$Cost1";echo "$Contractor1";echo "$equi_id1";
$query = "INSERT INTO maintainance(Date,Cost,Contractor,Equipment_ID) VALUES ('$Date1','$Cost1','$Contractor1','$equi_id1')";
if(!mysqli_query($conn,$query))
	{
		echo 'Maintenance details not inserted';
	}
	else
	{
		echo 'Maintenance details inserted !';
	}
}
 
?>

<html>
<head>
<title>Maintenance</title>
</head>

<h1>Maintenance</h1>

<body background="Images/maintain.jpg">

<style>

h1
{
	color: ivory;
	text-shadow: 4px 3px black;
	font-size: 50px;
	text-align:center;
}

input[type=date]
{
	height:30px;
	width:180px;
	border-color:orange;
	border-width:4;
} 

input[type=text]  
{
	height:35px;
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

<div class="well text-center" align="center"><?php echo date("d-m-Y");?> </div>

<form action="" method="post">
<table cellspacing="10" style="margin-left:320px;">

<br>

<tr>
<td>Select Equipment ID</td>
<td><select name="ID" style="height:35px;width:275px;border-color:orange;border-width:4" id="ID"required/></br></br>
					<option value="" >Select ID</option>
					<?php
					$queryQ="select Equipment_Id from equipment";
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
							echo "<option value='".$row['Equipment_Id']."'>".$row['Equipment_Id']."</option>";
						}							}
					}
					?>
					
					</select>

<td></tr>
<tr>
<td>Contractor Name</td>
<td><select name="Contractor_name" style="height:35px;width:275px;border-color:orange;border-width:4" id="Contractor_name"required/></br></br>
					<option value="" >Select ID</option>
					<?php
					$queryQ="select Contractor_name from contractor";
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
							echo "<option value='".$row['Contractor_name']."'>".$row['Contractor_name']."</option>";
						}							}
					}
					?>
					
					</select>

<td></tr>
<tr>
<td>Cost ₹</td>
<td><input type="text" name="Cost" placeholder="Enter the Cost ₹"required/><br></td>
</tr>


<br>
<br>
<br> 
</table>
<input type="submit" name="submit" style="margin-left: 50%" value="Submit">


</form>
</body>
</html>


