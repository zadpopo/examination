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




  if ($a1 < 2) {
    $aa1='Poor';
    $c1 ='style=color:red';

  }else if ($a1 < 3 && $a1 >= 2) {

    $aa1='Fair';
    $c1 ='style=color:#CCCC00';
   
  }else if ($a1 >=3 && $a1 < 4) {

    $aa1='Good';
    $c1 ='style=color:blue';

  }else{


    $aa1='Excellent';
    $c1 ='style=color:green';

  }


  if ($a2 < 2) {
    $aa2='Poor';
    $c2 ='style=color:red';

  }else if ($a2 < 3 && $a2 >= 2) {

    $aa2='Fair';
    $c2 ='style=color:#CCCC00';
   
  }else if ($a2 >=3 && $a2 < 4) {

    $aa2='Good';
    $c2 ='style=color:blue';

  }else{


    $aa2='Excellent';
    $c2 ='style=color:green';

  }




  if ($a3 < 2) {
    $aa3='Poor';
    $c3 ='style=color:red';

  }else if ($a3 < 3 && $a3 >= 2) {

    $aa3='Fair';
    $c3 ='style=color:#CCCC00';
   
  }else if ($a3 >= 3 && $a3 < 4) {

    $aa3='Good';
    $c3 ='style=color:blue';

  }else{


    $aa3='Excellent';
    $c3 ='style=color:green';

  }

   if ($a4 < 2) {
    $aa4='Poor';
    $c4 ='style=color:red;';

  }else if ($a4 < 3 && $a4 >= 2) {

    $aa4='Fair';
    $c4 ='style=color:#CCCC00;';
   
  }else if ($a4 >= 3 && $a4 < 4) {

    $aa4='Good';
    $c4 ='style=color:blue;';

  }else{


    $aa4='Excellent';
    $c4 ='style=color:green;';

  }

     if ($a5 < 2) {
    $aa5='Poor';
    $c5 ='style=color:red;';

  }else if ($a5 < 3 && $a5 >= 2) {

    $aa5='Fair';
    $c5 ='style=color:#CCCC00;';
   
  }else if ($a5 >= 3 && $a5 < 4) {

    $aa5='Good';
    $c5 ='style=color:blue;';

  }else{


    $aa5='Excellent';
    $c5 ='style=color:green;';

  }


     if ($a6 < 2) {
    $aa6='Poor';
    $c6 ='style=color:red;';

  }else if ($a6 < 3 && $a6 >= 2) {

    $aa6='Fair';
    $c6 ='style=color:#CCCC00;';
   
  }else if ($a6 >= 3 && $a6 < 4) {

    $aa6='Good';
    $c6 ='style=color:blue;';

  }else{


    $aa6='Excellent';
    $c6 ='style=color:green;';

  }


   if ($a7 < 2) {
    $aa7='Poor';
    $c7 ='style=color:red;';

  }else if ($a7 < 3 && $a7 >= 2) {

    $aa7='Fair';
    $c7 ='style=color:#CCCC00;';
   
  }else if ($a7 >= 3 && $a7 < 4) {

    $aa7='Good';
    $c7 ='style=color:blue;';

  }else{


    $aa7='Excellent';
    $c7 ='style=color:green;';

  }

   if ($a8 < 2) {
    $aa8='Poor';
    $c8 ='style=color:red;';

  }else if ($a8 < 3 && $a8 >= 2) {

    $aa8='Fair';
    $c8 ='style=color:#CCCC00;';
   
  }else if ($a8 >= 3 && $a8 < 4) {

    $aa8='Good';
    $c8 ='style=color:blue;';

  }else{


    $aa8='Excellent';
    $c8 ='style=color:green;';

  }

   if ($a9 < 2) {
    $aa9='Poor';
    $c9 ='style=color:red;';

  }else if ($a9 < 3 && $a9 >= 2) {

    $aa9='Fair';
    $c9 ='style=color:#CCCC00;';
   
  }else if ($a9 >= 3 && $a9 < 4) {

    $aa9='Good';
    $c9 ='style=color:blue;';

  }else{


    $aa9='Excellent';
    $c9 ='style=color:green;';

  }



   if ($a10 < 2) {
    $aa10='Poor';
    $c10 ='style=color:red;';

  }else if ($a10 < 3 && $a10 >= 2) {

    $aa10='Fair';
    $c10 ='style=color:#CCCC00;';
   
  }else if ($a10 >= 3 && $a10 < 4) {

    $aa10='Good';
    $c10 ='style=color:blue;';

  }else{


    $aa10='Excellent';
    $c10 ='style=color:green;';

  }

   if ($a11 < 2) {
    $aa11='Poor';
    $c11 ='style=color:red;';

  }else if ($a11 < 3 && $a11 >= 2) {

    $aa11='Fair';
    $c11 ='style=color:#CCCC00;';
   
  }else if ($a11 >= 3 && $a11 < 4) {

    $aa11='Good';
    $c11 ='style=color:blue;';

  }else{


    $aa11='Excellent';
    $c11 ='style=color:green;';

  }


   if ($a12 < 2) {
    $aa12='Poor';
    $c12 ='style=color:red;';

  }else if ($a12 < 3 && $a12 >= 2) {

    $aa12='Fair';
    $c12 ='style=color:#CCCC00;';
   
  }else if ($a12 >= 3 && $a12 < 4) {

    $aa12='Good';
    $c12 ='style=color:blue;';

  }else{


    $aa12='Excellent';
    $c12 ='style=color:green;';

  }



   if ($a13 < 2) {
    $aa13='Poor';
    $c13 ='style=color:red;';

  }else if ($a13 < 3 && $a13 >= 2) {

    $aa13='Fair';
    $c13 ='style=color:#CCCC00;';
   
  }else if ($a13 >= 3 && $a13 < 4) {

    $aa13='Good';
    $c13 ='style=color:blue;';

  }else{


    $aa13='Excellent';
    $c13 ='style=color:green;';

  }


   if ($a14 < 2) {
    $aa14='Poor';
    $c14 ='style=color:red;';

  }else if ($a14 < 3 && $a14 >= 2) {

    $aa14='Fair';
    $c14 ='style=color:#CCCC00;';
   
  }else if ($a14 >= 3 && $a14 < 4) {

    $aa14='Good';
    $c14 ='style=color:blue;';

  }else{


    $aa14='Excellent';
    $c14 ='style=color:green;';

  }

   if ($a15 < 2) {
    $aa15='Poor';
    $c15 ='style=color:red;';

  }else if ($a15 < 3 && $a15 >= 2) {

    $aa15='Fair';
    $c15 ='style=color:#CCCC00;';
   
  }else if ($a15 >= 3 && $a15 < 4) {

    $aa15='Good';
    $c15 ='style=color:blue;';

  }else{


    $aa15='Excellent';
    $c15 ='style=color:green;';

  }


   if ($a16 < 2) {
    $aa16='Poor';
    $c16 ='style=color:red;';

  }else if ($a16 < 3 && $a16 >= 2) {

    $aa16='Fair';
    $c16 ='style=color:#CCCC00;';
   
  }else if ($a16 >= 3 && $a16 < 4) {

    $aa16='Good';
    $c16 ='style=color:blue;';

  }else{


    $aa16='Excellent';
    $c16 ='style=color:green;';

  }

   if ($a17 < 2) {
    $aa17='Poor';
    $c17 ='style=color:red;';

  }else if ($a17 < 3 && $a17 >= 2) {

    $aa17='Fair';
    $c17 ='style=color:#CCCC00;';
   
  }else if ($a17 >= 3 && $a17 < 4) {

    $aa17='Good';
    $c17 ='style=color:blue;';

  }else{


    $aa17='Excellent';
    $c17 ='style=color:green;';

  }

   if ($a18 < 2) {
    $aa18='Poor';
    $c18 ='style=color:red;';

  }else if ($a18 < 3 && $a18 >= 2) {

    $aa18='Fair';
    $c18 ='style=color:#CCCC00;';
   
  }else if ($a18 >= 3 && $a18 < 4) {

    $aa18='Good';
    $c18 ='style=color:blue;';

  }else{


    $aa18='Excellent';
    $c18 ='style=color:green;';

  }

   if ($a19 < 2) {
    $aa19='Poor';
    $c19 ='style=color:red;';

  }else if ($a19 < 3 && $a19 >= 2) {

    $aa19='Fair';
    $c19 ='style=color:#CCCC00;';
   
  }else if ($a19 >= 3 && $a19 < 4) {

    $aa19='Good';
    $c19 ='style=color:blue;';

  }else{


    $aa19='Excellent';
    $c19 ='style=color:green;';

  }
