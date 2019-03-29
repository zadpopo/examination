<?php 
include '../php/connections.php';



  if ($_GET) {
    $id = $_GET['id'];


     $sql= "DELETE FROM block WHERE block_id = '$id'";



       if($conn->query($sql) === TRUE ){
          
                  echo "<script language = 'javascript'>alert('Successfully Deleted!')</script>";
                  echo "<script>window.location.href = 'en_review.php';</script>";
                  }else{
                  echo "Error" . $sql . '' . $conn->connect_error;
                  }
               $conn->close();





}

?>

