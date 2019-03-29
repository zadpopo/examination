<!doctype html>
<html lang="en">
  <head> <!---Admin page-->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="admin_sidemenu.css">

     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

        <!---onlinewebfont-->

        <link href="//db.onlinewebfonts.com/c/23ab8b9b588d250d12590e755a4d00da?family=Nexa+Bold" rel="stylesheet" type="text/css"/>



    <title></title>
  </head>
  <body style="background-image: url('../img/bgmain.jpg'); background-color: white; background-origin:content-box, content-box; background-size: cover; background-repeat: no-repeat"; >
<?php

include ("connections.php");



 session_start();
 
 if(isset($_SESSION["user"])){
   $user = $_SESSION["user"];
 }else{
   echo "<script>window.location.href='../';</script>";
 }
 
$retrieve_query = mysqli_query($conn, "SELECT * FROM logtbl WHERE user='$user' ");

while($row_users = mysqli_fetch_assoc( $retrieve_query )){
  
  $emp_user = $row_users["user"];
  $emp_pass = $row_users["pass"];

}


$retrieve_query = mysqli_query($conn, "SELECT * FROM studenttbl WHERE student_number='$emp_user' AND password ='$emp_pass'");

while($row_users = mysqli_fetch_assoc( $retrieve_query )){
  
  

  $stu_user = $row_users["student_number"];
  $stu_lname = $row_users["LastName"];
  $stu_fname = $row_users["FirstName"];
  $stu_mname = $row_users["MiddleName"];

  
  
  $stu_fullname = $stu_fname . " " . $stu_mname . " " . $stu_lname; 
  
  
}



  $s1= "SELECT * FROM yeartbl WHERE status = '1'";
  $r1 = $conn->query($s1);
  $d1= $r1->fetch_assoc();
  $active = $d1['year'];


?>
<div class="area"></div><nav class="main-menu">
 <form action="" method="POST"> 
            <ul>
                <li>
                    <a href="home.php" name="home" >
                      <br>
                        <i class="fa fa-home fa-1.5x"></i>
                        <span class="nav-text">
                            Home
                        </span>
                        
                    </a>
                  
                </li>
                <li class="has-subnav">
                    <a href="">
                      <br>
                        <i class="fa fa-laptop fa-1.5x"></i>
                        <span class="nav-text">
                           Welcome <?php echo $stu_fullname ?>
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="show_exam.php">
                      <br>
                       <i class="fa fa-list fa-1.5x"></i>
                        <span class="nav-text">
                           Examinations list
                        </span>
                    </a>
                    
                </li>
               
                
             
                <li>
                    <a href="studentinfo.php">
                      <br>
                       <i class="fa fa-info fa-1.5x"></i>
                        <span class="nav-text">
                            Student Profile
                        </span>
                    </a>
                </li>
            </ul>

            <ul class="logout">
                <li>
                   <a href="../logout.php">
                    <br>
                         <i class="fa fa-power-off fa-1.5x"></i>
                        <span class="nav-text">
                            Logout
                        </span>
                    </a>
                </li>  
            </ul>
        </nav>
      </form>
        