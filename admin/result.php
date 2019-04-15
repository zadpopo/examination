<!DOCTYPE html>
<html>
<head>
  <title> result</title>
</head>
<body>
<?php 
include 'php/nav.php';


$q1="SELECT * FROM lexamtb WHERE actyear ='$active'";
 
 $r1= mysqli_query($conn,$q1);



?>




<div class="container">
<br>



<br>






   <div class=" table-sorting table-responsive-sm mx-auto " style="width:95%">
                   <table class="table table-striped table-bordered table-light"  id="tSortable22">
                    <thead class="thead-dark">
                     <tr>
                                            <th style="width:1%">#</th>
                                            <th style="width:40%">Exam List</th>
                                         
                                            <th style="width:20%">Program</th>
                                            <th style="width:2%">Takers</th>
                                          
                                            <th style="width:5%">Action</th>                         
                                       
                                            
                                           
                                                                                 
                                        </tr>
                                      </thead>
                                       
                                              <tbody>
                                        <?php
                                        $counter =1;
                                        while($row = mysqli_fetch_array($r1)){

?>

                                      

                                        <tr weight="100%">


                                        <td ><?php echo $counter; ?></td>
                                        <td><?php echo $row["exam_name"]; ?></td>

                                     
                                        <td><?php echo $row["program"]; ?></td>
                               
 <?php 

 $eid = $row["exam_no"];

$program =$row["program"];

$rows_enroll= mysqli_query($conn, "SELECT * FROM enrolltbl WHERE enroll_date ='$active' AND program='$program'");

$rows_enroll_count= mysqli_num_rows($rows_enroll);


$rows_done= mysqli_query($conn, "SELECT * FROM evaltbl WHERE exam_no ='$eid' ");

$rows_done_count= mysqli_num_rows($rows_done);




?>

                                  
                                       
                          <td style="color: white;"><b style="color: black"><?php echo $rows_done_count;?>/<?php echo $rows_enroll_count;?></b> </td>

                                     <td><a href="eval.php?id=<?php echo $row["exam_no"]; ?>" class="btn btn-success btn-sm" title="evaluation" ><i class="fas fa-align-left"></i></a>

                                      <a href="result_es.php?id=<?php echo $row["exam_no"]; ?>" class="btn btn-primary btn-sm" title="exam result" ><i class="far fa-check-circle"></i></a>


                                     </td>
                                    
                                
                             </tr>             
                                            
<?php
 $counter++;
   }
  ?>                         

  </tbody>
  




</div></div>

</body>
</html>

