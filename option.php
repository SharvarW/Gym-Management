<?php
function display()
 {
	 echo "hello";
 }
?>
<html>
<head>
<h1 font color="red" align="center">MENU</h1>
</head>
<script>
function setVisibility(id)  {
    if (document.getElementById('bt').value=='HIDE EQIUPMENT')
	{ 
        document.getElementById('bt').value = 'EQIUPMENT';
        document.getElementById(id).style.display = 'none'; 
    }
    else
	{ 
        document.getElementById('bt').value = 'HIDE EQIUPMENT';
        document.getElementById(id).style.display = 'block'; 
    } 
}
function setVisibility1(id){
    if (document.getElementById('bt1').value=='HIDE ATTENDENCE')
	{ 
        document.getElementById('bt1').value = 'ATTENDENCE';
        document.getElementById(id).style.display = 'none'; 
    }
    else
	{ 
        document.getElementById('bt1').value = 'HIDE ATTENDENCE';
        document.getElementById(id).style.display = 'block'; 
    } 
} 
function setVisibility2(id){
    if (document.getElementById('bt2').value=='HIDE TRAINER')
	{ 
        document.getElementById('bt2').value = 'TRAINER';
        document.getElementById(id).style.display = 'none'; 
    }
    else
	{ 
        document.getElementById('bt2').value = 'HIDE TRAINER';
        document.getElementById(id).style.display = 'block'; 
    } 
} 
function setVisibility3(id){
    if (document.getElementById('bt3').value=='HIDE TRAINEE')
	{ 
        document.getElementById('bt3').value = 'TRAINEE';
        document.getElementById(id).style.display = 'none'; 
    }
    else
	{ 
        document.getElementById('bt3').value = 'HIDE TRAINEE';
        document.getElementById(id).style.display = 'block'; 
    } 
} 
</script>
<body background="Images/option.jpg" size=100%>
<div class="btn-group" align="center">
</br><br>

<!-- I can also used following command to move button to right usinf float:right
<button type="button"  style="background:Gray;color:white;height: 60px; width: 227px;float:center "class="btn btn-success">	OWNER INFORMATION <id="my"></button>
-->
<div style = "position:relative;";class="user">
<button type="button"  style="background-color:ivory;border-color:orange;border-width:6;color:orange;height: 80px; width: 275px;font-size : 18px"class="btn btn-success " onClick="location.href='registration.php'">REGISTER MEMBER<id="my"></button>
 
 <!-------------------------------------------------------------------------------EQUIPMENT----------------------------------------------------------->
 <br><br>
<input type=button style="background-color:ivory;border-color:orange;border-width:6;color:orange;height: 80px; width: 275px;font-size : 18px  " name=type id='bt' value='EQUIPMENT' onclick="setVisibility('para')"> 
	
	<div style = "position:relative; left:20px; top:10px;display:none;color:white" class="user"  div id ="para">
		<button type="button"  style="background-color:white;border-color:gray;border-width:6;color:black;height: 45px; width: 240px;font-size : 12px"class="btn btn-success " onClick="location.href='registrationeq.php'">ADD EQIUPMENT(NEW TYPE)<id="my"></button>
		</br>
		<button type="button"  style="background-color:white;border-color:gray;border-width:6;color:black;height: 45px; width: 240px;font-size : 12px"class="btn btn-success " onClick="location.href='existingEq.php'">ADD EQIUPMENT(EXISTING TYPE)<id="my"></button>
		</br>
		<button type="button" align="center" style="background-color:white;border-color:grey;border-width:6;color:black;height: 45px; width: 240px;font-size : 12px" class="btn btn-success" onClick="location.href='maintain.php'" >MAINTENANCE</button>
		</br>
		<button type="button" align="center" style="background-color:white;border-color:gray;border-width:6;color:black;height: 45px; width: 240px;font-size : 12px " class="btn btn-success" onClick="location.href='SearchEquipment/index.php'">SEARCH EQIUPMENT</button> 
		</br>
		<button type="button"style="background-color:white;border-color:gray;border-width:6;color:black;height: 45px; width: 240px;font-size : 12px  " class="btn btn-success" onClick="location.href='deleteEquipment.php'">REMOVE EQIUPMENT</button> </br>
		</br></br>
	</div><br></br>

