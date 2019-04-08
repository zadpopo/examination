<!DOCTYPE html>
<html>
<head>
  <title>Set Review</title>
</head>
<body>
<?php 
include "php/nav.php";


 $query= "SELECT * FROM block WHERE year ='$active'";
 $result= mysqli_query($conn,$query);


?>


 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
 

<body>
<div class="container">

    <br>

<div class="card-deck " >
  <div class="card">
 
    <div class="card-body ">
     <center> <h5 class="card-title">Set Review</h5></center>
     <center><button type="submit" class="btn btn-warning btn-sm" name="review" data-toggle="modal" data-target="#creview">
  Create Review
</button></center>

    
<br>

 
 <div class="table-sorting table-responsive-sm mx-auto" >
                                        <table class="table table-bordered table-light table-striped" id="tSortable20">
                                        <thead class="thead-dark">   


                                            <th style="width:30%">Program</th>
                                             <th style="width:30%">Lecturer</th>
                                            <th style="width:5%">Block</th>
                                            <th style="width:5%">Slots</th>
                                            <th style="width:1%">Action</th>
                                      
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <?php
                                        while($row = mysqli_fetch_array($result)){
                                        ?>
 <?php 
 
 $blocc =$row['block_id'];

 $check_s= mysqli_query($conn, "SELECT * FROM enrolltbl WHERE enroll_date='$active' AND block_id='$blocc'");

 $check_s_row= mysqli_num_rows($check_s);




    ?>

                                         <td><?php echo $row['program']?> </td>
                                         <td><?php echo $row['lecturer']?> </td>
                                         <td><?php echo $row['block_name']?></td>
                                         <td><?php echo  $check_s_row;?> / <?php echo $row['slots']?></td>

                                         <td>

  <?php 

  $list ="";

  $del ="";

  if ($check_s_row > 0) {

    $list ="";
    $del ='hidden';
     
  }else{

$del ="";
$list ="hidden";

  }


  ?>

                                        <a href="action/eblock.php?id=<?php echo $row["block_id"]; ?>" onclick="return confirm_pay()" <?php echo $del?> class="btn btn-danger btn-sm" title="Delete" ><i class="far fa-trash-alt"></i></a>

                                        <a href="bstudent_list.php?id=<?php echo $row["block_id"]; ?>" <?php echo $list?> class="btn btn-primary btn-sm" title="List" ><i class="fas fa-list"></i></a>

                                         </td>
                                     
                                         
                                        </tr>



   <?php
   }
  ?>
  </tbody>
</table>
</div>






<!-- create review -->
<div class="modal fade" id="creview" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Review</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
<form action="" method="POST">
  <span style=color:red; >* Required Field</span> 


  <div class="form-group row">
    <label for="" class="col-sm-3 col-form-label"><span style=color:red; >*</span> Program</label>
    <div class="col-sm-8">
       <select class="form-control" name="prog" required>
          <option value=''>Select</option>

            <?php


             $q1="SELECT DISTINCT program_name FROM  programtbl ";



           $r1= mysqli_query($conn,$q1);


                    while  ($row = mysqli_fetch_array($r1)){
                     $prog = $row["program_name"];
                     echo "<option value='$prog'>$prog</option>";
                   }
                    ?>



    </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-3 col-form-label"><span style=color:red; >*</span> Lecturer</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="lec"  placeholder="Full Name" required>
    </div>
  </div>
  
<div class="form-group row">
    <label for="inputPassword3" class="col-sm-3 col-form-label"><span style=color:red; >*</span> Block</label>
    <div class="col-sm-8">
      <input type="text" class="form-control"  name="block" placeholder="Block Name" required>
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-3 col-form-label"><span style=color:red; >*</span> Slots</label>
    <div class="col-sm-3">
      <input type="number" class="form-control" name="slot" required>
    </div>
  </div>


      </div>
      <div class="modal-footer">
        
        <button type="submit" name="brev" onclick="return confirm_pay()" class="btn btn-warning">Create</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
   </form>
     
      </div>
    </div>
  </div>
</div>

<?php 

if (isset($_POST["brev"])) {

$prog = $_POST["prog"];
$lec = $_POST["lec"];
$block = $_POST["block"];
$slot = $_POST["slot"];

 $sql= "INSERT INTO `block` (`program`, `block_name`, `slots`, year, `lecturer`) VALUES ( '$prog', '$block', '$slot','$active', '$lec')";

  if($conn->query($sql) === TRUE ){
          
                  echo "<script language = 'javascript'>alert('Review is Successfully Registered!')</script>";
                  echo "<script>window.location.href = 'en_review.php';</script>";
                  }else{
                  echo "Error" . $sql . '' . $conn->connect_error;
                  }
               $conn->close();

}
?>

</body>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js" ></script>
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

<div class="fixed-bottom">
  
<?php

include("../php/footer_fit.php");

?>
  
</div>

</body>
</html>


