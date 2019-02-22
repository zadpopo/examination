<!DOCTYPE html>
<html>
<head>
  <title>Examination List</title>
</head>
<body>




<?php 
 include ("php/nav.php");



  $q1="SELECT * FROM lexamtb WHERE actyear ='$active' AND lecturer_id='$user'";
 
 $r1= mysqli_query($conn,$q1);



?>





<div class="container">
<br>


<center><h3 style="color: white" >Exam List</h3></center>
<center>

<button type="submit" class="btn btn-warning btn-sm" name="tran" data-toggle="modal" data-target="#cexam">
  Create New Exam Sheet
</button>
 </center>
<br>






   <div class=" table-sorting table-responsive-sm mx-auto " style="width:95%">
                   <table class="table table-striped table-bordered table-light"  id="tSortable22">
                    <thead class="thead-dark">
                     <tr>
                                            <th style="width:1%">#</th>
                                            <th style="width:50%">Exam</th>
                                          
                                            <th style="width:8%">Action</th>                         
                                       
                                            
                                           
                                                                                 
                                        </tr>
                                      </thead>
                                       
                                        <tbody>
                                        <?php
                                        $counter =1;
                                        while($row = mysqli_fetch_array($r1)){


 $exam_name= $row["exam_name"];

 	 $count='hidden';

	$button= '';  

  $check_exam = mysqli_query($conn, "SELECT * FROM lexamtb WHERE status='1' AND exam_name='$exam_name' ");
  $check_exam_row = mysqli_num_rows($check_exam);

    if($check_exam_row > 0) {
      
      $button = 'hidden style="cursor: not-allowed;"';
  
      $count='';
    }


?>

                                      

                                        <tr weight="100%">


                                        <td> <?php echo $counter ?></td>
                                        <td><?php echo $row["exam_name"]; ?></td>
                               
                                        
                                        <td  style="color: white;">

                                        <a href="action_exam.php?id=<?php echo $row["exam_no"]; ?>"  onclick="return confirm_pay()" <?php echo $button?> class="btn btn-danger btn-sm "><i class="far fa-trash-alt"></i></a>

                                        <a href="iexam.php?id=<?php echo $row["exam_no"]; ?>" 	 onclick="return confirm_pay()"  <?php echo $button?> class="btn btn-secondary btn-sm "><i class="far fa-edit"></i></a>

                                        

                                        <a href="examact.php?id=<?php echo $row["exam_no"]; ?>"  onclick="return confirm_pay()" <?php echo $button?> class="btn btn-success btn-sm "><i class="fas fa-toggle-on"></i></a>


                                        

                                    <b  <?php echo  $count ?> style="color: black">20/22</b>

                                     </td>
                                
                                          
                                            
<?php
 $counter++;
   }
  ?>                         

  </tbody>
	




</div></div>




<!-- Modal  questions-->
<div class="modal fade" id="cexam" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Exam</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      	<form action="" method="POST">


 

  <div class="form-group row">
    <label for="" class="col-sm-2 col-form-label">Name:</label>
    <div class="col-sm-10">
    <input type="text" name="name" class="form-control" id="" placeholder="">
  </div>
</div>


 <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button  type="submit" name="bcexam" class="btn btn-warning">Create</button>
      </div>
</form>
      


</div>
</div>
</div>
</div>


<?php 

if (isset($_POST["bcexam"])) {
	
	 $qname = $_POST["name"];

   date_default_timezone_set ("Asia/Manila");
 
    $datee = date("Y");

    $random1 = (rand(1,9)) . (rand(1,9)) . (rand(1,9)) . (rand(1,9));
    $random2 = (rand(1,9)) . (rand(1,9)) . (rand(1,9)) . (rand(1,9));


      $code= ($datee) . "-" . ($random1) . "" . ($random2);





  $sql ="INSERT INTO lexamtb (exam_name,lecturer_id,exam_no,actyear,status) VALUES ( '$qname ', '$user', '$code', '$active', '0')";


  if($conn->query($sql) === TRUE ){
          
                  echo "<script language = 'javascript'>alert('The Exam is successfully added !')</script>";
                  echo "<script>window.location.href = 'exam_list.php';</script>";
                  }else{
                  echo "Error" . $sql . '' . $conn->connect_error;
                  }
               $conn->close();
}
?>

</body>
</html>