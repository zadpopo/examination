<!DOCTYPE html>
<html>
<head>
	<title>Student Information</title>
</head>
<body>

  <?php 
  include ("php/nav.php");

$q1 ="select concat(`FirstName`,' ',`MiddleName`,' ',`LastName`) as 'Name' from studenttbl where student_number	='$user'";
$r1 = mysqli_query($conn,$q1);
$d1 =$r1->fetch_assoc();


$q2 ="select * from studenttbl where student_number ='$user'";
$r2 = mysqli_query($conn,$q2);
$d2 =$r2->fetch_assoc();




  ?>


<div class="container">

  	<br>

<div class="card-deck" >
  <div class="card">
 
    <div class="card-body">
     <center> <h5 class="card-title">Student Info</h5></center><br>
    

  



 <div class=" table-sorting table-responsive-sm mx-auto " style="width:70%">
                   <table class="table table-striped table-bordered table-light"  id="tSortable22">
                    <thead class="thead-dark">
    <tr>
      <th scope="col"  style="width:40%"><span style="color:red">Name:</span> <b><?php echo $d1['Name'];?></b></th>
      <th scope="col"><span style="color:red">Student ID:</span> <b> <?php echo $d2["student_number"]; ?></b></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Address: </th>
      <td><?php echo $d2["Address"]; ?></td>
   
    </tr>
    <tr>
      <th scope="row">Enrolled School: </th>
      <td> <?php echo $d2["EnrolledSchool"]; ?></td>
 
    </tr>
    <tr>
      <th scope="row">Gender:</th>
      <td><?php echo $d2["Gender"]; ?></td>
      
    </tr>

     <tr>
      <th scope="row">Phone Number: </th>
      <td><?php echo $d2["TelPhone"]; ?></td>
      
    </tr>

     <tr>
      <th scope="row">Program:</th>
      <td><?php echo $d2["Program"]; ?></td>
      
    </tr>
  </tbody>
</table>


                           
                

</body>
</html>