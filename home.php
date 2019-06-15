<?php
	
	$servername="localhost";
	$username="root";
	$password="";
	$dbname = "test";
	$conn = new mysqli($servername, $username, $password,$dbname);
	
	if($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	} 
	
	$result=mysqli_query($conn,"select * from memberpersonal");
	$count=mysqli_num_rows($result);
	mysqli_close($conn);

	function display()
	{
		 echo "hello";
	}
?>

	<html>
	<script language="JavaScript">
	
	function setVisibility(id)  
	{
		if (document.getElementById('bt').value=='HIDE MEMBER COUNT')
		{ 
			document.getElementById('bt').value = 'MEMBER COUNT';
			document.getElementById(id).style.display = 'none'; 
		}
		else
		{ 
			document.getElementById('bt').value = 'HIDE MEMBER COUNT';
			document.getElementById(id).style.display = 'block'; 
		} 
	}    
	</script>
	
	<body background="Images/sdse.jpg" size=100s%>
	
	<h1 align="center"style="color:black;font-size:50px"><u><b> HOME </b></u></h1>
	<div style="position:relative; left:160px"; class="user">
	<img src="Images/b2.jpg" align="right" width="370" height="210" style="position:relative; left:-400"></br>
	<img src="Images/b6.jpg" style="position:relative; left:-300px; top:120px" align="right" width="370" height="210"></div>
	
	<div style = "position:relative; left:45px; top:-40px";class="user">
	<div class="btn-group" align="left">
	
	<button type="button"  style="background-color:#ffe066;border-color:brown;border-width:6;color:black;height:50px; width: 275px;font-size : 18px"class="btn btn-success">OWNER INFORMATION <id="my"></button>
	</br>

	</br>
		
	</div>
	</br>
	<button type="button" align="center" style="background-color:#ffe066;border-color:brown;border-width:6;color:black;height: 50px; width: 275px;font-size : 18px " class="btn btn-success"onClick="location.href='plans.html'"> PLANS AVAILABLE </button> 
	</br></br>
	</br>
	<button type="button"style="background-color:#ffe066;border-color:brown;border-width:6;color:black;height: 50px; width: 275px;font-size : 18px  " class="btn btn-success" onClick="location.href='login.php'">LOGIN</button> </br>
	</br>
	</br>
	<input type=button style="background-color:#ffe066;border-color:brown;border-width:6;color:black;height: 50px; width: 275px;font-size : 18px" name=type id='bt' value='MEMBER COUNT' onclick="setVisibility('para_1')">
	<div id ="para_1" style='display:none;color:white'>
	</br></br></br>
	<div style='color:black'><b>
	<?php
		if($count<1)
		{
			echo '0 RESULTS FOUND !';
		}

		else
		{
			echo "TOTAL MEMBERS ENROLLED ARE :: $count";
		}
	?>
	</b>
	</div>
	 
	</div></br></br><br>
	<button type=button style="background-color:#ffe066;border-color:brown;border-width:6;color:black;height: 50px; width: 275px;font-size : 18px " class="btn btn-success" onClick="location.href='newlogin.php'">NEW LOGIN</button> </br>
</br>
	</body>
	</html
	 