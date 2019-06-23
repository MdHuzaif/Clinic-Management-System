<!DOCTYPE html>
<?php include('func.php');?>
<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
 <div class="jumbotron" style="background:url('images/58.png') no-repeat; background-size:cover;height:300px;"></div>

<div class="row">
	 <div class="col-md-3">
	 	<div class="list-group">
	 		<a href="" class="list-group-item active" style="background-color:#3498DB; color:#ffffff;       border-color:#3498DB" >Management</a>
	 		<a href="dealer_details.php " class="list-group-item "> Dealer Details</a>
	 	
	 	  <a href="due-update.php" class="list-group-item">Dealer Payment</a>
	 		<a href="remove-dealer.php" class="list-group-item">Remove Dealer</a>
       <a href=" admin-panel.php" class="list-group-item">Appointment</a>
           </div>
           </div>


  <div class="col-md-8">
            <div class="card">
              <div class="card-body" style="background-color: #3498DB;color:#ffffff;">
              <h5>Medicine Dealer</h5>  
              </div>
              <div class="card-body">
              <form class="form-group" action="func.php" method="post">
                <label>Dealer Name :</label>
                <input type="text" name="dealer_name" class="form-control"><br> 
                <label>Dealer Contact :</label>
                <input type="text" name="dealer_contact" class="form-control"><br> 
                <label>Payment:</label>
                <input type="text" name="dealer_cash" class="form-control"><br>
                <label>Due Payment:</label>
            		<input type="text" name="due_payment" class="form-control"><br>
            		<label>Payment Date:</label>
            		<input type="date" name="dealer_date" class="form-control"><br>

                     <input type="submit" class="btn btn-primary" name="dealer_submit" value="Submit"> 
                 </form>
             </div>
         </div>
     </div>


       </div>





 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
</body>