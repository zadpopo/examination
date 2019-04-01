

<!DOCTYPE html>
<html>
<head>
 

  <title>Examination Sheet</title>
</head>
<body>


  <?php 
  include ("php/nav.php");



  if ($_GET) {
    $id = $_GET['id'];



  $q1="SELECT * FROM examtbl WHERE exam_no='$id'";
 
 $result= mysqli_query($conn,$q1);




}
  ?>
  


<div class="container padding">





<br>
  <center>

<h2 style="color: white"><b>Exam Sheet</b><h2> 
<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#cq">
Add Question
</button>

<?php 

$button='';
$button1='hidden';

 $check_time= mysqli_query($conn, "SELECT * FROM timetbl WHERE exam_id='$id'");
 $check_time_row= mysqli_num_rows($check_time);
 if($check_time_row > 0) {



  $s2= "SELECT * FROM timetbl WHERE exam_id='$id'";
  $r2 = $conn->query($s2);
  $d2= $r2->fetch_assoc();

  $timee= $d2['duration']; 


  


  $button = 'hidden style="cursor: not-allowed;"';
  $button1 ='';
 }else{

  $timee='';

 }



?>




<button type="button" <?php echo $button?>class="btn btn-warning btn-sm" data-toggle="modal" data-target="#timer">
Add Timer
</button>

</center>


<!-- Modal  questions-->
<div class="modal fade" id="timer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">

    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel" >Add Timer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

 <form action="" method="POST">


  <div class="form-group row" >
    <label for="" class="col-sm-3 col-form-label">Minutes</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="" name="min" required placeholder="">
  </div>
</div>


 <div class="modal-footer">
        <button  type="submit" name="qtime" class="btn btn-warning">Add</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
</form>
      </div>
    </div>
  </div>
</div>

<?php 

if (isset($_POST['qtime'])) {

  $min=$_POST['min'];
  

       $sql= "INSERT INTO timetbl (exam_id,duration) VALUES ('$id', '$min')";

           
            if($conn->query($sql) === TRUE ){
          
                  echo "<script language = 'javascript'>alert('Timer is set!')</script>";
                  echo "<script>window.location.href = 'iexam.php?id=$id';</script>";
                  }else{
                  echo "Error" . $sql . '' . $conn->connect_error;
                  }
               $conn->close();

}





?>




<!-- Modal  questions-->
<div class="modal fade" id="cq" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">

    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel" >Add Questions</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

 <form action="" method="POST">


  <div class="form-group row" >
    <label for="" class="col-sm-2 col-form-label">Question</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="" name="question" required placeholder="">
  </div>
</div>



  <div class="form-group">
    <label for="">Selections</label>
    <em style="color: red;"><b>Click the checkbox for the right answer<b></em>
  </div>

  <div class="form-group row">

    <div class="col-sm-1">
    <input type="checkbox" name="ans1" value="a" onclick="FillAdd(this.form)">
    </div>

    <label for="" class="col-sm-1 col-form-label">A</label>



    
    <div class="col-sm-10">
    <input type="text" name="a" class="form-control" required id="" placeholder="">
  </div>
</div>
<div class="form-group row">

 <div class="col-sm-1">
    <input type="checkbox" name="ans2" value="b" onclick="FillAdd(this.form)">
    </div>
    <label for="" class="col-sm-1 col-form-label">B</label>

    

    <div class="col-sm-10">
    <input type="text"  name="b" class="form-control" required id="" placeholder="">
  </div>
</div>
<div class="form-group row">



 <div class="col-sm-1">
    <input type="checkbox" name="ans3" value="c" onclick="FillAdd(this.form)">
    </div>

    <label for="" class="col-sm-1 col-form-label">C</label>


    <div class="col-sm-10">
    <input type="text" name="c" class="form-control" required id="" placeholder="">
  </div>
</div>

<div class="form-group row" hidden>
    <label for="" class="col-sm-2 col-form-label">Answer</label>
    <div class="col-sm-10">
    <input type="text"  name="answer" class="form-control" id="answer" required>
  </div>
</div>
</div>
 <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button  type="submit" name="qadd" class="btn btn-primary">Add</button>
      </div>
</form>
      </div>
    </div>
  </div>
</div>

<div class="container col-sm-8">
  <div class="alert alert-warning" role="alert">
    <center>
<?php

  $s1= "SELECT * FROM lexamtb WHERE exam_no ='$id'";
  $r1 = $conn->query($s1);
  $d1= $r1->fetch_assoc();



?>

<?php echo $d1['program'];?> <?php echo $d1['exam_name']; ?> (<?php echo $timee; ?> minutes)
<button type="button" id="<?php echo $id ?>"   <?php echo $button1?> class="btn btn-danger btn-sm tr"
  data-toggle="modal" data-target="#">
Edit Timer
</button>


    </center>

    <div class="modal fade" id="mmin"role="dialog"  aria-hidden="true">
  <div class="modal-dialog" role="document">
    
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Timer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body "  id="bmin">
         



      </div>
     
    </div>
  
  </div>
</div>




