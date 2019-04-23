<!DOCTYPE html>
<html>
<head>
  <title>Examination</title>
</head>
<body>
<?php 
  include ("php/bg_exam.php");

  if ($_GET) {
    $id = $_GET['id'];



  $q1="SELECT * FROM examtbl WHERE exam_no='$id'";
 
 $r1= mysqli_query($conn,$q1);




}
$status2 ="";
$status ="hidden";


$check_q= mysqli_query($conn, "SELECT * FROM examtbl WHERE exam_no='$id'");
$rows_check_q= mysqli_num_rows($check_q);


$check_a= mysqli_query($conn, "SELECT * FROM answertbl WHERE exam_no='$id' and stud_id='$user'");
$rows_check_a= mysqli_num_rows($check_a);

if ($rows_check_q == $rows_check_a ) {
  
  $status ="";
  $status2 ="hidden";

}


$s2= "SELECT * FROM timetbl WHERE exam_id='$id'";
$r2 = $conn->query($s2);
$d2= $r2->fetch_assoc();
$stime = $d2['duration'];

$dtime = $stime  * 60000;  


  ?>
  

<div class="container padding">





<br>

<div style="background-color: maroon"  class="alert" role="alert">

  <center>

<h2><b style="color:white">Exam Sheet</b><h2> 


  <div id="response" style="color:white" <?php echo $status2 ?>></div>


<script type="text/javascript">
 var x = setInterval(fun1,1000);
 setTimeout('xx()',<?php echo $dtime?>);
 function fun1(){
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.open("GET","response.php",false);
  xmlhttp.send(null);
  var str = document.getElementById("response").innerHTML=xmlhttp.responseText;
  /*if(str.slice(7,9) == "58"){
   window.location.href='login.php';
  }*/

 }
 function xx(){
   clearInterval(x);
   alert('Time is up!');
   window.location.href='result.php?id=<?php echo $id?>';
   
   //clearInterval(y);
  }
  
</script>

</center>
</div>

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


  

<div class="alert" style="background-color: white " role="alert">
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
  <button  type="submit" name="bexm" <?php echo $button?>  class="btn btn-warning">Submit</button>
</div>

</form>

</div>



<?php

 $counter++;
   }
  ?>   

<br>




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
  

