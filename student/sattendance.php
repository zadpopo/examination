<?php 
include 'php/nav.php';

?>



<div class="container">

    <br>

<div class="card-deck" >
  <div class="card">
 
    <div class="card-body">

 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
 <center><h2>Attendance sheet</h2></center>

<?php 


  $s2= "SELECT * FROM enrolltbl WHERE student_number ='$user' AND enroll_date='$active'";
  $r2 = $conn->query($s2);
  $d2= $r2->fetch_assoc();
  $b_id = $d2['block_id'];



 $query= "SELECT * FROM attendancetbl WHERE active='$active' AND block='$b_id' AND status ='1'";
 $result= mysqli_query($conn,$query);


  $s3= "SELECT * FROM block WHERE block_id ='$b_id'";
  $r3 = $conn->query($s3);
  $d3= $r3->fetch_assoc();
  $bn = $d3['block_name'];
  $pr = $d3['program'];


?>
<center><?php echo $pr  ?> - <?php echo $bn  ?></center>
                                         <div class="table-sorting table-responsive-sm mx-auto" style="width:80%">
                                        <table class="table table-striped table-bordered"  id="tSortable20">
                                        <thead class="thead-dark">
                                        <tr>
                                            
                                            <th style="width:20%">Date</th>
                                            <th style="width:20%">Time</th>
                                            <th style="width:10%">Time In</th>
                                            <th style="width:10%">Time Out</th>
                                            <th style="width:1%">Action</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <?php
                                        while($row = mysqli_fetch_array($result)){
                                        ?>



                                       <td><?php echo date('F j Y',strtotime($row['dateset']));?></td>
                                       <td><?php echo date('h:i:s A',strtotime($row['timestart']));?> To <?php echo date('h:i:s A',strtotime($row['timeend']));?></td>
                                       

<?php 

$attendance_id = $row['timer_id'];
$p1='';


  $s1= "SELECT * FROM s_attendancetbl WHERE attendance_id = '$attendance_id' AND stud_id='$user'";
  $r1 = $conn->query($s1);
  $d1= $r1->fetch_assoc();

  if ($d1['time_In'] =="") {
  	
  	$i1 ='hidden';
  	$i2 ='';

  } else {
  	$i1 ='';
  	$i2 ='hidden';
  	
  }
  
   if ($d1['time_out'] =="00:00:00" || $d1['time_out'] == "") {
  	
  	$o1 ='hidden';
  	$o2 ='';  

  } else {
  
  	$o1 ='';
  	$o2 ='hidden';
  }


  if ($d1['time_In'] != "" AND $d1['time_out'] !="00:00:00") {

  	$p1="hidden";


  
  }
  
  
?>  
	                                   <td <?php echo $i1?>><?php echo date("h:i:s A",strtotime($d1["time_In"]));?></td>
	                                   <td <?php echo $i2?>></td>


	                                   <td <?php echo $o1?>><?php echo date("h:i:s A",strtotime($d1["time_out"]));?></td>
	                                   <td <?php echo $o2?>></td>
                                      
                                       <td>


                                       	<form action="" method="POST">

                                       <input type="hidden" name="a_id" value="<?php echo $attendance_id?>">
                                       <input type="hidden" name="sdate" value="<?php echo $row['dateset']?>">
                                       <input type="hidden" name="sts" value="<?php echo  $row['timestart']?>">
                                       <input type="hidden" name="ste" value="<?php echo  $row['timeend']?>">


                                       	<button type="submit" <?php echo $i2?> value="submit" name="TI" onclick="return confirm_pay()" class="btn btn-primary btn-sm ">Time In</button> 

                                       	<button type="submit" <?php echo $p1?> <?php echo $i1?> value="submit" name="TO" onclick="return confirm_pay()" class="btn btn-secondary btn-sm ">Time Out</button> 

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

<?php 



date_default_timezone_set ("Asia/Manila");

  $date = date("Y-m-d");
  $time = date("H:i:s");

 

if (isset($_POST['TI'])) {

  $sdate = $_POST['sdate'];
  $sts = $_POST['sts'];
  $ste = $_POST['ste'];


if ($sdate == $date) { 


if ($ste >= $time) {

 $a_id = $_POST['a_id'];

   $sql= "INSERT INTO `s_attendancetbl` (`attendance_id`, `stud_id`, `time_In`) VALUES ('$a_id', '$user', '$time')";

    if($conn->query($sql) === TRUE ){
          
                  echo "<script language = 'javascript'>alert('Time In Successfully!')</script>";
                  echo "<script>window.location.href = 'sattendance.php';</script>";
                  }else{
                  echo "Error" . $sql . '' . $conn->connect_error;
                  }
               $conn->close();

   
 } else {
  
 echo "<script language = 'javascript'>alert('Its too late to time In!')</script>";
}
 
  



} else {
  echo "<script language = 'javascript'>alert('You Cant time In Yet!')</script>";
}


 
}

if (isset($_POST['TO'])) {
  
   $sdate = $_POST['sdate'];

  if ($sdate == $date) { 

	$a_id = $_POST['a_id'];

	 $sql= "UPDATE s_attendancetbl SET time_out ='$time' WHERE attendance_id='$a_id'";

	  if($conn->query($sql) === TRUE ){
          
                  echo "<script language = 'javascript'>alert('Time Out Successfully!')</script>";
                  echo "<script>window.location.href = 'sattendance.php';</script>";
                  }else{
                  echo "Error" . $sql . '' . $conn->connect_error;
                  }
               $conn->close();
} else {
  echo "<script language = 'javascript'>alert('Its too late to time out!')</script>";
} 
}
?>


<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
 <script>
      $(document).ready(function() {
   
    $('#tSortable20').DataTable();
} );
  
 </script>

<script type="text/javascript">
function confirm_pay() {

  return confirm('Are You Sure?');

  
}
</script>