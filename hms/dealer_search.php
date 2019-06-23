
<!DOCTYPE html>
<html>
<head>
	
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>

<?php

include("func.php");
if(isset($_POST['dealer_search_submit']))
{

$contact=$_POST['dealer_search'];
$query="select * from medicines where dcontact='$contact'";
$result=mysqli_query($con,$query);

echo"<div class='cotainer-fluid' style='margin-top:5px;'>
<div class'card'>
<div class='card-body'><a href='dealer_details.php' class='btn btn-light'>Go Back</a></div>
 <img src='images/51.png' class='card-img-top' style='height:400px;width:1250px;'>

<div class='card-body' style='background-color: #3498DB; color:#ffffff;'>
            	<table class='table table-hover'>

    <tr>
      
      <th scope='col'>Dealer Name</th>
      <th scope='col'>Contact</th>
      <th scope='col'>Last Payment</th>
      <th scope='col'>DUE</th>
      <th scope='col'>Date</th>
    </tr>
  </thead>
  <tbody>

   ";



while($row=mysqli_fetch_array($result)){


	$dealer_name=$row['dname'];
	$dealer_contact=$row['dcontact'];
	$dealer_cash=$row['cash'];
	$due_payment=$row['dealerdue'];
	$dealer_date=$row['dpdate'];
	
	echo"
     <tr>
     <td>$dealer_name</td>
     <td>$dealer_contact</td>
     <td>$dealer_cash</td>
     <td>$due_payment</td>
     <td>$dealer_date</td>
     
     </tr>
	";
	
}
 
 echo"</tbody></table></div></div></div>";


}

?><html>
<head>
  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>

<?php
include("func.php");
if(isset($_POST['patient_search_submit']))
{

$contact=$_POST['search'];
$query="select * from doctorapp where contact='$contact'";
$result=mysqli_query($con,$query);

echo"<div class='cotainer-fluid' style='margin-top:5px;'>
<div class'card'>
<div class='card-body'><a href='patient_details.php' class='btn btn-light'>Go Back</a></div>
 <img src='images/35.png' class='card-img-top' style='height:400px;width:1250px;'>

<div class='card-body' style='background-color: #3498DB; color:#ffffff;'>
              <table class='table table-hover'>

    <tr>
      
      <th scope='col'>First Name</th>
      <th scope='col'>Last Name</th>
      <th scope='col'>Email id</th>
      <th scope='col'>Contact</th>
      <th scope='col'>Doctor Appointment</th>
      <th scope='col'>Payment</th>
    </tr>
  </thead>
  <tbody>

   ";



while($row=mysqli_fetch_array($result)){


  $fname=$row['fname'];
  $lname=$row['lname'];
  $email=$row['email'];
  $contact=$row['contact'];
  $docapp=$row['docapp'];
  $payment=$row['payment'];
  echo"
     <tr>
     <td>$fname</td>
     <td>$lname</td>
     <td>$contact</td>
     <td>$email</td>
     <td>$docapp</td>
     <td>$payment</td>
     </tr>
  ";
  
}
 
 echo"</tbody></table></div></div></div>";


}

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>
