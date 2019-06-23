<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
</head>

<body>


<div class="jumbotron" style="background:url('images/34.png') no-repeat; background-size:cover;height:350px;"></div>
<div class="row">
	 <div class="col-md-3">
	 	<div class="list-group">
	 		<a href="" class="list-group-item active" style="background-color:#3498DB; color:#ffffff;       border-color:#3498DB" >Management</a>
	 		<a href="patient_details.php" class="list-group-item ">Details</a>
	 		<a href="payment_status.php" class="list-group-item ">Payment Status</a>
	 		
	 		<a href="admin-panel.php" class="list-group-item">Appointment</a>
       <a href="cancellation.php" class="list-group-item">Cancellation</a>
           </div>
           
          
       </div>

        <div class="col-md-5">
       <div class="card">
        <div class="card-body">
        <form class="form-group" method="post" action="func.php">
          <label>Doctor's Name :</label>
        <input type="text" name="docname" class="form-control" placeholder="Enter Doctor's Name"><br>
        
        	 <input type="submit" value="Add Doctor" name="doc_sub" class="btn btn-primary">

        </form>

        </div>

   </div><br><br>
   </div>

</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>