?>

                       <tr>                    
                     <td>Lesson demonstrates a focus on a specific mastery.</td>
                     <th><center <?php echo $c1?>><?php echo $aa1?></center></th>

                       </tr>

                       <tr>                    
                     <td>Covers significant topics comprehensively in the discussion within the alloted tme period.</td>
                     <th><center <?php echo $c2?>><?php echo $aa2?></center></th>

                       </tr>

                       <tr>                    
                     <td>Delivers substantial inputs pertinent to the topic.</td>
                     
                    <th><center <?php echo $c3?> ><?php echo $aa3?></center></th>

                       </tr>


                         <tr>                    
                                      

                     <td><b>LESSONS STRATEGIES ACTIVITIES AND DELIVERY</b></td>
                     <th></th>
                       </tr>


                       <tr>                    
                     <td>Presents all information in a clear, well-organizied, factually accurate manner without <br> mistakes that would leave students with any misunderstanding at the end of the lessons</td>
                     <th><center <?php echo $c4?> ><?php echo $aa4?></th>

                       </tr>


                  <td>Regularly highlights and emphasizes key concepts and understandings, and connects <br>them to the other important, previously mastered understandings.</td>
                     <th><center <?php echo $c5?> ><?php echo $aa5?></th>

                       </tr>

                    <tr>                    
                                      

                     <td><b>PHYSICAL ENVIRONMENT</b></td>
                     <th></th>
                       </tr>

                   <td>Checks that general classroom environment is conducive to student learning.</td>
                     <th><center <?php echo $c6?> ><?php echo $aa6?></th>
                       </tr>

                <td><b>CLASSROOM MANAGEMENT AND LEADERSHIP</b></td>
                     <th></th>
                       </tr>

                  <td>Ensures that the students follow general Top Rank classroom rules in order to minimize <br>downtime, loss of concentration and disruptions.</td>
                     <th><center <?php echo $c7?> ><?php echo $aa7?></th>

                       </tr>


                 <td>Punctual in starting and ending the class.</td>
                     <th><center <?php echo $c8?> ><?php echo $aa8?></th>

                       </tr>


                 <td>Demonstrates a caring attitude toward the student’s welfare along with the delivery of the lecture.</td>
                     <th><center <?php echo $c9?> ><?php echo $aa9?></th>

                       </tr>

               <td><b>STUDENTS ENGAGEMENT AND REAL-TIME ASSESSMENT</b></td>
                     <th></th>
                       </tr>

               <td>Checks for understanding of students often during the course of the lecture.</td>
                     <th><center <?php echo $c10?> ><?php echo $aa10?></th>

               </tr>

                <td>Uses open-ended questions to assess student understanding of materials and surface
