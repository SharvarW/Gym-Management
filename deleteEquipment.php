<?php
//index.php

include('SearchEquipment/database_connection.php');
$state = '';
$country = '';
$city = '';


$query = "SELECT distinct Type FROM equipmentdetails";
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
$query = "SELECT Name FROM equipmentdetails where Type='$TYPE'";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
foreach($result as $row)
{
 $state .= '<option value="'.$row["Name"].'">'.$row["Name"].'</option>';
}
}

if(isset($_POST['submit2']))
{
$NAME = $_POST['state'];
$query = "SELECT Equipment_Id FROM equipment where Equipment_Name='$NAME'";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
foreach($result as $row)
{
 $city .= '<option value="'.$row["Equipment_Id"].'">'.$row["Equipment_Id"].'</option>';
}
}
if(isset($_POST['submit3']))
{
	$ID=$_POST['city'];
		$query = "delete FROM equipment where Equipment_Id='$ID'";
		$statement = $connect->prepare($query);
		$statement->execute();
		echo "EQUIPMENT DELETED ! ";
			
		
}
?>
<!DOCTYPE html>
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
  <div class="container" style="width:200px;">
   <form method="post" id="insert_data">
    <select name="country" id="country" class="form-control action">
     <option value="">Select Type</option>
     <?php echo $country; ?>
	<input type="submit" id="$sumbit1"  name="submit1" value="submit"style="background-color:pink;height:30px; width: 70px"></button>
    </select>
	
<br />
    <select name="state" id="state" class="form-control action">
     <option value="">Select Name</option>
	<?php echo $state; ?>
	<input type="submit" id="$sumbit2"  name="submit2" value="submit"style="background-color:pink;height:30px; width: 70px"></button>
    </select>
    <br />
	
    <select name="city" id="city" class="form-control action ">
	<option value="">Select ID</option>
	<?php echo $city; ?>
	<input type="submit" id="$sumbit3"  name="submit3" value="submit"style="background-color:pink;height:30px; width: 70px"></button>
    </select>
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





