<?php 

include('func.php');

global $con;


if(isset($_GET['mobile']))
{


	$contact=$_GET['mobile'];

	$query="DELETE * FROM doctorapp WHERE contact='$contact'";

	$result=mysqli_query($con,$query);
}


 if($result)
    {
      echo"<script>alert('Remove Successfully.')</script>";
      echo"<script>window.open('patient_details.php','_self')</script>";
    } 








?>