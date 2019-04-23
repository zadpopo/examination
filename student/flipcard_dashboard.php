
<!DOCTYPE html>
<html>
<head>
 <title></title>
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
<link rel="stylesheet" type="text/css" href="flipcard.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--fontawesome--->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


<?php 
include("php/connections.php");



/* year active */

 $s1= "SELECT * FROM yeartbl WHERE status = '1'";
  $r1 = $conn->query($s1);
  $d1= $r1->fetch_assoc();
  $active = $d1['year'];

$q2 ="select * from studenttbl where student_number ='$user'";
$r2 = mysqli_query($conn,$q2);
$d2 =$r2->fetch_assoc();





?>
</head>
<body>

  <br>
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front" >
      <br>

      <i class="fas fa-user-graduate fa-5x"></i>
      <h3>Informations </h3>

    </div>
    <div class="flip-card-back">
      <br>
      <h3><?php echo $d2['Program'];?></h3> 
      <p><?php echo $d2['Status'];?></p>  

      <p><?php echo $d2['Package'];?></p>
    </div>
  </div>
</div>

<!---flipcard2-exam--->


<!---flipcard3-uncollected fee--->

<div class="flip-card3">
  <div class="flip-card-inner3">
    <div class="flip-card-front3" >
      <br>

      <i class="fas fa-money-check-alt fa-5x"></i>
      <h3>SOA</h3>

    </div>
    <div class="flip-card-back3">
      <br>
      <h4 style="color:green">Please Pay fully before due date</h4> 
      <p><h5>Balance ₱ <?php echo $d2['balance'];?></h5></p>
  
     
    </div>
  </div>
</div>
</body>
</html>