common misunderstandings.</td>
                     <th><center <?php echo $c11?> ><?php echo $aa11?></th>

               </tr>

               <td>Accepts only high quality student responses.</td>
                     <th><center <?php echo $c12?> ><?php echo $aa12?></th>

               </tr>


               <td>Cycles back to students who didn’t answer.</td>
                     <th><center <?php echo $c13?> ><?php echo $aa13?></th>

               </tr>

              <td>Leads students to the correct answer by asking pertinent, sensible follow-up questions
that <br> activate background knowledge, helping students to thing aloud and modelling.</td>
                     <th><center <?php echo $c14?> ><?php echo $aa14?></th>

               </tr>

               <td><b>COMPANY REPRESENTATIVENESS</b></td>
                     <th></th>
                       </tr>

            <td>Demonstrates belongingness to the Toprank Team.</td>
                     <th><center <?php echo $c15?> ><?php echo $aa15?></center></th>

               </tr>

           <td>Executes excellence and uprightness as lecturer towards his/her students.</td>
                     <th><center <?php echo $c16?> ><?php echo $aa16?></th>

               </tr>

           <td>Delivers the “#TeamToprank” campaign in his/her words, actions, and attributes in and
out of the classroom.</td>
                     <th><center <?php echo $c17?> ><?php echo $aa17?></th>

               </tr>

          <td>Complies with company policies.</td>
                    <th><center <?php echo $c18?> ><?php echo $aa18?></th>

               </tr>

        <td>Exhibits the core values of the company in all of his/ her dealings.</td>
                     <th><center <?php echo $c19?> ><?php echo $aa19?></th>

               </tr>

        
   
   
  
  
  </tbody>
</table>
</div>


<?php 
 $query= "SELECT * FROM evaltbl WHERE comment != '' AND exam_no ='$exam_id'";
 $result= mysqli_query($conn,$query);
?>
               
 <div class=" table-sorting table-responsive-sm mx-auto " style="width:90%">
                   <table class="table table-striped table-bordered table-light"  id="tSortable22">
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

