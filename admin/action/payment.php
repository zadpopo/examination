<?php
include("../php/connections.php");

$s1= "SELECT * FROM yeartbl WHERE status = '1'";
  $r1 = $conn->query($s1);
  $d1= $r1->fetch_assoc();
  $active = $d1['year'];

if (isset($_POST['stud_no'])) {
  $stud_no = $_POST['stud_no'];

  $sql = "SELECT * FROM studenttbl WHERE student_number = '$stud_no'";
  $result = $conn->query($sql);
  $data= $result->fetch_assoc();
  $bal = $data['balance'];
  $prog = $data['Program'];

   $s2 = "SELECT * FROM enrolltbl WHERE student_number = '$stud_no' AND enroll_date ='$active'";
  $r2 = $conn->query($s2);
  $d2= $r2->fetch_assoc();
  $block_id= $d2['block_id'];


  $s3 = "SELECT * FROM block WHERE block_id = '$block_id'";
  $r3 = $conn->query($s3);
  $d3= $r3->fetch_assoc();
  $block_name= $d3['block_name'];
  
}
 ?>


<h5>Name: <?php echo $data['LastName']?>, <?php echo  $data['FirstName']?> <?php echo  $data['MiddleName']?>
<br>


</h5>
<span>ID: <?php echo $data['student_number']?></span>

<br>
<br>

<center><?php echo $prog;?> - <?php echo  $block_name;?></center>




 <form action="" method="POST">




<div class="form-group row">
    <label for="" class="col-sm-5 col-form-label"><span style=color:red; >*</span>Amount</label>
    <div class="col-sm-6">

      <input type="number" name="amount" required class="form-control">
    </div>
  </div>

  <div class="form-group row">
    <label for="" class="col-sm-5 col-form-label"><span style=color:red; >*</span>OR Number</label>
    <div class="col-sm-6">

    	<input type="text" name="or" required class="form-control">

</div>

  </div>


  <div class="form-check">
  <input class="form-check-input" type="radio" name="des" id="exampleRadios1" value="Down payment" checked>
  <label class="form-check-label col-sm-6" for="exampleRadios1">
   Down payment
  </label>

  <input class="form-check-input" type="radio" name="des" id="exampleRadios2" value="Full payment">
  <label class="form-check-label" for="exampleRadios2">
    Full payment
  </label>

  	<input type="hidden" value="<?php echo $stud_no?>" name="stud_no" required class="form-control">
    <input type="hidden" value="<?php echo $bal?>" name="bal" required class="form-control">



 <div class="modal-footer">
 		<button type="submit" name="bpay" class="btn btn-success">Register</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    
      </div>


</form>



