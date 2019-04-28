<!DOCTYPE html>
<html>
<head>
  <title>Student List </title>
</head>
<body>
<?php 
include "php/nav.php";


 $query= "SELECT * FROM studenttbl";
 $result= mysqli_query($conn,$query);



 $query2="SELECT DISTINCT program_name  FROM programtbl  ";

  $result2= mysqli_query($conn,$query2);

  

?>

 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
 



<div class="container">


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
                                            <th style="width:40%">Student ID</th>
                                            <th style="width:20%">Program</th>
                                            <th style="width:1%">Action</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <?php
                                        while($row = mysqli_fetch_array($result)){
                                        ?>


                                         <td><a href="studentinfo.php?id=<?php echo $row["student_number"]; ?>"><?php echo $row['LastName']?>, <?php echo $row['FirstName']?> <?php echo $row['MiddleName']?></a></td>
                                         <td><?php echo $row['student_number']?></td>

                                         <td><?php echo $row['Program']?></td>

                                         <td>


    <?php 


    $stud_no =  $row["student_number"]; 
    $button2 = '';
    $button ='';

  
 $check_s= mysqli_query($conn, "SELECT * FROM enrolltbl WHERE enroll_date='$active' AND student_number='$stud_no'");

 $check_s_row= mysqli_num_rows($check_s);
 if($check_s_row > 0) {


  $button = 'hidden style="cursor: not-allowed;"';
 }else{

  $button2='hidden style="cursor: not-allowed;"';

 }
    ?>


                                           <a href=""  id="<?php echo $row["student_number"]; ?>" <?php echo $button ?>data-toggle="modal" title="Enrollment"  data-target="" class="btn btn-primary btn-sm en"><i class="far fa-id-card"></i></a>

                                           <a href=""  id="<?php echo $row["student_number"]; ?>" data-toggle="modal" <?php echo $button2 ?> title="Payment" data-target="#" class="btn btn-success btn-sm pay"><i class="fas fa-dollar-sign"></i></a>

                                    
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


<?php 


if (isset($_POST['es'])) {

  $stud_no = $_POST["stud_no"];

  $old = $_POST["old"];
  $tf = $_POST["tf"];
  $bloc_id = $_POST["bloc_id"];
  $prog = $_POST["prog"];
  $newbal = $old + $tf;
  date_default_timezone_set ("Asia/Manila");
  $datee = date("Y-m-d");
  $email = $_POST["email"];


  require '../PHPMailer/PHPMailerAutoload.php';

          $mail = new PHPMailer;

          $mail->IsSMTP();

          $mail->Host = 'smtp.gmail.com';

          $mail->SMTPAuth = true;

          $mail->Username = 'toprankreviewcenter@gmail.com';

          $mail->Password = 'top_rank1';

          $mail->SMTPSecure = 'tsl';

          $mail->Port = 587;

          $mail->From = 'Top Rank Review Academy';

          $mail->FromName = 'Registrar';

          $mail->addAddress($email);

          $mail->isHTML(true);

          $message = "Thank you for enrolling in Top Rank Academy 

              <br> $prog

              <br> Your tuition fee in $active is :<b>$tf</b>


              <br>  
              ";

          $mail->Subject = 'You are Enrolled';

          $mail->Body = $message;

          if(!$mail->send()) {
            echo 'Message could not be sent';
            echo 'Mailer Error: ' . $mail->ErrorInfo; 

            echo "<script language = 'javascript'>alert('Enrollment Failed!')</script>";

            
          }else{

      $sql= "INSERT INTO enrolltbl (enroll_date, datee, student_number, program, block_id, tuition) VALUES ('$active','$datee', '$stud_no', '$prog', '$bloc_id', '$tf')";



      mysqli_query($conn, "UPDATE studenttbl SET balance ='$newbal' WHERE student_number= '$stud_no'");




   if($conn->query($sql) === TRUE ){
          
                  echo "<script language = 'javascript'>alert('The Student is Enrolled!')</script>";
                  echo "<script>window.location.href = 'stud_list.php';</script>";
                  }else{
                  echo "Error" . $sql . '' . $conn->connect_error;
                  }
               $conn->close();
}
}
?>

<!-- Modal -->
<div class="modal fade" id="pay" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Register Payment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="mpay">
      
      </div>
    
    </div>
  </div>
</div>

<!--for payment-->
<script>
  $(document).ready(function(){
    $('.pay').click(function(){
      var stud_no = $(this).attr("id");

      $.ajax({
        url:"action/payment.php",
        method:"POST",
        data:{stud_no:stud_no},
        success:function(data){
          $('#mpay').html(data);
          $('#pay').modal("show");
        }
      });
      

    });
  });
</script>

<?php

if (isset($_POST['bpay'])) {

  $amount = $_POST["amount"];
  $or = $_POST["or"];
  $des = $_POST["des"];

  $bal = $_POST["bal"];
  $stud_no = $_POST["stud_no"];

  $newbal = $bal - $amount;
  $email = $_POST["email"];


date_default_timezone_set ("Asia/Manila");
    $datee = date("Y-m-d");


$check_or= mysqli_query($conn, "SELECT * FROM transactiontbl WHERE receipt='$or'");
$check_or_row= mysqli_num_rows($check_or);

 if($check_or_row > 0) {


       echo "<script language = 'javascript'>alert('Failed!! The Transaction is already recorded!!')</script>";
}else{



require '../PHPMailer/PHPMailerAutoload.php';

          $mail = new PHPMailer;

          $mail->IsSMTP();

          $mail->Host = 'smtp.gmail.com';

          $mail->SMTPAuth = true;

          $mail->Username = 'toprankreviewcenter@gmail.com';

          $mail->Password = 'top_rank1';

          $mail->SMTPSecure = 'tsl';

          $mail->Port = 587;

          $mail->From = 'Top Rank Review Academy';

          $mail->FromName = 'Registrar';

          $mail->addAddress($email);

          $mail->isHTML(true);

          $message = "Your Student: <font color='green'><b>$stud_no</b></font> <br> 

          Your Previous Balance is: <font color='red'><b>$bal</b></font><br>

          Official Receipt: $or with the payment of $amount <br>

          Your Latest Balance is: <font color='red'><b>$newbal</b></font><br>



          ";

          $mail->Subject = 'Payment';

          $mail->Body = $message;

          if(!$mail->send()) {
            echo 'Message could not be sent';

            echo 'Mailer Error: ' . $mail->ErrorInfo;
            echo "<script language = 'javascript'>alert('Payment Registration Failed!')</script>";

            
          }else{

      $sql= "INSERT INTO `transactiontbl` (stud_id,`description`, `receipt`, `amount`, `trans_date`) VALUES ('$stud_no','$des', '$or', '$amount', '$datee')";



     mysqli_query($conn, "UPDATE studenttbl SET balance='$newbal' WHERE student_number= '$stud_no'");



            if($conn->query($sql) === TRUE ){
          
                  echo "<script language = 'javascript'>alert('successfully Registred!')</script>";
                  echo "<script>window.location.href = 'stud_list.php';</script>";
                  }else{
                  echo "Error" . $sql . '' . $conn->connect_error;
                  }
               $conn->close();


}
}

}


 ?>




</body>



<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
 <script>
      $(document).ready(function() {
   
    $('#tSortable20').DataTable();
} );
  
 </script>

 <!---footer--->
<div class="fixed-bottom">
  
<?php

include("../php/footer_fit.php");

?>
  
</div>

</body>
</html>








