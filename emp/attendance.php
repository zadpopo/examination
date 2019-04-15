<?php 
include ("php/nav.php");

?>





 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

 <?php 

 $query= "SELECT * FROM attendancetbl WHERE active ='$active'";
 $result= mysqli_query($conn,$query);
?>

  
                 <div class=" table-sorting table-responsive-sm mx-auto table-light" style="width:80%">
                <center>  <h2 ><b>Set Schedule</b> <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#time">
Add Schedule
</button></h2> </center>

                   <table class="table table-striped table-bordered"  id="tSortable20">
                    <thead class="thead-dark">
                     <tr>
                                            
                                            <th style="width:20%">Program</th>
                                            <th style="width:20%">Block</th>
                                            <th style="width:20%">Date</th>
                                            <th style="width:10%">Start Time</th>
                                            <th style="width:10%">End Time</th>
                                            <th style="width:10%">Action</th>                         
                                       
                                            
                                           
                                                                                 
                                        </tr>
                                      </thead>
                                       
                                        <tbody>
                                        <?php
                                         $counter =1;
                                 		 while($row = mysqli_fetch_array($result)){


  $ctime= $row["timer_id"];
  
  $button1='hidden';
  $button= '';  

  $check_time = mysqli_query($conn, "SELECT * FROM attendancetbl WHERE status='1' AND timer_id ='$ctime'");
  $check_time_row = mysqli_num_rows($check_time);
    if($check_time_row > 0) {
      
      $button = 'hidden style="cursor: not-allowed;"';
  
      $button1='';
  }
                                        ?>

                                        <tr weight="100%">


                                        <td><?php echo $row['program'];?></td>
<?php 

$b_id = $row['block'];


  $s3= "SELECT * FROM block WHERE block_id ='$b_id'";
  $r3 = $conn->query($s3);
  $d3= $r3->fetch_assoc();
  $bn = $d3['block_name'];



?>
                                        <td><?php echo $bn;?></td>
                                        <td><?php echo date('F j Y ',strtotime($row['dateset'] ));?></td>
                                        <td><?php echo date('h:i:s A',strtotime($row['timestart']));?></td>
                                        <td><?php echo date('h:i:s A',strtotime($row['timeend'] ));?></td>
                                        



                                        <form method="POST" action="">

                                        <input type="hidden" name="tid" value="<?php echo $row["timer_id"]; ?>">
                                        <td  style="color: white;"> 

                                        	<button type="submit" <?php echo $button?> value="submit" name="tdel" onclick="return confirm_pay()" class="btn btn-danger btn-sm "><i class="fas fa-trash-alt"></i></button> 

                                        	<button type="submit" <?php echo $button?> value="submit" name="act" onclick="return confirm_pay()" class="btn btn-success btn-sm "><i class="fas fa-check"></i></button> 

										</form>

                                        


                                          <a href="attendance_list.php?id=<?php echo $row["timer_id"];?>" class="btn btn-primary btn-sm " <?php echo $button1?> style="color:white" ><i class="fas fa-list"></i></a>

                                        	

                                        </td>

                                        
                                          
                                            
<?php
 $counter++;
   }
  ?>                         

  </tbody>


 


</div>
<?php 

if (isset($_POST["act"])) {

	$timer_id =$_POST['tid'];

	       $sql ="UPDATE attendancetbl SET status ='1' WHERE timer_id= '$timer_id'";



            if($conn->query($sql) === TRUE ){
          
                  echo "<script language = 'javascript'>alert('The Schedule is successfully Activated!')</script>";
                  echo "<script>window.location.href = 'attendance.php';</script>";
                  }else{
                  echo "Error" . $sql . '' . $conn->connect_error;
                  }
               $conn->close();


}
?>

<?php 

if (isset($_POST["tdel"])) {

	$timer_id =$_POST['tid'];

	       $sql =" DELETE FROM  attendancetbl WHERE timer_id = '$timer_id'";



            if($conn->query($sql) === TRUE ){
          
                  echo "<script language = 'javascript'>alert('The Schedule is successfully deleted!')</script>";
                  echo "<script>window.location.href = 'attendance.php';</script>";
                  }else{
                  echo "Error" . $sql . '' . $conn->connect_error;
                  }
               $conn->close();


}
?>

<!--modal -->
<script type="text/javascript">
function change_bra()
{
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.open("GET","ajax.php?cus_n="+document.getElementById("prog1").value,false);
  xmlhttp.send(null);
  document.getElementById("bloc").innerHTML=xmlhttp.responseText;
  
  
  
}
</script>


<div class="modal fade" id="time" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Set Schedule</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="menroll">
      
      <form action="" method="POST">




<div class="form-group row">
    <label for="" class="col-sm-3 col-form-label"><span style=color:red; >*</span>Program</label>
    <div class="col-sm-8">
       <select class="form-control" name="prog" id="prog1" required onChange="change_bra()">
          <option value=''>Select</option>

            <?php


             $q1="SELECT * FROM  programtbl";



           $r1= mysqli_query($conn,$q1);


                    while  ($row = mysqli_fetch_array($r1)){

                     $program_name= $row["program_name"];

                     echo "<option value='$program_name'> $program_name</option>";
                   }
                    ?>
    </select>
    </div>
  </div>

 


<div class="form-group row">
    <label for="" class="col-sm-3 col-form-label"><span style=color:red; >*</span>Block</label>
    <div class="col-sm-8">
       <select class="form-control" name="bloc" id="bloc" required>
          <option value=''>Select</option>

    </select>
    </div>
  </div>

  <div class="form-group row">
    <label for="" class="col-sm-3 col-form-label"><span style=color:red; >*</span>Date</label>
    <div class="col-sm-6">

    	<input type="date" name="date" required class="form-control">

</div>

  </div>


<div class="form-group row">
    <label for="" class="col-sm-3 col-form-label"><span style=color:red; >*</span>Time</label>
    <div class="col-sm-4">
      
<input type="time" name="t1" required class="form-control">

    </div>
  <label for="" class="col-form-label">To</label>
    <div class="col-sm-4">
     
<input type="time" name="t2" required class="form-control">

    </div>
  </div>


 <div class="modal-footer">
 		<button type="submit"onclick="return confirm_pay()" name="bt" class="btn btn-warning">Set</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    
      </div>
</form>

      </div>
    
    </div>
  </div>
</div>

<?php 
if (isset($_POST["bt"])) {

	 $prog= $_POST["prog"];
	 $bloc= $_POST["bloc"];
	 $pdate= $_POST["date"];
	 $t1= $_POST["t1"];
	 $t2= $_POST["t2"];


	   $sql= "INSERT INTO `attendancetbl` (`program`, `block`, `timestart`, `timeend`, `dateset`, `active`) VALUES ('$prog', '$bloc', '$t1', '$t2', '$pdate', '$active')";



	     if($conn->query($sql) === TRUE ){
          
                  echo "<script language = 'javascript'>alert('Sechedule is set!')</script>";
                  echo "<script>window.location.href = 'attendance.php';</script>";
                  }else{
                  echo "Error" . $sql . '' . $conn->connect_error;
                  }
               $conn->close();

}

?>





<script type="text/javascript">
function confirm_pay() {

  return confirm('Are You Sure?');

  
}
</script>


  

  </body>
</html>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
 <script>
      $(document).ready(function() {
   
    $('#tSortable20').DataTable();
} );
  
 </script>