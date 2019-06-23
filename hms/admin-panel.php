

<!DOCTYPE html>
<?php include('func.php');?>
<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
 <div class="jumbotron" style="background:url('images/39.jpg') no-repeat; background-size:cover;height:300px;"></div>
  

<div class="container-fluid">
<div class="row">
	 <div class="col-md-3">
	 	<div class="list-group">
	 		<a href="" class="list-group-item active" style="background-color:#3498DB; color:#ffffff;       border-color:#3498DB" >Management</a>
	 		<a href="patient_details.php" class="list-group-item ">Details</a>
	 		<a href="payment_status.php" class="list-group-item ">Payment Status</a>
	 		<a href="doctoradd.php" class="list-group-item">Doctor's Section</a>
      <a href="medicines.php" class="list-group-item">Medicines</a>
        <a href="cancellation.php" class="list-group-item">Cancellation</a>
           </div><br><br>
           <div class="col-md-1">	
            		<a href="logout.php" class="btn btn-light " style="background-color:#3498DB; color:#ffffff;border-color:#3498DB" >LOG OUT</a> 
            	</div>
          
       </div>

        
            <div class="col-md-8">
            <div class="card">
              <div class="card-body" style="background-color: #3498DB;color:#ffffff;">
              <h5>Book an appointment</h5>  
              </div>
              <div class="card-body">
              <form class="form-group" action="func.php" method="post">
                <label>First Name :</label>
                <input type="text" name="fname" class="form-control"><br> 
                <label>Last Name :</label>
                <input type="text" name="lname" class="form-control"><br> 
                <label>Email id :</label>
                <input type="text" name="email" class="form-control"><br>
                <label>Contact :</label>
            		<input type="text" name="contact" class="form-control"><br>
            		<label>Doctor Appointment :</label>
            		<select class="form-control" name="docapp">
            				<?php display_docs(); ?>
            		   <!--  <option value="Dr Amin From 6pm to 8pm">Dr jamal From 6pm to 8pm </option>
            		      <option value="Dr Rahman From 4pm to 6pm">Dr kamal From 4pm to 6pm </option>-->
            		      	
            		       </select><br>
                       <label>Appointment Date:</label>
                       <input type="date" name="appdate" class="form-control"><br> 
            		       <label>Payment :</label>
                      <select class="form-control" name="payment">
                      	<option value="paid">paid</option>
                      	<option value="pay later">pay later</option>
                      	
                      </select><br>
                           <input type="submit" class="btn btn-primary" name="pat_submit" value="Enter Appointment">  
            	</form>	

            	</div>
            </div>
        </div>
        <div class="col-md-1"></div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		swal({
  title: 'Welcome!',
  text: 'Have a great day!',
  imageUrl: 'images/18.jpg',
  imageWidth: 100,
  imageHeight: 50,
  imageAlt: 'Custom image',
  animation: false
})

	});
</script> -->

</body>
</html>