<script>
  $(document).ready(function(){
    $('.tr').click(function(){
      var exam_id = $(this).attr("id");
      $.ajax({
        url:"edittime.php",
        method:"POST",
        data:{exam_id:exam_id},
        success:function(data){
          $('#bmin').html(data);
          $('#mmin').modal("show");
        }
      });
      

    });
  });
</script>

<?php 

if (isset($_POST['beditmin'])) {
  
  $emin= $_POST["editmin"];

 $sql= "UPDATE timetbl SET duration ='$emin' WHERE exam_id ='$id'";

  if($conn->query($sql) === TRUE ){
          
                  echo "<script language = 'javascript'>alert('Timer is reset!')</script>";
                  echo "<script>window.location.href = 'iexam.php?id=$id';</script>";
                  }else{
                  echo "Error" . $sql . '' . $conn->connect_error;
                  }
               $conn->close();



}


?>



</div>

</div>

  
                 <div class=" table-sorting table-responsive-sm mx-auto table-light" style="width:80%">
                   <table class="table table-striped table-bordered"  id="tSortable22">
                    <thead class="thead-dark">
                     <tr>
                                            <th style="width:1%">#</th>
                                            <th style="width:50%">Question</th>
                                            <th style="width:5%"><i class="fas fa-check"></i></th>
                                            <th style="width:45%">Choices</th>
                                            <th style="width:1%">Action</th>                         
                                       
                                            
                                           
                                                                                 
                                        </tr>
                                      </thead>
                                       
                                        <tbody>
                                        <?php
                                         $counter =1;
                                        while($row = mysqli_fetch_array($result)){
                                        ?>

                                        <tr weight="100%">


                                        <td><?php echo $counter?></td>
                                        <td><?php echo $row["question"]; ?></td>
                                        
                                        <td><?php echo $row["answer"]; ?></td>
                                        <td>a) <?php echo $row["a"]; ?> <br>
                                            b) <?php echo $row["b"]; ?> <br>
                                            c) <?php echo $row["c"]; ?> <br>
                                        </td>



                                        <form method="POST" action="">

                                        <input type="hidden" name="qid" value="<?php echo $row["exam_id"]; ?>">
                                        <td  style="color: white;"> <button type="submit" value="submit" name="bqdel" onclick="return confirm_pay()" class="btn btn-danger btn-sm "><b>DELETE</b></button> </td>

                                        </form>
                                          
                                            
<?php
 $counter++;
   }
  ?>                         

  </tbody>


  <tr>
  <td></td>
  <td></td>
  <td></td>

  <?php

  $q1="SELECT SUM(points)as p FROM examtbl WHERE exam_no='$id' ";
  $r1= $conn->query($q1);
  $d1= $r1->fetch_assoc();

  ?>
  
  <td style="text-align: right;"><b>Total Points : </b></td>
  <td style="text-align: right; color:green;"><b><?php echo $d1["p"];?></b></td>

</tr>
</table>

<?php 

if(isset($_POST["bqdel"])){

 $qid = $_POST["qid"];


    $sql ="DELETE FROM examtbl WHERE exam_id ='$qid'";

    if ($conn->query($sql) === TRUE) {

        echo "<script language = 'javascript'>alert('The Question is successfully removed !')</script>";
      

       echo "<script>window.location.href = 'iexam.php?id=$id';</script>";
    }else{
      echo "Erorr updating record: " .$conn->error;
    }
      $conn->close();
  }




?>


<?php 


if(isset($_POST["qadd"])){


  $question = $_POST["question"];
  $a = $_POST["a"];
  $b = $_POST["b"];
  $c = $_POST["c"];
  $answer = $_POST["answer"];




  $sql ="INSERT INTO examtbl (exam_no,question,answer,a,b,c,points) VALUES ('$id', '$question', '$answer', '$a', '$b', '$c', '1')";


  if($conn->query($sql) === TRUE ){
          
                  echo "<script language = 'javascript'>alert('The Question is successfully added !')</script>";
                  echo "<script>window.location.href = 'iexam.php?id=$id';</script>" ;
                  }else{
                  echo "Error" . $sql . '' . $conn->connect_error;
                  }
               $conn->close();
      }

?>



</div>





<script type="text/javascript">
function confirm_pay() {

  return confirm('Are You Sure?');

  
}
</script>


   <script type="text/javascript">
  function FillAdd(f) {

 

  if(f.ans1.checked == true) {
    f.answer.value = f.ans1.value;
  }


  if(f.ans2.checked == true){
    f.answer.value = f.ans2.value;

  }

   if(f.ans3.checked == true){
    f.answer.value = f.ans3.value;
 
  }


  if(f.ans1.checked == true && f.ans2.checked == true ||f.ans1.checked == true && f.ans3.checked == true || f.ans2.checked == true && f.ans3.checked == true){

      alert("Error! 2 or more answers didnt allowed ");
      f.ans1.checked = false;
      f.ans2.checked = false;
      f.ans3.checked = false;

      document.getElementById('answer').value='' ;
  }
}
</script>

  </body>
</html>
