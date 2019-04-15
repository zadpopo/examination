<?php

include 'php/nav.php';

if ($_GET) {
    $exam_id = $_GET['id'];
}
?>




<div class="container">

    <br>

<div class="card-deck" >
  <div class="card">
 
    <div class="card-body">
     <center> <h5 class="card-title">Evaluation <?php echo $user?></h5></center><br>
    

  



 <div class=" table-sorting table-responsive-sm mx-auto " style="width:90%">
                   <table class="table table-striped table-bordered table-light"  id="tSortable22">
                    <thead class="thead-dark">

                       <tr>
                        <th><center>1-Poor &nbsp 2-Fair &nbsp 3-Good  &nbsp 4-Excellent</center></th>
                       <th><center>Result</center></th>
                     
                        </tr>
                       </thead>
                       <tbody>
                         <tr>                    
                                      

                     <td><b>LESSON OBJECTIVES</b></td>
                     <th><center></center></th>
                       </tr>

<?php 
$s1= "SELECT AVG(a1) as a1, AVG(a2) as a2,  AVG(a3) as a3 ,  AVG(a4) as a4 ,  AVG(a5) as a5,  AVG(a6) as a6,  AVG(a7) as a7,  AVG(a8) as a8,  AVG(a9) as a9,  AVG(a10) as a10,  AVG(a11) as a11,  AVG(a12) as a12,  AVG(a13) as a13,  AVG(a14) as a14,  AVG(a15) as a15,  AVG(a16) as a16,  AVG(a17) as a17,  AVG(a18) as a18,  AVG(a19) as a19 FROM evaltbl WHERE exam_no ='$exam_id'";
  $r1 = $conn->query($s1);
  $d1= $r1->fetch_assoc();

  $a1 = $d1['a1'];
  $a2 = $d1['a2'];
  $a3 = $d1['a3'];
  $a4 = $d1['a4'];
  $a5 = $d1['a5'];
  $a6 = $d1['a6'];
  $a7 = $d1['a7'];
  $a8 = $d1['a8'];
  $a9 = $d1['a9'];
  $a10 = $d1['a10'];
  $a11 = $d1['a11'];
  $a12 = $d1['a12'];
  $a13 = $d1['a13'];
  $a14 = $d1['a14'];
  $a15 = $d1['a15'];
  $a16 = $d1['a16'];
  $a17 = $d1['a17'];
  $a18 = $d1['a18'];
  $a19 = $d1['a19'];


?>

                       <tr>                    
                     <td>Lesson demonstrates a focus on a specific mastery.</td>
                     <th><center><?php echo $a1?></center></th>

                       </tr>

                       <tr>                    
                     <td>Covers significant topics comprehensively in the discussion within the alloted tme period.</td>
                     <th><center><?php echo $a2?></center></th>

                       </tr>

                       <tr>                    
                     <td>Delivers substantial inputs pertinent to the topic.</td>
                     
                    <th><center><?php echo $a3?></center></th>

                       </tr>


                         <tr>                    
                                      

                     <td><b>LESSONS STRATEGIES ACTIVITIES AND DELIVERY</b></td>
                     <th></th>
                       </tr>


                       <tr>                    
                     <td>Presents all information in a clear, well-organizied, factually accurate manner without <br> mistakes that would leave students with any misunderstanding at the end of the lessons</td>
                     <th><center ><?php echo $a4?></th>

                       </tr>


                  <td>Regularly highlights and emphasizes key concepts and understandings, and connects <br>them to the other important, previously mastered understandings.</td>
                     <th><center><?php echo $a5?></th>

                       </tr>

                    <tr>                    
                                      

                     <td><b>PHYSICAL ENVIRONMENT</b></td>
                     <th></th>
                       </tr>

                   <td>Checks that general classroom environment is conducive to student learning.</td>
                      <th><center><?php echo $a6?></th>
                       </tr>

                <td><b>CLASSROOM MANAGEMENT AND LEADERSHIP</b></td>
                     <th></th>
                       </tr>

                  <td>Ensures that the students follow general Top Rank classroom rules in order to minimize <br>downtime, loss of concentration and disruptions.</td>
                      <th><center><?php echo $a7?></th>

                       </tr>


                 <td>Punctual in starting and ending the class.</td>
                      <th><center><?php echo $a8?></th>

                       </tr>


                 <td>Demonstrates a caring attitude toward the student’s welfare along with the delivery of the lecture.</td>
                      <th><center><?php echo $a9?></th>

                       </tr>

               <td><b>STUDENTS ENGAGEMENT AND REAL-TIME ASSESSMENT</b></td>
                     <th></th>
                       </tr>

               <td>Checks for understanding of students often during the course of the lecture.</td>
                     <th><center><?php echo $a10?></th>

               </tr>

                <td>Uses open-ended questions to assess student understanding of materials and surface
common misunderstandings.</td>
                    <th><center><?php echo $a11?></th>

               </tr>

               <td>Accepts only high quality student responses.</td>
                     <th><center><?php echo $a12?></th>

               </tr>


               <td>Cycles back to students who didn’t answer.</td>
                    <th><center><?php echo $a13?></th>

               </tr>

              <td>Leads students to the correct answer by asking pertinent, sensible follow-up questions
that <br> activate background knowledge, helping students to thing aloud and modelling.</td>
                     <th><center><?php echo $a14?></th>

               </tr>

               <td><b>COMPANY REPRESENTATIVENESS</b></td>
                     <th></th>
                       </tr>

            <td>Demonstrates belongingness to the Toprank Team.</td>
                     <th><center><?php echo $a15?></th>

               </tr>

           <td>Executes excellence and uprightness as lecturer towards his/her students.</td>
                     <th><center><?php echo $a16?></th>

               </tr>

           <td>Delivers the “#TeamToprank” campaign in his/her words, actions, and attributes in and
out of the classroom.</td>
                      <th><center><?php echo $a17?></th>

               </tr>

          <td>Complies with company policies.</td>
                     <th><center><?php echo $a18?></th>

               </tr>

        <td>Exhibits the core values of the company in all of his/ her dealings.</td>
                      <th><center><?php echo $a19?></th>

               </tr>

        
   
   
  
  
  </tbody>
</table>
</div>


<?php 
 $query= "SELECT * FROM evaltbl WHERE comment != '' AND exam_no ='$exam_id'";
 $result= mysqli_query($conn,$query);
?>
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

               
 <div class=" table-sorting table-responsive-sm mx-auto " style="width:90%">
                   <table class="table table-striped table-bordered table-light"  id="tSortable20">
                    <thead class="thead-dark">

                       <tr>
                        <th><center>REPORTS, COMMENTS AND SUGGESTIONS</center></th>
                  
                     
                        </tr>
                       </thead>
                       <tbody>

                        <?php
                         while($row = mysqli_fetch_array($result)){
                        ?>

                         <tr>                    
                                      

               
                     <th> <?php echo $row["comment"]; ?></th>
                       </tr>
<?php 
}
?>

 
  </tbody>
</table>
</div>

</body>
</html>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
 <script>
      $(document).ready(function() {
   
    $('#tSortable20').DataTable();
} );
  
 </script>