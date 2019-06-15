<?php
//index.php

include('SearchEquipment/database_connection.php');
$state = '';
$country = '';
$city = '';


$query = "SELECT distinct Type FROM memberpersonal";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
foreach($result as $row)
{
	$country .= '<option value="'.$row["Type"].'">'.$row["Type"].'</option>';
}

if(isset($_POST['submit1']))
{
$TYPE = $_POST['country'];
$query = "SELECT Member_Id FROM memberpersonal where Type='$TYPE'";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
foreach($result as $row)
{
 $state .= '<option value="'.$row["Member_Id"].'">'.$row["Member_Id"].'</option>';
}
}

if(isset($_POST['submit2']))
{
$NAME = $_POST['state'];
$ATTENDENCE = $_POST['att'];
$DATE=date('Y-m-d');
$query = "insert into attendence(Member_Id,att,Date)values('$NAME','$ATTENDENCE','$DATE');";
$statement = $connect->prepare($query);
$statement->execute();

}

?>
<!DOCTYPE html>
<body background="Images/att.jpg" size=100%>
<html>
 <head>
  <title>Insert Dynamic Multi Select Box Data using Jquery Ajax PHP</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="jquery.lwMultiSelect.js"></script>
 </head>
 <body>
  <br /><br />
  <div class="container" style="width:200px;left:20px; top:200px">
   <form method="post" id="insert_data">
    <select name="country" id="country" class="form-control action">
     <option value="">Select Type</option>
     <?php echo $country; ?>
	<input type="submit" id="$sumbit1"  name="submit1" value="submit"style="background-color:pink;height:30px; width: 70px"></button>
    </select>
	
<br />
    <select name="state" id="state" class="form-control action">
     <option value="">Select Name</option>
	 <br>
	 <?php echo $state; ?>
	 <input  type="radio" id="$att" name="att" value="Present"><a style="color:black;font-size :20px">Present</a></td>
	<input type="radio" id="$att" name="att" value="Absent"><a style="color:black ;font-size :20px">Absent</a></td>
	</br></br>
	
	<input type="submit" id="$sumbit2"  name="submit2" value="submit"style="background-color:pink;height:30px; width: 70px"></button>
     <br />
   </form>
  </div>
 </body>
</html>

<script>
$(document).ready(function(){

 $('#city').lwMultiSelect();

 $('.action').change(function(){
  if($(this).val() != '')
  {
   var action = $(this).attr("id");
   var query = $(this).val();
   var result = '';
   if(action == 'country')
   {
    result = 'state';
   }
   else
   {
    result = 'city';
   }
  }
 });

 $('#insert_data').on('submit', function(event){
  event.preventDefault();
  if($('#country').val() == '')
  {
   alert("Please Select Country");
   return false;
  }
  else if($('#state').val() == '')
  {
   alert("Please Select State");
   return false;
  }
  else if($('#city').val() == '')
  {
   alert("Please Select City");
   return false;
  }
</script>





