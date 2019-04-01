
<?php 
include '../php/connections.php'?>


<?php
if (isset($_POST['exam_id'])) {

  $exam_id= $_POST['exam_id'];



  $s1= "SELECT * FROM timetbl WHERE exam_id = '$exam_id'";

  $r1 = $conn->query($s1);

  $d1= $r1->fetch_assoc();

   $d1['duration'];

  



  }   
?>



<form action="" method="POST">


  <div class="form-group row" >
    <label for="" class="col-sm-3 col-form-label">Minutes</label>
    <div class="col-sm-8">
    <input type="number" class="form-control"  value="<?php echo   $d1['duration'];?>" name="editmin" required placeholder="">
  </div>
</div>


 <div class="modal-footer">
        <button  type="submit" name="beditmin" class="btn btn-warning">Add</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
</form>