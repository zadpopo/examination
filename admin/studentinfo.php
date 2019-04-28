<!DOCTYPE html>
<html>
<head>
	<title>Student Information</title>
</head>
<body>

  <?php 
  include ("php/nav.php");




  if ($_GET) {
    $id = $_GET['id'];


$q1 ="select concat(`FirstName`,' ',`MiddleName`,' ',`LastName`,' ',Suffix) as 'Name' from studenttbl where student_number	='$id'";
$r1 = mysqli_query($conn,$q1);
$d1 =$r1->fetch_assoc();


$q2 ="select * from studenttbl where student_number ='$id'";
$r2 = mysqli_query($conn,$q2);
$d2 =$r2->fetch_assoc();


}

  ?>
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

<div class="container">

  	<br>

<div class="card-deck" >
  <div class="card">
 
    <div class="card-body">
     <center> <h5 class="card-title">Student Info</h5></center><br>
    

  



 <div class=" table-sorting table-responsive-sm mx-auto " style="width:70%">
                   <table class="table table-striped table-bordered table-light">
                    <thead class="thead-dark">
    <tr>
      <th scope="col"  style="width:40%"><span style="color:red">Name:</span> <b><?php echo $d1['Name'];?></b></th>
      <th scope="col"><span style="color:red">Student ID:</span> <b> <?php echo $d2["student_number"]; ?></b></th>
    </tr>
  </thead>
  <tbody>

    <tr>
      <th scope="row">Nickname: </th>
      <td><?php echo $d2["Nickname"]; ?></td>
   
    </tr>
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
      <th scope="row">Email: </th>
      <td><?php echo $d2["Email"]; ?></td>
      
    </tr>

     <tr>
      <th scope="row">Program:</th>
      <td><?php echo $d2["Program"]; ?></td>
      
    </tr>

    <tr>
      <th scope="row">Status: </th>
      <td><?php echo $d2["Status"]; ?></td>
   
    </tr>

    <tr>
      <th scope="row">Package: </th>
      <td><?php echo $d2["Package"]; ?></td>
   
    </tr>


    <tr>
      <th scope="row">Guardian Name: </th>
      <td><?php echo $d2["GuardianName"]; ?></td>
   
    </tr>
 <tr>
      <th scope="row">Guardian Contact Number: </th>
      <td><?php echo $d2["GContactNumber"]; ?></td>
   
    </tr>


      <tr>
      <th scope="row">Relationship: </th>
      <td><?php echo $d2["Relationship"]; ?></td>
   
    </tr>

    <tr>
      <th scope="row">Balance:</th>
      <td>₱ <?php echo $d2["balance"]; ?></td>
      
    </tr>


  </tbody>
</table>
</div>



 <div class=" table-sorting table-responsive-sm mx-auto " style="width:70%">

  <b>Statement of Account</b>
                   <table class="table table-striped table-bordered table-light"  id="tSortable22">
                    <thead class="thead-dark">
    <tr>
      <th >Date<b></b></th>
      <th> Receipt #</b></th>
      <th> Description</b></th>
      <th>Amount</b></th>
    </tr>
  </thead>


  <tbody>
  <tr>
<?php 

$query1= "SELECT * FROM enrolltbl WHERE student_number='$id'";
$result1= mysqli_query($conn,$query1);

while($row1 = mysqli_fetch_array($result1)){

?>


      <th><?php echo date('F j Y',strtotime( $row1["datee"]));?></th>
      <td><?php echo $row1["enroll_date"];?></td>
      <td>Tuition Fee</td>
      <td align="right" style="color:red">₱ <?php echo $row1["tuition"]; ?></td>
   
    </tr>
<?php 
}
?>

    <tr>
<?php 

$query= "SELECT * FROM transactiontbl WHERE stud_id='$id'";
$result= mysqli_query($conn,$query);

while($row = mysqli_fetch_array($result)){

?>


      <th><?php echo date('F j Y',strtotime( $row["trans_date"]));?></th>
      <td><?php echo $row["receipt"]; ?></td>
      <td><?php echo $row["description"]; ?></td>
      <td align="right" style="color:green">₱ <?php echo $row["amount"]; ?></td>
   
    </tr>
  
<?php 
}
?>    
  </tbody>
</table>



                           
                

</body>
</html>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
 <script>
      $(document).ready(function() {
   
    $('#tSortable22').DataTable();
} );
  
 </script>

