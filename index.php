<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
		<link rel="stylesheet" type="text/css" href="Animated Login Form/stylelogin.css">
</head>
<body >

<?php 
include("php/connections.php");

session_start();

?>

<?php 

if(isset($_SESSION["user"])){
	
	$user = $_SESSION["user"];
	
	$query_account_type = mysqli_query($conn, "SELECT * FROM logtbl WHERE user='$user'");
	
	$get_account_type = mysqli_fetch_assoc($query_account_type);
	
	$account_type = $get_account_type["position"];
	
	if($account_type == 'admin'){
			
		echo "<script>window.location.href='Admin';</script>";

	}elseif($account_type == 'lecturer'){
			
		echo "<script>window.location.href='teacher';</script>";

	}else{	
		echo "<script>window.location.href='student';</script>";
	}
		
		
	
}
$user = $pass = "";
 
 $userErr = $passErr = "";

if(isset($_POST["btnlog"])){


$user = $_POST["user"];
$pass = $_POST["pass"];

 if($user && $pass){
    

     $check_user = mysqli_query($conn, "SELECT * FROM logtbl WHERE user='$user'");

     $check_user_row = mysqli_num_rows($check_user);
    
    if($check_user_row > 0){

    	$fetch = mysqli_fetch_assoc($check_user);
			$db_user = $fetch["user"];
			$db_password = $fetch["pass"];
			$dec_pass = base64_decode($db_password);
			$db_accounttype = $fetch["position"];
			
			if($db_accounttype == "admin") {
				
				if($dec_pass == $pass){
					
					$_SESSION["user"] = $user;
					$_SESSION["acctype"] = $db_accounttype;
					
					
					echo "<script>window.location.href='admin';</script>";
					
				}else{
					
					$passErr = "Hi Admin! Your Password is incorrect!";
					
				}
			}


			elseif($db_accounttype == "lecturer") {
				
				if($dec_pass == $pass){

					$_SESSION["user"] = $user;
					$_SESSION["acctype"] = $db_accounttype;
			
					
					echo "<script>window.location.href='teacher';</script>";
					
				}else{
					
					$passErr = "Hi lecturer! Your Password is incorrect!";
					
				}
			}

			elseif($db_accounttype == "student") {
				
				if($dec_pass == $pass){

					$_SESSION["user"] = $user;
					$_SESSION["acctype"] = $db_accounttype;
			
					
					echo "<script>window.location.href='student';</script>";
					
				}else{
					
					$passErr = "Hi Student! Your Password is incorrect!";
					
				}
			}
		}else{

			$userErr = "Username/Password is not registered";
		}








  
}
}//

?>
	
<div>
<form class="box" action="" method="post">
<img src="img/white_logo.png "style="width:300px;height:70px;">
 


	<input type="text" id="user" name="user"  value="<?php echo $user; ?>" placeholder="Username" required>
	
	<input type="Password"  id="Password" name="pass" placeholder="Password" required>

	 <input  class="test" type="submit"  value="Login" name="btnlog">
	 <span  style="color: red"><?php echo $userErr; ?></span>
	 <span style="color: red"><?php echo $passErr; ?></span>
	    
	</form>
</div>



</body>
</html>