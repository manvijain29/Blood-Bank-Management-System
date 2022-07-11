<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
         <title>STOKE BLOOD LIST</title>
         <link rel="stylesheet" type="text/css" href="css/style.css">
		 <style type="text/css">
	    td{
			width: 200px;
			height: 35px;
			color: white;
			
		}
		</style>
</head>
<body>
<div id="full">
<br><br>
        <div id="inner_full">
        <div id="header"><h2 align="center"><a href="admin-home.php" style="text-decoration: none;color: white;">BLOOD BANK MANAGEMENT SYSTEM</a></h2></div>
        <div id="body">
               <br>
			   <?php
			   $un=$_SESSION['un'];
			   if(!$un)
			   {
				   header("Location:index.php");
			   }
			   ?>
			   <center><h1><u>STOKE BLOOD LIST</u></h1></center>
				<center><div id="form">
	                <table background="brown">
                        <tr>
                            <td><center><b><font color="black">Name</font></b></center></td>
                            <td><center><b><font color="black">Qty</font></b></center></td>
						</tr>
						<tr>
						    <td><center>O+</center></td>
							<td><center>
							    <?php
								$q=$db->query("SELECT * FROM donor_registration WHERE bgroup='O+'");
								echo $row=$q->rowcount();
								?>
							</center></td>
						</tr>
						<tr>	
							<td><center>AB+</center></td>
							<td><center>
							    <?php
								$q=$db->query("SELECT * FROM donor_registration WHERE bgroup='AB+'");
								echo $row=$q->rowcount();
							    ?>
							</center></td>
						</tr>
						<tr>	
							<td><center>AB-</center></td>
							<td><center>
							    <?php
								$q=$db->query("SELECT * FROM donor_registration WHERE bgroup='AB-'");
								echo $row=$q->rowcount();
							    ?>
							</center></td>
						</tr>
						<tr>	
							<td><center>A+</center></td>
							<td><center>
							    <?php
								$q=$db->query("SELECT * FROM donor_registration WHERE bgroup='AB+'");
								echo $row=$q->rowcount();
							    ?>
							</center></td>
						</tr>
						<tr>	
							<td><center>B+</center></td>
							<td><center>
							    <?php
								$q=$db->query("SELECT * FROM donor_registration WHERE bgroup='AB+'");
								echo $row=$q->rowcount();
							    ?>
							</center></td>
						</tr>
						   
				     </table>
				</div></center>
        </div>
		<br><br>
        <div id="footer"><h3 align="center">DONATE BLOOD AND GIVE A LIFE!!<h3>
        	<p align="center"><a href="logout.php"><font color="white">Logout</a></p></div> 
     </div>
</div>
</body>
</html>