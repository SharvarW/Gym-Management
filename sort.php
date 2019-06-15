<?php
$host="localhost";
$user="root";
$pass="";
$db_name = "test";

//create connection
$conn = new mysqli($host, $user, $pass,$db_name);
//test if connection failed
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 
//get results from database
$queryQ="SELECT COUNT(Trainee_Id) as cnt,Trainer_Id FROM trainee GROUP BY Trainer_Id order by Trainer_Id";
		if(!mysqli_query($conn,$queryQ))
		{
			echo 'ERROR';
		}
//showing all data
else
{
	echo '<tr>';
	$result =$conn->query($queryQ);
	if($result->num_rows>0){
	while($row=$result->fetch_assoc())
	{
	echo "There Are[". $row['cnt'] ."]Trainees for Trainer[". $row['Trainer_Id'] ."]";
	echo "<tr>";
	} 
	}
}
    echo '</tr>';
		?>

