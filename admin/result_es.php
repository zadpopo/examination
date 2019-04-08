
<?php

include 'php/nav.php';

if ($_GET) {
    $exam_id = $_GET['id'];
}

$s9= "SELECT * FROM lexamtb WHERE exam_no = '$exam_id'";
$r9 = $conn->query($s9);
$d9= $r9->fetch_assoc();


$rows= mysqli_query($conn, "SELECT * FROM examtbl where exam_no ='$exam_id'");
$qrows= mysqli_num_rows($rows);
  

?>

<div class="container">

    <br>

<div class="card-deck" >
  <div class="card">
 
    <div class="card-body">
     <center> <h5 class="card-title"><?php echo $d9['program'];?> -<?php echo $d9['exam_name'];?></h5></center>
     <center><h5><?php echo $qrows?> Questions </h5></center>
    

  <?php 
 $query= "SELECT * FROM evaltbl WHERE active ='$active' AND exam_no ='$exam_id'";
 $result= mysqli_query($conn,$query);


  ?>

<div class=" table-sorting table-responsive-sm mx-auto " style="width:90%">
                   <table class="table table-striped table-bordered table-light"  id="tSortable22">
                    <thead class="thead-dark">

                       <tr>
                        <th><center>Name</center></th>
                        <th style="width:5%;color:lightgreen">Correct</th>
                        <th style="width:5%;color:red">Mistake</th>
                        <th style="width:5%;color:gray">Unanswered</th>

                  
                     
                        </tr>
                       </thead>
                       <tbody>

                        <?php
                         while($row = mysqli_fetch_array($result)){
                        ?>
<?php 

$stud_no = $row["stud_no"];



  $s9= "SELECT * FROM studenttbl WHERE student_number = '$stud_no'";
  $r9 = $conn->query($s9);
  $d9= $r9->fetch_assoc();
 

$q1= "SELECT SUM( examtbl.points)as correct FROM examtbl INNER JOIN answertbl ON examtbl.exam_no = answertbl.exam_no and examtbl.exam_id = answertbl.q_id and examtbl.answer =answertbl.final_ans WHERE answertbl.stud_id ='$stud_no' AND examtbl.exam_no='$exam_id'" ;
$r1= mysqli_query($conn,$q1);
$d1= $r1->fetch_assoc();
$correct =  $d1["correct"];


if ($correct == '') {
  $cor = '0';

}else{
  $cor = $correct;
}


 $q2= "SELECT * FROM lexamtb WHERE exam_no = '$exam_id'";
  $r2 = $conn->query($q2);
  $d2= $r2->fetch_assoc();
  $name = $d2['exam_name'];



$q3= "SELECT SUM( examtbl.points)as error FROM examtbl INNER JOIN answertbl ON examtbl.exam_no = answertbl.exam_no and examtbl.exam_id = answertbl.q_id and examtbl.answer !=answertbl.final_ans WHERE answertbl.stud_id ='$stud_no' AND examtbl.exam_no='$exam_id'" ;
$r3= mysqli_query($conn,$q3);
$d3= $r3->fetch_assoc();

$error =  $d3["error"];


if ($error == '') {
  $er = '0';

}else{
  $er = $error;
}




$rowsa= mysqli_query($conn, "SELECT * FROM answertbl where exam_no ='$exam_id' AND stud_id ='$stud_no'");
$qrowsa= mysqli_num_rows($rowsa);

$Unanswered = $qrows- $qrowsa;
?>
                         <tr>                    
                                      

               
                     <th><?php echo $d9["LastName"];?>, <?php echo $d9["FirstName"];?> <?php echo $d9["MiddleName"];?></th>

                     <th><?php echo $cor?></th>
                     <th><?php echo $er?></th>
                     <th><?php echo $Unanswered?></th>


                       </tr>
<?php 
}
?>

 
  </tbody>
</table>
</div>

