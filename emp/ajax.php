<?php

 include("php/connections.php");

 $prog_n=$_GET["cus_n"];
 
 if( $prog_n!="")
 {
 
	 $res=mysqli_query($conn, "SELECT * FROM block WHERE program ='$prog_n'"); 
	 echo "<select name=block>";
	 while($row=mysqli_fetch_array($res))
		 {
			 
			 echo "<option value="; echo $row["block_id"]; echo">"; echo $row["block_name"]; echo "</option>";
			 
			 
			 
			 
			 
			 
			 
		 }
		 
			echo "</select>";
		
 }

?>