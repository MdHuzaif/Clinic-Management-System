<!DOCTYPE html>
<?php include("func.php");?>

<?php


global $con;

   $query="select * from doctorapp";
   $result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))

{
$today_date=date('Y-m-d');
$exp_date=$row['appdate'];
$exp=strtotime($exp_date);
$td=strtotime($today_date);

if($exp<$td)
{

   $query="DELETE  FROM doctorapp WHERE appdate='$exp_date'";
   $r=mysqli_query($con,$query);
   
   

}

}



?>
  
<html>
<head>
	
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
<div class="jumbotron" style="background:url('images/32.jpg') no-repeat; background-size:cover;height:250px;"></div>
<div class="container">
 <div class="card">
            	<div class="card-body" style="background-color: #3498DB;color:#ffffff;">
            	<div class="row">
            	<div class="col-md-1">	
            		<a href="admin-panel.php" class="btn btn-light">GO Back</a> 
            	</div>
            	<div class="col-md-3"><h3>Patient Details</h3></div>
            	<div class="col-md-8">
            	<form class="form-group" action="patient_search.php" method="post">
            	<div class="row">
            		<div class="col-md-10"><input type="text" name="search" class="form-control" placeholder="Enter Contact"></div>
            	<div class="col-md-2"><input type="submit"  name="patient_search_submit" class="btn btn-light" value="search"></div></div>
            </form>
        </div>
    </div>


            	</div>
            	<div class="card-body" style="background-color: #3498DB; color:#ffffff;">
            	<table class="table table-hover">
  <thead>
    <tr>
      
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email id</th>
      <th scope="col">Contact</th>
      <th scope="col">Doctor Appointment</th>
      <th scope="col">Date</th>
      <th scope="col">Payment</th>
      
    </tr>
  </thead>
  <tbody>
   <?php get_patient_details(); ?>
   
  </tbody>
</table>
</div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>
