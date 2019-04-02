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
                       <th><center>1</center></th>
                       <th><center>2</center></th>
                       <th><center>3</center></th>
                       <th><center>4</center></th>
                        </tr>
                       </thead>
                       <tbody>
                         <tr>                    
                                      

                     <td><b>LESSON OBJECTIVES</b></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                       </tr>

<form actio="" method="POST">

                       <tr>                    
                     <td>Lesson demonstrates a focus on a specific mastery.</td>
                     <th><input class="form-check-input mx-auto" type="radio" name="1"required value="1"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="1"required value="2"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="1"required value="3"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="1"required value="4"></th>

                       </tr>

                       <tr>                    
                     <td>Covers significant topics comprehensively in the discussion within the alloted tme period.</td>
                     <th><input class="form-check-input mx-auto" type="radio" name="2"required value="1"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="2"required value="2"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="2"required value="3"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="2"required value="4"></th>

                       </tr>

                       <tr>                    
                     <td>Delivers substantial inputs pertinent to the topic.</td>
                     <th><input class="form-check-input mx-auto" type="radio" name="3"required value="1"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="3"required value="2"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="3"required value="3"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="3"required value="4"></th>

                       </tr>


                         <tr>                    
                                      

                     <td><b>LESSONS STRATEGIES ACTIVITIES AND DELIVERY</b></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                       </tr>


                       <tr>                    
                     <td>Presents all information in a clear, well-organizied, factually accurate manner without <br> mistakes that would leave students with any misunderstanding at the end of the lessons</td>
                     <th><input class="form-check-input mx-auto" type="radio" name="4"required value="1"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="4"required value="2"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="4"required value="3"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="4"required value="4"></th>

                       </tr>


                  <td>Regularly highlights and emphasizes key concepts and understandings, and connects <br>them to the other important, previously mastered understandings.</td>
                     <th><input class="form-check-input mx-auto" type="radio" name="5"required value="1"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="5"required value="2"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="5"required value="3"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="5"required value="4"></th>

                       </tr>

                    <tr>                    
                                      

                     <td><b>PHYSICAL ENVIRONMENT</b></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                       </tr>

                   <td>Checks that general classroom environment is conducive to student learning.</td>
                     <th><input class="form-check-input mx-auto" type="radio" name="6"required required value="1"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="6"required value="2"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="6"required value="3"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="6"required value="4"></th>

                       </tr>

                <td><b>CLASSROOM MANAGEMENT AND LEADERSHIP</b></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                       </tr>

                  <td>Ensures that the students follow general Top Rank classroom rules in order to minimize <br>downtime, loss of concentration and disruptions.</td>
                     <th><input class="form-check-input mx-auto" type="radio" name="7"required value="1"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="7"required value="2"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="7"required value="3"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="7"required value="4"></th>

                       </tr>


                 <td>Punctual in starting and ending the class.</td>
                     <th><input class="form-check-input mx-auto" type="radio" name="8"required value="1"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="8"required value="2"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="8"required value="3"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="8"required value="4"></th>

                       </tr>


                 <td>Demonstrates a caring attitude toward the student’s welfare along with the delivery of the lecture.</td>
                     <th><input class="form-check-input mx-auto" type="radio" name="9"required value="1"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="9"required value="2"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="9"required value="3"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="9"required value="4"></th>

                       </tr>

               <td><b>STUDENTS ENGAGEMENT AND REAL-TIME ASSESSMENT</b></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                       </tr>

               <td>Checks for understanding of students often during the course of the lecture.</td>
                     <th><input class="form-check-input mx-auto" type="radio" name="10"required value="1"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="10"required value="2"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="10"required value="3"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="10"required value="4"></th>

               </tr>

                <td>Uses open-ended questions to assess student understanding of materials and surface
common misunderstandings.</td>
                     <th><input class="form-check-input mx-auto" type="radio" name="11"required value="1"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="11"required value="2"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="11"required value="3"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="11"required value="4"></th>

               </tr>

               <td>Accepts only high quality student responses.</td>
                     <th><input class="form-check-input mx-auto" type="radio" name="12"requiredrequired value="1"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="12"requiredrequired value="2"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="12"requiredrequired value="3"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="12"requiredrequired value="4"></th>

               </tr>


               <td>Cycles back to students who didn’t answer.</td>
                     <th><input class="form-check-input mx-auto" type="radio" name="13"required value="1"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="13"required value="2"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="13" required value="3"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="13"required value="4"></th>

               </tr>

              <td>Leads students to the correct answer by asking pertinent, sensible follow-up questions
