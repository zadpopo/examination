
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


?>
</head>
<body>

  <br>
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front" >
      <br>

      <i class="fas fa-user-graduate fa-5x"></i>
      <h3> Examination </h3>

    </div>
    <div class="flip-card-back">
      <br>
      <h3>Finished Exams</h3> 
      <p><?php echo $active ?></p>  

      <h2><p></p></h2>
    </div>
  </div>
</div>

<!---flipcard2-exam--->

<div class="flip-card2">
  <div class="flip-card-inner2">
    <div class="flip-card-front2" >
      <br>

      <i class="fas fa-file-alt fa-5x"></i>
      <h3> Attendance</h3>

    </div>
    <div class="flip-card-back2">
      <br>
      <h2>Details</h2> 
      <p><?php echo $active ?></p> 

<?php 


$q3="SELECT COUNT(*) as ex FROM `lexamtb` WHERE `actyear` = '$active'";
$r3= $conn->query($q3);
$d3= $r3->fetch_assoc();
$countt3 = $d3['ex'];


?>

      <h3><p><?php echo $countt3 ?></p></h3>
    </div>
  </div>
</div>

<!---flipcard3-uncollected fee--->

<div class="flip-card3">
  <div class="flip-card-inner3">
    <div class="flip-card-front3" >
      <br>

      <i class="fas fa-money-check-alt fa-5x"></i>
      <h3>Unpaid Fee</h3>

    </div>
    <div class="flip-card-back3">
      <br>
      <h2>Details</h2> 
      <p>Numbers</p> 
      <p></p>
    </div>
  </div>
</div>
</body>
</html>
