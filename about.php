<?php
$servername="localhost";
$username="root";
$password="";
$dbname = "test";
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully <br>" ;
$queryQ="select Branch_Name,Branch_Contact from branch";
		if(!mysqli_query($conn,$queryQ))
		{
			echo 'NOT GET RECORD';
		}
		else
		{
			$result =$conn->query($queryQ);			
		}
function display()
 {
	 echo "hello";
 }
?>



<html>
<body>
<script language="JavaScript">
function setVisibility1(id)  {
    if (document.getElementById('bt1').value=='Hide Branches')
	{ 
        document.getElementById('bt1').value = 'Branches';
        document.getElementById(id).style.display = 'none'; 
    }
    else
	{ 
        document.getElementById('bt1').value = 'Hide Branches';
        document.getElementById(id).style.display = 'block'; 
    } 
}    
function setVisibility2(id)  {
    if (document.getElementById('bt2').value=='Hide History')
	{ 
        document.getElementById('bt2').value = 'History';
        document.getElementById(id).style.display = 'none'; 
    }
    else
	{ 
        document.getElementById('bt2').value = 'Hide History';
        document.getElementById(id).style.display = 'block'; 
    } 
} 
function setVisibility3(id)  {
    if (document.getElementById('bt3').value=='Hide Facilities')
	{ 
        document.getElementById('bt3').value = 'Facilities';
        document.getElementById(id).style.display = 'none'; 
    }
    else
	{ 
        document.getElementById('bt3').value = 'Hide Facilities';
        document.getElementById(id).style.display = 'block'; 
    } 
} 
</script> 
<body background="Images/about1.jpg" size=100%>
<br><br><br><br>
<p style="color:white;text-align:center; font-size:30px;"><b>CONTACT : 1234567890</br></br> 
E-mail : dbmsproject4@kkwagh.com</b></p><br>
<div align="center">
<input type=button style="background-color:transparent;border-color:pink;border-width:6;color:white;height: 80px; width: 275px;font-size : 18px" name=type id='bt1' value='Branches' onclick="setVisibility1('para_1')"> 
<div id ="para_1" style='display:none;color:white'>
</br>
<?php
if($result->num_rows>0)
			{
					foreach($result as $row)
					{
						echo $row['Branch_Name']." : ".$row['Branch_Contact']."<br>" ;	
					}	
			}	

?>
</div>
<p id ="para_1" style='display:none;color:white'> display this on first click </p><br>
<input type=button style="background-color:transparent;border-color:pink;border-width:6;color:white;height: 80px; width: 275px;font-size : 18px" name=type id='bt2' value='History' onclick="setVisibility2('para_2')"> 
<p id ="para_2" style='display:none;color:white'>This Gym was established in blah-blah by blah-blah and blah-blah persons. </p><br>
<input type=button style="background-color:transparent;border-color:pink;border-width:6;color:white;height: 80px; width: 275px;font-size : 18px" name=type id='bt3' value='Facilities' onclick="setVisibility3('para_3')"> 
<p id ="para_3" style='display:none;color:white'> We provide you:<br/>
1.Equipments with proper maintenance<br/>
2.Specialised Trainers for personal assistance<br/>
3.Good drinking water and restroom facilities<br/>
We are here to train you........<br/>
</p><br>
<br><br>
</div>
</body> 
</html>




