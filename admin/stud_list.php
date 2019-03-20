<?php 
include "php/nav.php";





 $query= "SELECT * FROM studenttbl";
 $result= mysqli_query($conn,$query);



 $query2="SELECT DISTINCT program_name  FROM programtbl  ";

  $result2= mysqli_query($conn,$query2);

  

?>

 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
 



<div class="container">

  	<br>

<div class="card-deck" >
  <div class="card">
 
    <div class="card-body">
     <center> <h5 class="card-title">Student List</h5></center><br>

    
                  <form  class="form-inline" action=""  method="POST">
                 <div class="col-sm-3">
               <select name="prog" class="form-control form-control-sm">
                  <option value=''>Select</option>
                   <?php
                    while  ($row2 = mysqli_fetch_array($result2)){
                     $program = $row2["program_name"];
                     echo "<option value='$program'>$program</option>";
                   }
                    ?>

                  
                 </select>
                 </div>
                  <div class="col-sm-2">
                  <button type="submit" value="Submit" name="bfilter" class="btn btn-info btn-sm">Filter</button>

                </div>
               </form>

           
<?php

$prog='';

  if (isset($_POST["bfilter"])) {

$prog= $_POST["prog"];

    if ($prog=='') {
    
     $query= "SELECT * FROM studenttbl";
 $result= mysqli_query($conn,$query);


    }else{
 
 
  $query= "SELECT * FROM studenttbl where Program ='$prog'  ORDER BY stud_id ASC";
   
  $result= mysqli_query($conn,$query);

}





}
?>

<br>

 
 <div class="table-sorting table-responsive-sm mx-auto" >
                                        <table class="table table-striped table-bordered"  id="tSortable20">
                                        <thead class="thead-dark">   


                                            <th style="width:40%">Name</th>
                                            <th style="width:20%">Program</th>
                                            <th style="width:10%">Action</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <?php
                                        while($row = mysqli_fetch_array($result)){
                                        ?>


                                         <td><a href="studentinfo.php?id=<?php echo $row["student_number"]; ?>"><?php echo $row['LastName']?>, <?php echo $row['FirstName']?> <?php echo $row['MiddleName']?></a></td>

                                         <td><?php echo $row['Program']?></td>

                                         <td>


                                           <a href=""  id="<?php echo $row["student_number"]; ?>" data-toggle="modal" title="Enrollment"  data-target="" class="btn btn-primary btn-sm en"><i class="far fa-id-card"></i></a>

                                           <a href=""  id="<?php echo $row["student_number"]; ?>" data-toggle="modal" title="Payment" data-target="#" class="btn btn-success btn-sm pay"><i class="fas fa-dollar-sign"></i></a>

                                    
                                        </td>
                                         
                                        </tr>
                             
   <?php
   }
  ?>
  </tbody>
</table>
</div>

<!-- Modal -->
<div class="modal fade" id="sen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Enrollment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="menroll">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!--for enrollment -->
<script>
  $(document).ready(function(){
    $('.en').click(function(){
      var stud_no = $(this).attr("id");

      $.ajax({
        url:"action/senroll.php",
        method:"POST",
        data:{stud_no:stud_no},
        success:function(data){
          $('#menroll').html(data);
          $('#sen').modal("show");
        }
      });
      

    });
  });
</script>

</body>


<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
 <script>
      $(document).ready(function() {
   
    $('#tSortable20').DataTable();
} );
  
 </script>





