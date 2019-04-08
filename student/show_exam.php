<?php 
 include ("php/nav.php");



  $s2= "SELECT * FROM studenttbl WHERE student_number = '$user'";

  $r2= $conn->query($s2);

  $d2= $r2->fetch_assoc();

  $prog = $d2['Program'];
  

  $q1="SELECT * FROM lexamtb WHERE actyear ='$active' AND status='1' AND program='$prog'";
 
 $r1= mysqli_query($conn,$q1);



?>





<div class="container">
<br>


<center><h3 style="color: skyblue">Exam List</h3></center>

<br>






   <div class=" table-sorting table-responsive-sm mx-auto" style="width:95%">
                   <table class="table table-striped table-bordered  table-dark"  id="tSortable22">
                    <thead class="thead-dark">
                     <tr>
                                            <th style="width:1%">#</th>
                                            <th style="width:50%">Exam</th>
                                          
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

  $check_exam = mysqli_query($conn, "SELECT * FROM answertbl WHERE exam_no='$exam_no' AND stud_id='$user' ");
  $check_exam_row = mysqli_num_rows($check_exam);

    if($check_exam_row > 0) {
      
      $button = 'hidden style="cursor: not-allowed;"';
  
      $button2='';
    }


?>

                                      

                                        <tr weight="100%">


                                        <td> <?php echo $counter ?></td>
                                        <td><?php echo $row["exam_name"]; ?></td>
                               
                                        
                                        <td  style="color: white;">

                                        <a href="exam.php?id=<?php echo $row["exam_no"]; ?>"  onclick="return confirm_pay()" <?php echo   $button ?> class="btn btn-info btn-sm "><b>Take</b></a>


                                        <a href="result.php?id=<?php echo $row["exam_no"]; ?>"  onclick="return confirm_pay()" <?php echo   $button2 ?>  class="btn btn-warning btn-sm "><b>Result</b></a>

                                

                                     </td>
                                                                                                                    
<?php
 $counter++;
   }
  ?>                         

  </tbody>
</div>
</div>