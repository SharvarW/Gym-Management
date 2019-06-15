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
function setVisibility(id)  {
    if (document.getElementById('bt').value=='Hide Member Count')
	{ 
        document.getElementById('bt').value = 'Member Count';
        document.getElementById(id).style.display = 'none'; 
    }
    else
	{ 
        document.getElementById('bt').value = 'Hide Member Count';
        document.getElementById(id).style.display = 'block'; 
    } 
}    
</script>
<body background="Images/home.jpg" size=100%>
<div class="btn-group" align="left">
</br></br></br></br></br>

<!-- I can also used following command to move button to right usinf float:right
<button type="button"  style="background:Gray;color:white;height: 60px; width: 227px;float:center "class="btn btn-success">	OWNER INFORMATION <id="my"></button>
-->

<button type="button"  style="background-color:transparent;border-color:pink;border-width:6;color:white;height: 80px; width: 275px;font-size : 18px"class="btn btn-success">	OWNER INFORMATION <id="my"></button>
 </br>
 <input type=button style="background-color:transparent;border-color:pink;border-width:6;color:white;height: 80px; width: 275px;font-size : 18px" name=type id='bt' value='MEMBER COUNT' onclick="setVisibility('para_1')">
<div id ="para_1" style='display:none;color:white'>
</br>
<?php
				if($count<1)
						{
							echo '0 Result Found !';
						}
						else{
							
								echo "MEMBER COUNT IS :: $count";
						}?>
</div>
</br>
 <button type="button" align="center" style="background-color:transparent;border-color:pink;border-width:6;color:white;height: 80px; width: 275px;font-size : 18px " class="btn btn-success"onClick="location.href='plans.html'"> PLAN </button> 
 </br>
 <button type="button"style="background-color:transparent;border-color:pink;border-width:6;color:white;height: 80px; width: 275px;font-size : 18px  " class="btn btn-success" onClick="location.href='login.php'">LOGIN</button>
 </br>
 <button type="button"style="background-color:transparent;border-color:pink;border-width:6;color:white;height: 80px; width: 275px;font-size : 18px  " class="btn btn-success" onClick="location.href='newlogin.php'">NEW LOGIN</button> </br>
</br>
 </div></br></br>
 </body>
 </html>
 