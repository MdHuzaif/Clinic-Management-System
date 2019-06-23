<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
</head>

<body>


<div class="jumbotron" style="background:url('images/44.png') no-repeat; background-size:cover;height:300px;"></div>
<div class="row">
	 <div class="col-md-3">
	 	<div class="list-group">
	 		<a href="" class="list-group-item active" style="background-color:#3498DB; color:#ffffff; border-color:#3498DB" >Management</a>
	 		<a href="dealer_details.php" class="list-group-item ">Dealer Details</a>
      <a href="medicines.php" class="list-group-item ">Dealer's Section</a>
	 	
	 	  <a href="remove-dealer.php" class="list-group-item">Remove Dealer</a>
	 		<a href="admin-panel.php" class="list-group-item">Appointment</a>
       
           </div>
      
          
       </div>

       <div class="col-md-5">
       <div class="card">
        <div class="card-body">
        <form class="form-group" method="post" action="">
          <label>Dealer's Contact :</label>
        <input type="text" name="dealer-contact" class="form-control" placeholder="Enter Dealer's Contact"><br>
          <label>Payment:</label>
        <input type="text" name="dealer-payment" class="form-control" placeholder="Enter Dealer's Payment"><br>
         <label>Due Payment:</label>
        <input type="text" name="dealer-due" class="form-control" placeholder="Enter Due Payment"><br>
         <label>Payment Date:</label>
        <input type="date" name="payment-date" class="form-control" placeholder="Enter Date"><br>
        
        
           <input type="submit" value="UPDATE" name="updatedue" class="btn btn-primary">

        </form>



        </div>

   </div><br><br>

</div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>