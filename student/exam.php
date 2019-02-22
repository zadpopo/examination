
  <?php 
  include ("php/nav.php");



  if ($_GET) {
    $id = $_GET['id'];



  $q1="SELECT * FROM examtbl WHERE exam_no='$id'";
 
 $r1= mysqli_query($conn,$q1);




}
  ?>
  

<div class="container padding">





<br>
  <center>

<h2 style="color: skyblue"><b>Exam Sheet</b><h2> 


</center>


 <?php 


   $counter =1;
  while($row = mysqli_fetch_array($r1)){
 ?>

<?php 
 $button="";
 $qid=$row['exam_id'];
 $radio = '';
 $fm='';


 $check_lock= mysqli_query($conn, "SELECT * FROM  answertbl WHERE exam_no='$id' AND stud_id ='$user' AND q_id='$qid' ");
 $check_lock_row= mysqli_num_rows($check_lock);
 if($check_lock_row > 0) {

  $button = 'disabled style="cursor: not-allowed;"';
  $radio = 'disabled';
  $fm='hidden';
 }

?>

<form action="" <?php  echo $fm?> method="POST">


  

<div class="alert alert-primary" role="alert">
  <?php echo $counter ?>) <?php echo $row['question'] ?>
<input type="hidden" value="<?php echo $row['exam_id'] ?>" name="qid">


<div class="form-check">
  <input class="form-check-input" <?php echo $radio ?>  type="radio" name="ans" id="exampleRadios1" value="a" required>
  
  <?php echo $row['a'] ?>
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" <?php echo $radio ?>  type="radio" name="ans" id="exampleRadios2" value="b" >

   <?php echo $row['b'] ?>
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" <?php echo $radio ?> type="radio" name="ans" id="exampleRadios3" value="c">

  <?php echo $row['c'] ?>
  </label>
</div>

<div class="modal-footer">
  <button  type="submit" name="bexm" <?php echo $button?>  class="btn btn-warning">Lock</button>
</div>

</form>

</div>



<?php

 $counter++;
   }
  ?>   

<br>


<?php

$status ="hidden";

$check_q= mysqli_query($conn, "SELECT * FROM examtbl WHERE exam_no='$id'");
$rows_check_q= mysqli_num_rows($check_q);


$check_a= mysqli_query($conn, "SELECT * FROM answertbl WHERE exam_no='$id' and stud_id='$user'");
$rows_check_a= mysqli_num_rows($check_a);

if ($rows_check_q == $rows_check_a ) {
  
  $status ="";
}






 ?>

<div class="alert alert-success" <?php echo $status ?> role="alert">
 <center><h3>Congratulation! You Successfully Answered All Questions.</h3></center> 
</div>


<div class="modal-footer">
<a type="button"  <?php echo $status ?> class="btn btn-success" href="result.php?id=<?php echo $id?>">Result</a>
</div>   

<?php 

if (isset($_POST['bexm'])) {

$qid=$_POST['qid'];
$ans=$_POST['ans'];


  $sql= "INSERT INTO answertbl (exam_no, q_id, stud_id,final_ans) VALUES ('$id', '$qid', '$user', '$ans')";

         
           
            if($conn->query($sql) === TRUE ){


              echo "<script>window.location.href = 'exam.php?id=$id';</script>";
                  }else{
                  echo "Error" . $sql . '' . $conn->connect_error;
                  }
               $conn->close();



}
?>


 







<script type="text/javascript">
function confirm_pay() {

  return confirm('Are You Sure?');

  
}
</script>

  </body>
</html>
