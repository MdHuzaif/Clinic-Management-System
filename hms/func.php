   <?php


$con=mysqli_connect("localhost","root","","hmsdb");

session_start();
if(isset($_POST['login_submit'])){
$username=$_POST['username'];
$password=$_POST['password'];


$query="select * from logintb where username='$username' and password='$password'";

$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)==1)
{
   
  $_SESSION['username']=$username;
  header("location:admin-panel.php");
} 

else
{

  echo "<script>alert('Error login')</script>";
  echo"<script>window.open('index.php','_self')</script>";
}


}




if(!isset($_SESSION['username']))
{
  header("location:index.php");
}
else
{
  
}





if(isset($_POST['pat_submit']))
{

  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $contact=$_POST['contact'];
  $docapp=$_POST['docapp'];
  $appdate=$_POST['appdate'];
  $payment=$_POST['payment'];
  
  $query="insert into doctorapp(fname,lname,email,contact,docapp,appdate,payment)values('$fname','$lname','$email','$contact','$docapp','$appdate','$payment')";
  

    $result=mysqli_query($con,$query);

    if($result)
    {
      echo"<script>alert('Appointment registered.')</script>";
      echo"<script>window.open('admin-panel.php','_self')</script>";
    }
}


function get_patient_details(){
 global $con;
 $query="select * from doctorapp";
 $result=mysqli_query($con,$query);
 while($row=mysqli_fetch_array($result)){

$fname=$row['fname'];
$lname=$row['lname'];
$email=$row['email'];
$contact=$row['contact'];
$docapp=$row['docapp'];
$appdate=$row['appdate'];
$payment=$row['payment'];
 echo " <tr>
      
      <td>$fname</td>
      <td>$lname</td>
      <td>$email</td>
       <td>$contact</td>
      <td>$docapp</td>
      <td>$appdate</td>
      <td>$payment</td>
     
    </tr>" ;


}
}



if(isset($_POST['update_data']))
{

 $contact=$_POST['contact'];
 $status=$_POST['status'];
 $query="Update doctorapp set payment='$status' Where contact='$contact';";
 $result=mysqli_query($con,$query);
 
 if($result)
    {
      echo"<script>alert('Updated Successfully.')</script>";
      echo"<script>window.open('admin-panel.php','_self')</script>";
    }

}


function display_docs()
{

  global $con;

   $query="select * from doctoradd";
   $result=mysqli_query($con,$query);

  while($row=mysqli_fetch_array($result))
{

  $name=$row['name'];
  echo "<option value='$name'>$name</option>";
}


}

if(isset($_POST['doc_sub']))
{


  $docname=$_POST['docname'];
  $query="insert into doctoradd(name)values('$docname');";
  $result=mysqli_query($con,$query);

  if($result)
    {
      echo"<script>alert('Added Successfully.')</script>";
      echo"<script>window.open('admin-panel.php','_self')</script>";
    }
  
  
}

if(isset($_POST['delete']))
{


  $patcontact=$_POST['patcontact'];
  $query="DELETE  FROM doctorapp WHERE contact='$patcontact'";
  $result=mysqli_query($con,$query);

  if($result)
    {
      echo"<script>alert('Remove Successfully.')</script>";
      echo"<script>window.open('admin-panel.php','_self')</script>";
    }
  
  
}

if(isset($_POST['docdelete']))
{


  $docname=$_POST['docname'];
  $query="DELETE  FROM doctoradd WHERE name='$docname'";
  $result=mysqli_query($con,$query);

  if($result)
    {
      echo"<script>alert('Remove Successfully.')</script>";
      echo"<script>window.open('admin-panel.php','_self')</script>";
    }
  
  
}




if(isset($_POST['dealer_submit']))
{

  $dealer_name=$_POST['dealer_name'];
  $dealer_contact=$_POST['dealer_contact'];
  $dealer_cash=$_POST['dealer_cash'];
  $due_payment=$_POST['due_payment'];
  $dealer_date=$_POST['dealer_date'];
 
  
  $query="insert into medicines(dname,dcontact,cash,dealerdue,dpdate)values('$dealer_name','$dealer_contact','$dealer_cash','$due_payment','$dealer_date')";
  

    $result=mysqli_query($con,$query);

    if($result)
    {
      echo"<script>alert('Have a good deal.')</script>";
      echo"<script>window.open('medicines.php','_self')</script>";
    }
}




function get_dealer_details(){
 global $con;
 $query="select * from medicines";
 $result=mysqli_query($con,$query);
 while($row=mysqli_fetch_array($result)){

$dealer_name=$row['dname'];
$dealer_contact=$row['dcontact'];
$dealer_cash=$row['cash'];
$due_payment=$row['dealerdue'];
$dealer_date=$row['dpdate'];

 echo " <tr>
      
      <td>$dealer_name</td>
      <td>$dealer_contact</td>
      <td>$dealer_cash</td>
       <td>$due_payment</td>
      <td>$dealer_date</td>
      
    </tr>" ;


}
}


if(isset($_POST['dealer-remove']))
{


  $dcontact=$_POST['dealercontact'];
  $query="DELETE  FROM medicines WHERE dcontact='$dcontact'";
  $result=mysqli_query($con,$query);

  if($result)
    {
      echo"<script>alert('Remove Successfully.')</script>";
      echo"<script>window.open('medicines.php','_self')</script>";
    }
  
  
}



if (isset($_POST['updatedue']))
{
  $contact = $_POST['dealer-contact'];
  $payment= $_POST['dealer-payment'];
  $date = $_POST['payment-date'];
  $due= $_POST['dealer-due'];
  $query="select * from medicines where dcontact like '$contact'";
  $result=mysqli_query($con,$query);

while($row = mysqli_fetch_array($result))
{
 

  $query = "update medicines set dealerdue='$due',  cash = '$payment' ,dpdate = '$date' where dcontact = '$contact'";
  if(mysqli_query($con,$query))
{
echo "<script>alert('Payment Succesfull')</script>";
echo "<script>window.open('medicines.php','_self')</script>";
}
}
}

?>


