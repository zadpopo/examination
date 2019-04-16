<?php 

include 'php/nav.php';

 if ($_GET) {
    $id = $_GET['id'];


 $query= "SELECT * FROM s_attendancetbl WHERE attendance_id='$id'";
 $result= mysqli_query($conn,$query);

 $s1= "SELECT * FROM attendancetbl WHERE timer_id ='$id'";
 $r1= $conn->query($s1);
 $d1= $r1->fetch_assoc();
 $b = $d1['block'];

 $s3= "SELECT * FROM block WHERE block_id ='$b'";
 $r3= $conn->query($s3);
 $d3= $r3->fetch_assoc();



}
?>



<div class="container">

    <br>

<div class="card-deck" >
  <div class="card">
 
    <div class="card-body">

    

 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
 <center><h2>Attendance sheet </h2></center>


 <center><?php echo $d1['program'] ?> - <?php echo $d3['block_name'];?></center>
 <center><?php echo  date('F j Y',strtotime($d1['dateset'])) ?></center>
	<center><?php echo date('h:i:s A',strtotime($d1['timestart']));?> To <?php echo date('h:i:s A',strtotime($d1['timeend']));?></center>

                                         <div class="table-sorting table-responsive-sm mx-auto" style="width:80%">
                                        <table class="table table-striped table-bordered"  id="tSortable20">
                                        <thead class="thead-dark">
                                        <tr>
                                            
                                            <th style="width:20%">FullName</th>
                                            <th style="width:10%">Time In</th>
                                            <th style="width:10%">Time Out</th>
                                            
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <?php
                                        while($row = mysqli_fetch_array($result)){

                                        $stud_id =$row['stud_id'];


  $s2= "SELECT * FROM studenttbl WHERE student_number ='$stud_id'";
  $r2 = $conn->query($s2);
  $d2= $r2->fetch_assoc();
  ?>



                                       <td><?php echo $d2['LastName']?>, <?php echo $d2['FirstName']?> <?php echo $d2['MiddleName']?></td>
                                       <td><?php echo date('h:i:s A',strtotime($row['time_In']));?></td>

<?php 


   if ($row['time_out'] =="00:00:00" || $row['time_out'] == "") {
    
    $o1 ='hidden';
    $o2 ='';  

  } else {
  
    $o1 ='';
    $o2 ='hidden';
  }

?>

                                       <td <?php echo $o1?>><?php echo date("h:i:s A",strtotime($row['time_out']));?></td>
                                     <td <?php echo $o2?>></td>
                                      
                                      
	                                  

	                                
                                      
                            

 

										</form>

									

                                       </td>
                                         
                                        </tr>
                             
   <?php
   }
  ?>
  </tbody>
</table>
</div>
</div>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
 <script>
      $(document).ready(function() {
   
    $('#tSortable20').DataTable();
} );
  
 </script>