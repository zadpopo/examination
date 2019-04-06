  <?php 
  include ("php/nav.php");


  if ($_GET) {
    $id = $_GET['id'];

$q1= "SELECT SUM( examtbl.points)as correct FROM examtbl INNER JOIN answertbl ON examtbl.exam_no = answertbl.exam_no and examtbl.exam_id = answertbl.q_id and examtbl.answer =answertbl.final_ans WHERE answertbl.stud_id ='$user' AND examtbl.exam_no='$id'" ;
$r1= mysqli_query($conn,$q1);
$d1= $r1->fetch_assoc();
$correct =  $d1["correct"];


if ($correct == '') {
	$cor = '0';

}else{
	$cor = $correct;
}
}

 $q2= "SELECT * FROM lexamtb WHERE exam_no = '$id'";
  $r2 = $conn->query($q2);
  $d2= $r2->fetch_assoc();
  $name = $d2['exam_name'];



$q3= "SELECT SUM( examtbl.points)as error FROM examtbl INNER JOIN answertbl ON examtbl.exam_no = answertbl.exam_no and examtbl.exam_id = answertbl.q_id and examtbl.answer !=answertbl.final_ans WHERE answertbl.stud_id ='$user' AND examtbl.exam_no='$id'" ;
$r3= mysqli_query($conn,$q3);
$d3= $r3->fetch_assoc();

$error =  $d3["error"];


if ($error == '') {
  $er = '0';

}else{
  $er = $error;
}


$rows= mysqli_query($conn, "SELECT * FROM examtbl where exam_no ='$id'");
$qrows= mysqli_num_rows($rows);


$rowsa= mysqli_query($conn, "SELECT * FROM answertbl where exam_no ='$id' AND stud_id ='$user'");
$qrowsa= mysqli_num_rows($rowsa);

$Unanswered = $qrows- $qrowsa;
  ?>
  
  

<form method="POST">

    <div class="container col-md-5">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Exam result for <?php echo $name;?> </div>
        <div class="card-body">
        
        <div class="container">

          <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col"><?php echo $stu_fullname?></th>
      <th scope="col">Points</th>
        </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row" style="color: green">Correct</th>
      <td style="color: green"><b><?php echo $cor?></b></td>
     
    </tr>
    <tr>
      <th scope="row" style="color: red">Mistake</th>
      <td style="color: red"><b><?php echo $er?></b></td>
      
    </tr>

     <tr>
      <th scope="row" style="color: gray">Unanswered</th>
      <td style="color: gray"><b><?php echo $Unanswered?></b></td>
      
    </tr>
    <tr>
      <th scope="row">Questions</th>
      <td><b><?php echo $qrows?></b></td>
     
    </tr>

     <tr>
      <th scope="row"></th>
      <td  align="right"><a type="button"  class="btn btn-danger" href="show_exam.php">Back</a></td>
     
    </tr>
  </tbody>
</table>
        </div>
     
        </div>
      </div>
    </div>
  </div>


 