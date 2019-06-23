<!DOCTYPE html>

<?php include("func.php"); ?>


  
<html>
<head>
  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
<div class="jumbotron" style="background:url('images/53.png') no-repeat; background-size:cover;height:300px;"></div>
<div class="container">
 <div class="card">
              <div class="card-body" style="background-color: #3498DB;color:#ffffff;">
              <div class="row">
              <div class="col-md-1">  
                <a href="medicines.php" class="btn btn-light">GO Back</a> 
              </div>
              <div class="col-md-3"><h3>Dealer Details</h3></div>
              <div class="col-md-8">
              <form class="form-group" action="dealer_search.php" method="post">
              <div class="row">
                <div class="col-md-10"><input type="text" name="dealer_search" class="form-control" placeholder="Enter Contact"></div>
              <div class="col-md-2"><input type="submit"  name="dealer_search_submit" class="btn btn-light" value="search"></div></div>
            </form>
        </div>
    </div>


              </div>
              <div class="card-body" style="background-color: #3498DB; color:#ffffff;">
              <table class="table table-hover">
  <thead>
    <tr>
      
      <th scope="col">Dealer Name</th>
      <th scope="col">Contact</th>
      <th scope="col">Last Payment</th>
      <th scope="col">DUE</th>
       <th scope="col">Date</th>
      
      
    </tr>
  </thead>
  <tbody>
  <?php  get_dealer_details(); ?>
   
  </tbody>
</table>
</div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>
