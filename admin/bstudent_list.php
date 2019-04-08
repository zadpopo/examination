<?php 

include "php/nav.php";

  if ($_GET) {
  $id = $_GET['id'];

}

 $query= "SELECT * FROM enrolltbl WHERE enroll_date ='$active' AND block_id ='$id'";
 $result= mysqli_query($conn,$query);


  $s2= "SELECT * FROM block WHERE block_id = '$id'";
  $r2 = $conn->query($s2);
  $d2= $r2->fetch_assoc();


?>

 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
 
<div class="container">

    <br>

<div class="card-deck" >
  <div class="card">
 
    <div class="card-body">
     <center> <h5 class="card-title">Student Masterlist</h5></center>

    <center> <?php echo $d2["program"];?> <?php echo $d2["block_name"];?></center>
     
       

<br>

 
 <div class="table-sorting table-responsive-sm mx-auto" >
                                        <table class="table table-striped table-bordered"  id="tSortable20">
                                        <thead class="thead-dark">   


                                            <th style="width:14%">StudentNumber</th>
                                             <th style="width:14%">Last Name</th>
                                            <th style="width:14%">First Name</th>
                                            <th style="width:14%">Middle Name</th>
                                            <th style="width:5%">Suffix</th>
                                            <th style="width:23%">School</th>
                                            <th style="width:14%">Number</th>
                                           
                                      
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <?php
                                        while($row = mysqli_fetch_array($result)){
                                        ?>
<?php 

$stud_no = $row["student_number"];



  $s1= "SELECT * FROM studenttbl WHERE student_number = '$stud_no'";
  $r1 = $conn->query($s1);
  $d1= $r1->fetch_assoc();
 

?>

                                         <td><?php echo $d1["student_number"];?></td>
                                         <td><?php echo $d1["LastName"];?></td>
                                         <td><?php echo $d1["FirstName"];?></td>
                                         <td><?php echo $d1["MiddleName"];?></td>

                                         <td></td>
                                         <td><?php echo $d1["EnrolledSchool"];?></td>
                                         <td><?php echo $d1["TelPhone"];?></td>



                                     
                                         
                                        </tr>
   <?php
   }
  ?>
  </tbody>
</table>
</div>
