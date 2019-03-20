<?php

include("../php/connections.php");

if (isset($_POST['stud_no'])) {

  $stud_no = $_POST['stud_no'];

  $sql = "SELECT * FROM studenttbl WHERE student_number = '$stud_no'";

  $result = $conn->query($sql);

  $data= $result->fetch_assoc();

  $prog = $data['Program'];

  


}

$s1= "SELECT * FROM yeartbl WHERE status = '1'";
  $r1 = $conn->query($s1);
  $d1= $r1->fetch_assoc();
  $active = $d1['year'];


 ?>


<h5>Name: <?php echo $data['LastName']?>, <?php echo  $data['FirstName']?> <?php echo  $data['MiddleName']?>
<br>


</h5>
<span>ID: <?php echo $data['student_number']?></span>

<br>
<br>

<center><?php echo $prog?></center>


<?php 
$query= "SELECT * FROM  block  WHERE program ='$prog' AND year ='$active'";
 $result= mysqli_query($conn,$query);


?>

<table class="table">
  <thead class="thead-dark">
    <tr>
    
      <th scope="col">Block Name</th>
      <th scope="col">Slots</th>
      <th scope="col">Lecturer</th>
     
    </tr>
  </thead>
  <tbody>
  	 <?php
     while($row = mysqli_fetch_array($result)){
     ?>
    <tr>
    
      <td><?php echo $row["block_name"]; ?></td>
      <td><?php echo $row["slots"]; ?></td>
      <td><?php echo $row["lecturer"]; ?></td>
    </tr>
  


   <?php
   }
  ?> 
  </tbody>
</table>


</table>
 <form action="" method="POST">




<div class="form-group row">
    <label for="" class="col-sm-3 col-form-label"><span style=color:red; >*</span>Block</label>
    <div class="col-sm-8">
       <select class="form-control" name="prog" id="bloc" required>
          <option value=''>Select</option>

            <?php


             $q1="SELECT * FROM  block  WHERE program ='$prog'  AND year ='$active'";



           $r1= mysqli_query($conn,$q1);


                    while  ($row = mysqli_fetch_array($r1)){
                     $block= $row["block_name"];
                     echo "<option value='$block'>$block</option>";
                   }
                    ?>
    </select>
    </div>
  </div>

  <div class="form-group row">
    <label for="" class="col-sm-3 col-form-label"><span style=color:red; >*</span>Tuition Fee</label>
    <div class="col-sm-3">

    	<input type="" id="slots" name="" required class="form-control" onChange="change_slot()">

</div>

 <label for="" class="col-sm-3 col-form-label"><span style=color:red; >*</span>Payment</label>
    <div class="col-sm-3">

    	<input type="" id="slots" name="" required class="form-control" onChange="change_slot()">

    </div>
  </div>





</form>