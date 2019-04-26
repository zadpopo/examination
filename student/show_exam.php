<!DOCTYPE html>
<html>
<head>
  <title>Exam List</title>
</head>
<body>
<?php 
 include ("php/nav.php");


  $s2= "SELECT * FROM studenttbl WHERE student_number = '$user'";

  $r2= $conn->query($s2);

  $d2= $r2->fetch_assoc();

  $prog = $d2['Program'];




 $cenroll = mysqli_query($conn, "SELECT * FROM enrolltbl WHERE enroll_date='$active' and student_number ='$user'");

 $CheckEnroll= mysqli_num_rows($cenroll);

if ($CheckEnroll > 0) {


$q1="SELECT * FROM lexamtb WHERE actyear ='$active' AND status='1' AND program='$prog'";
 
 $r1= mysqli_query($conn,$q1);



}else{


}







?>





<div class="container">
<br>


<br>






   <div class=" table-sorting table-responsive-sm mx-auto" style="width:95%">
                   <table class="table table-striped table-bordered  table-dark"  id="tSortable22">
                    <thead class="thead-dark">
                     <tr>
                                            <th style="width:1%">#</th>
                                            <th style="width:25%">Exam List</th>
                                            <th  style="width:25%">Exam Period</th>
                                            <th style="width:1%">Questions</th> 
                                            <th style="width:1%">Minutes</th>  
                                          
                                            <th style="width:1%">Action</th>                         
                                       
                                            
                                           
                                                                                 
                                        </tr>
                                      </thead>
                                       
                                        <tbody >
                                        <?php
                                        $counter =1;
                                        while($row = mysqli_fetch_array($r1)){
                                     


 $exam_no= $row["exam_no"];

   $button2='hidden';

  $button= '';  

  $check_exam = mysqli_query($conn, "SELECT * FROM evaltbl WHERE exam_no='$exam_no' AND stud_no='$user' ");
  $check_exam_row = mysqli_num_rows($check_exam);

    if($check_exam_row > 0) {
      
      $button = 'hidden style="cursor: not-allowed;"';
  
      $button2='';
    }


?>

                                      

                                        <tr weight="100%">


                                        <td> <?php echo $counter ?></td>
                                        <td><?php echo $row["exam_name"]; ?></td>

                                        <td><?php echo date('F j Y ',strtotime($row['edate'] ));?>
                                        <?php echo date('h:i A',strtotime($row['etime_s']));?> To
                                        <?php echo date('h:i A',strtotime($row['etime_d']));?>
                                          


                                        </td>

<?php 

$rows= mysqli_query($conn, "SELECT * FROM examtbl where exam_no ='$exam_no'");
$qrows= mysqli_num_rows($rows);



?>
                                        <td><?php echo $qrows?></td>

<?php 


  $s3= "SELECT * FROM timetbl WHERE exam_id = '$exam_no'";
  $r3 = $conn->query($s3);
  $d3= $r3->fetch_assoc();
  $du = $d3['duration'];

  




?>
                                        <td><?php echo $du?></td>
                                        <td  style="color: white;">



                                    <form action="" method="POST">

                                     <input type="hidden" name="e_id" value="<?php echo $row["exam_no"]; ?>">
                                     <input type="hidden" name="edate" value="<?php echo $row['edate']?>">
                                     <input type="hidden" name="es" value="<?php echo $row['etime_s']?>">
                                     <input type="hidden" name="ed" value="<?php echo $row['etime_d']?>">




                                      <button type="submit" <?php echo   $button ?>  value="submit" name="TE" onclick="return confirm_pay()"  class="btn btn-primary btn-sm "><b>Take</b></button> 

                                      <!--

                                          <a href="eval.php?id=<?php echo $row["exam_no"]; ?>"  onclick="return confirm_pay()" <?php echo   $button ?>  class="btn btn-primary btn-sm "><b>Take</b></a>
                                      -->


                                    </form>

                                      


                                        <a href="result.php?id=<?php echo $row["exam_no"]; ?>"  <?php echo   $button2 ?>  class="btn btn-warning btn-sm "><b>Result</b></a>

                                

                                     </td>
                                                                                                                    
<?php
 $counter++;
   }
  ?>                         

  </tbody>


</div>
</div>
<script type="text/javascript">
function confirm_pay() {

  return confirm('Are You Sure?');

  
}
</script>

</body>
</html>


<?php 




 

if (isset($_POST['TE'])) {

date_default_timezone_set ("Asia/Manila");

  $datee = date("Y-m-d");
  $timee = date("H:i:s");

  $e_id = $_POST['e_id'];
  $edate = $_POST['edate'];
  $es = $_POST['es'];
  $ed = $_POST['ed'];


if ($edate == $datee) { 


  if (($es <= $timee) && ($ed >= $timee)){
    
 echo "<script>window.location.href = 'eval.php?id=$e_id';</script>";

  }else{

    echo "<script language = 'javascript'>alert('ERROR! It exam is not available!')</script>";
  }
  


} else {

   echo "<script language = 'javascript'>alert('ERROR! It exam is not available!')</script>";
  
}


}
?>