that <br> activate background knowledge, helping students to thing aloud and modelling.</td>
                     <th><input class="form-check-input mx-auto" type="radio" name="14"required value="1"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="14"required value="2"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="14"required value="3"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="14"required value="4"></th>

               </tr>

               <td><b>COMPANY REPRESENTATIVENESS</b></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                       </tr>

            <td>Demonstrates belongingness to the Toprank Team.</td>
                     <th><input class="form-check-input mx-auto" type="radio" name="15"required value="1"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="15"required value="2"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="15"required value="3"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="15"required value="4"></th>

               </tr>

           <td>Executes excellence and uprightness as lecturer towards his/her students.</td>
                     <th><input class="form-check-input mx-auto" type="radio" name="16"required value="1"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="16"required value="2"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="16"required value="3"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="16"required value="4"></th>

               </tr>

           <td>Delivers the “#TeamToprank” campaign in his/her words, actions, and attributes in and
out of the classroom.</td>
                     <th><input class="form-check-input mx-auto" type="radio" name="17"required value="1"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="17"required value="2"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="17"required value="3"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="17"required value="4"></th>

               </tr>

          <td>Complies with company policies.</td>
                     <th><input class="form-check-input mx-auto" type="radio" name="18"required value="1"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="18"required value="2"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="18"required value="3"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="18"required value="4"></th>

               </tr>

        <td>Exhibits the core values of the company in all of his/ her dealings.</td>
                     <th><input class="form-check-input mx-auto" type="radio" name="19"required value="1"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="19"required value="2"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="19"required value="3"></th>
                     <th><input class="form-check-input mx-auto" type="radio" name="19"required value="4"></th>

               </tr>

        <td><b>COMMENTS & SUGGESTIONS: (Optional) </b></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
         </tr>


          <td><textarea class="form-control" name="comment"  rows="3"></textarea></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     
         </tr>
   
   
  
  
  </tbody>
</table>

 <div class="modal-footer">
        <button type="submit" name="beval" class="btn btn-primary">Submit</button>
   
      </div>

   </form>                        
                

</body>
</html>


<?php 

if (isset($_POST['beval'])) {

$a1 = $_POST['1'];
$a2 = $_POST['2'];
$a3 = $_POST['3'];
$a4 = $_POST['4'];
$a5 = $_POST['5'];
$a6 = $_POST['6'];
$a7 = $_POST['7'];
$a8 = $_POST['8'];
$a9 = $_POST['9'];
$a10 = $_POST['10'];
$a11 = $_POST['11'];
$a12 = $_POST['12'];
$a13 = $_POST['13'];
$a14 = $_POST['14'];
$a15 = $_POST['15'];
$a16 = $_POST['16'];
$a17 = $_POST['17'];
$a18 = $_POST['18'];
$a19 = $_POST['19'];
$comment = $_POST['comment'];



$sql= "INSERT INTO `evaltbl` (`stud_no`, `exam_no`, `active`,  `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`, `a8`, `a9`, `a10`, `a11`, `a12`, `a13`, `a14`, `a15`, `a16`, `a17`, `a18`, `a19`, `comment`) VALUES ('$user', '$exam_id', '$active', '$a1', '$a2', '$a3', '$a4', '$a5', '$a6', '$a7', '$a8', '$a9', '$a10', '$a11', '$a12', '$a13', '$a14', '$a15', '$a16', '$a17', '$a18', '$a19', '$comment')";



  if($conn->query($sql) === TRUE ){
          
                  echo "<script language = 'javascript'>alert('Thank you!')</script>";
                 


  
$duration="";


 $query= "SELECT * FROM timetbl WHERE exam_id ='$exam_id'";
 $result= mysqli_query($conn,$query);


 while($row = mysqli_fetch_array($result)){

$duration=$row["duration"];
 }

$_SESSION["duration"] = $duration;
$_SESSION["start_time"] =date("Y-m-d H:i:s");

$end_time=$end_time=date('Y-m-d H:i:s', strtotime('+'.$_SESSION["duration"].'minutes', strtotime($_SESSION["start_time"])));

$_SESSION["end_time"]=$end_time;


echo "<script>window.location.href ='exam.php?id=$exam_id';</script>";







                  }else{
                  echo "Error" . $sql . '' . $conn->connect_error;
                  }
               $conn->close();
  }


?>