 <!DOCTYPE html>
 <html>
 <head>
 	<title>Change Password</title>
 </head>
 <body>
 <?php 
  include ("php/nav.php");
  
  ?>
  
<style>

.modal-header {
  background-color: white;
  color: black;
}

.alert {
	display:inline-block;
}


</style>


<div class="container col-md-5 "  style="background-color: white">
	<div class="card">
		<div class="card-body">
<form method="POST" >
	
	<center>

	<table border="0" width="100%">
	
			<tr>
				<td>
					<br><br><center><h3>Change Password<h3><hr>
				</td>
			</tr>
	
		<tr>
			<td>
			
			<div class="form-group" style="color:black">
				<div class="col-sm-20">	
					<div class="form-group" style="color:black">
						<label class="control-label col-sm-10" for="currpass">Current Password: </label>
                            <div class="col-sm-7">
                                <input type="password" class="form-control"  name="currpass" value="" placeholder="Current Password" required autofocus> </div>
                            </div>		
				</div>
					
				<div class="col-sm-20">		
					<div class="form-group" style="color:black">
						<label class="control-label col-sm-10" for="newpass">New Password: </label>
                            <div class="col-sm-7">
                                <input type="password" class="form-control" name="newpass" value="" placeholder="New Password" required autofocus> </div>
                            </div>
							
				</div>

				<div class="col-sm-20">		
					<div class="form-group" style="color:black">
						<label class="control-label col-sm-10" for="conpass">Confirm New Password: </label>
                            <div class="col-sm-7">
                                <input type="password" class="form-control"  name="conpass" value="" placeholder="Confirm New Password" required autofocus> </div>
                            </div>	
				</div>
			</div>
			
			</td>
		</tr>
		<tr>
			<td><hr></td>
		</tr>
		
		<tr>
			<td><center><input type="submit" class='btn btn-info btn-lg' name="btnChange" value="Change Password"></center></td>
		</tr>
	
	
	</table>
	
	</center>
	
</form>

</div>


<?php 


if(isset($_POST["btnChange"])){
		
		$currpass = $_POST['currpass']; 
		$newpass = $_POST['newpass'];
		$conpass = $_POST['conpass'];

		$pass_query = mysqli_query($conn, "SELECT * FROM logtbl WHERE user='$user'");
	
		while($row_users = mysqli_fetch_assoc( $pass_query )){
			
			
		$enc_password = $row_users["pass"];
		$db_password = base64_decode($enc_password);
		
		}
		
		if($currpass != $db_password){
			$alert = "<center><div class='alert alert-danger'>Current Password is incorrect</div></center>";
			echo $alert;
		}else{
			
		if($newpass != $conpass){
			$alert = "<center><div class='alert alert-danger'>Passwords doesn't match</div></center>";
			echo $alert;
		}else{	
			
		$enc_newpass = base64_encode($newpass);	
			
		 mysqli_query($conn, "UPDATE logtbl SET pass='$enc_newpass' WHERE user='$user' ");
		 mysqli_query($conn, "UPDATE studenttbl SET Password='$enc_newpass' WHERE student_number='$user' ");
		 echo "<script language = 'javascript'>alert('Password changed successfully!')</script>";	
							
		}
		}
	
}
		


?>

 </body>
 </html>

 