<?php 
include "php/nav.php";





 $query= "SELECT * FROM studenttbl";
 $result= mysqli_query($conn,$query);


  

?>




<div class="container">

  	<br>

<div class="card-deck" >
  <div class="card">
 
    <div class="card-body">
     <center> <h5 class="card-title">Student List</h5></center><br>
    

  



 <div class=" table-sorting table-responsive-sm mx-auto " style="width:70%">
                   <table class="table table-striped table-bordered table-light"  id="tSortable22">
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
                                    
                                        </td>
                                         
                                        </tr>
                             
   <?php
   }
  ?>
  </tbody>
</table>
</div>

