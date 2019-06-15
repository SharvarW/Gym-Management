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

//get results from database
$result = mysqli_query($connection,"SELECT * FROM equipment");
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
	echo "<td>" . $row['Equipment_Id'] . "</td>";
	echo "<td>" . $row['Equipment_Name'] . "</td>";
	echo "<td>" . $row['DOI'] . "</td>";
	echo "<td>" . $row['Branch_Id'] . "</td>";
	echo "<tr>";
	} 
    echo '</tr>';
		?>