<!---------------------------------------------------------------------------------------------ATTENDANCE------------------------------------------------------------------------------------------>
<input type=button style="background-color:ivory;border-color:orange;border-width:6;color:orange;height: 80px; width: 275px;font-size : 18px  " name=type id='bt1' value='ATTENDENCE' onclick="setVisibility1('para_1')"> 
	<div style="position:relative; left:20px;top:10px;display:none;color:white" class="user" id ="para_1" div id="para">

		<button type="button"  style="background-color:white;border-color:gray;border-width:6;color:black;height: 45px; width: 240px;font-size : 12px"class="btn btn-success " onClick="location.href='markatt.php'">MARK ATTENDENCE<id="my"></button>
		</br>
		<button type="button" align="center" style="background-color:white;border-color:gray;border-width:6;color:black;height: 45px; width: 240px;font-size : 12px" class="btn btn-success" onClick="location.href='showatt.php'" >SEE ATTENDENCE</button>
		</br>
		</br></br>
	</div><br></br>

<!------------------------------------------------------------------------------------------TRAINER------------------------------------------------>	
	
<input type=button style="background-color:ivory;border-color:orange;border-width:6;color:orange;height: 80px; width: 275px;font-size : 18px  " name=type id='bt2' value='TRAINER' onclick="setVisibility2('para_2')"> 
	<div style="position:relative; left:20px;top:10px;display:none;color:white" div id ="para_2" style='display:none;color:white'>
		<button type="button"  style="background-color:white;border-color:gray;border-width:6;color:black;height: 45px; width: 240px;font-size : 12px"class="btn btn-success " onClick="location.href='ShowAllTrainer'">SHOW ALL TRAINERS<id="my"></button></br>
		<!--<button type="button" align="center" style="background-color:white;border-color:gray;border-width:6;color:black;height: 45px; width: 240px;font-size : 12px" class="btn btn-success" onClick="location.href=" >UPDATE TRAINER DETAILS</button></br>-->
		<button type="button" align="center" style="background-color:white;border-color:gray;border-width:6;color:blacck;height: 45px; width: 240px;font-size : 12px " class="btn btn-success" onClick="location.href='SearchTraineeForTrainer.php'">SEARCH TRAINEE FOR SPECIFIC TRAINER</button></br>
		<button type="button"style="background-color:white;border-color:gray;border-width:6;color:black;height: 45px; width: 240px;font-size : 12px  " class="btn btn-success" onClick="location.href='removeTrainer.php'">REMOVE TRAINER</button> </br>
		<button type="button"style="background-color:white;border-color:gray;border-width:6;color:black;height: 45px; width: 240px;font-size : 12px  " class="btn btn-success" onClick="location.href='salary.php'">SALARY</button> </br>
		</br></br>
	</div><br></br>

<!-----------------------------------------------------------------------------------------TRAINEE------------------------------------------------->	
	
<input type=button style="background-color:ivory;border-color:orange;border-width:6;color:orange;height: 80px; width: 275px;font-size : 18px  " name=type id='bt3' value='TRAINEE' onclick="setVisibility3('para_3')"> 
	<div style="position:relative; left:20px;top:10px;display:none;color:white" div id ="para_3" style='display:none;color:white'>
		<button type="button"  style="background-color:white;border-color:gray;border-width:6;color:black;height: 45px; width: 240px;font-size : 12px"class="btn btn-success " onClick="location.href='ShowAllTrainee.php'">SHOW ALL TRAINEE<id="my"></button></br>
		<!--<button type="button" align="center" style="background-color:white;border-color:gray;border-width:6;color:black;height: 45px; width: 240px;font-size : 12px" class="btn btn-success" onClick="location.href=" >UPDATE TRAINEE DETAILS</button></br>-->
		<button type="button" align="center" style="background-color:white;border-color:gray;border-width:6;color:black;height: 45px; width: 240px;font-size : 12px " class="btn btn-success" onClick="location.href='sort.php'">Count Of Trainee for Trainers</button></br>
		<button type="button"style="background-color:white;border-color:gray;border-width:6;color:black;height: 45px; width: 240px;font-size : 12px  " class="btn btn-success" onClick="location.href='removeTrainee.php'">REMOVE TRAINEE</button> </br>
		<button type="button"style="background-color:white;border-color:gray;border-width:6;color:black;height: 45px; width: 240px;font-size : 12px  " class="btn btn-success" onClick="location.href='payment.php'">PAYMENT</button> </br>
		<button type="button"style="background-color:white;border-color:gray;border-width:6;color:black;height: 45px; width: 240px;font-size : 12px  " class="btn btn-success" onClick="location.href='DateBetween.php'">BETWEEN</button> </br>
		
		</br></br></br>
	</div><br>
 </br></br>
 </div>
 </br></br>
 </body>
 </html>
 