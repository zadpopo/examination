
<!DOCTYPE html>
<html>
<head>
  <title>Admin Page</title>
</head>
<body style="background-image: url('../img/bgmain.jpg'); background-color: white; background-origin:content-box, content-box; background-size: cover; background-repeat: no-repeat"; >


  <?php 
  include ("php/nav.php");
  ?>
  
  <!---fire anim--->


<link rel="stylesheet" type="text/css" href="fire-anim.css">

<div hidden class="fire">
  <div class="fire-left">
    <div class="main-fire"></div>
    <div class="particle-fire"></div>
  </div>
  <div class="fire-main">
    <div class="main-fire"></div>
    <div class="particle-fire"></div>
  </div>
  <div class="fire-right">
    <div class="main-fire"></div>
    <div class="particle-fire"></div>
  </div>
  <div class="fire-bottom">
    <div class="main-fire"></div>
  </div>
</div>

<!--side menu-->

<!--side menu-->

<!---side menu button--->
<?php 

$cardtest = "";

if(isset($_POST["home"])){

$cardtest = "d-none";
}


?>





  <div class="testing" style="text-align: bottom"><h5></h5>
    <h6> </h6>
    <img src="../img/awards.png">

<style>
  .testing{
    position: absolute;
    bottom: 15px;
    left: 300px;

  }
</style>

  </div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>




