

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

</center>



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


  <div class="form-group row >
    <label for="" class="col-sm-2 col-form-label">Question</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="" name="question" placeholder="example: 2 + 2 = ?">
  </div>
</div>



  <div class="form-group">
    <label for="">Selections</label>
  </div>

  <div class="form-group row">
    <label for="" class="col-sm-2 col-form-label">A</label>
    <div class="col-sm-10">
    <input type="text" name="a" class="form-control" id="" placeholder="3">
  </div>
</div>
<div class="form-group row">
    <label for="" class="col-sm-2 col-form-label">B</label>
    <div class="col-sm-10">
    <input type="text"  name="b" class="form-control" id="" placeholder="10">
  </div>
</div>
<div class="form-group row">
    <label for="" class="col-sm-2 col-form-label">C</label>
    <div class="col-sm-10">
    <input type="text" name="c" class="form-control" id="" placeholder="4">
  </div>
</div>

<div class="form-group row">
    <label for="" class="col-sm-2 col-form-label">Answer</label>
    <div class="col-sm-10">
    <input type="text"  name="answer" class="form-control" id="" placeholder="C">
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



  
                 <div class=" table-sorting table-responsive-sm mx-auto table-light" style="width:80%">
                   <table class="table table-striped table-bordered"  id="tSortable22">
                    <thead class="thead-dark">
                     <tr>
                                            <th style="width:1%">#</th>
                                            <th style="width:50%">Question</th>
                                            <th style="width:45%">Answer</th>
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

  </body>
</html>
