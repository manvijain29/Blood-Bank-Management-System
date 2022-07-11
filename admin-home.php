<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
         <title>Admin Login</title>
         <link rel="stylesheet" type="text/css" href="css/style.css">
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
			   <center><u><h1>Welcome Admin</h1></u></center>
			   <br>
				<center><ul>
				    <li><a href="donor-registration.php">Donor Registration</a></li>
					<li><a href="donor-list.php">Donor List</a></li>
				</ul><br><br><br><br>
                <ul>	
                    <li><a href="stoke-blood-list.php">Stoke Blood list</a></li>
					<li><a href="out-stoke-blood-list.php">Out Stoke Blood List</a></li>
                 </ul><br><br><br><br>
                <ul>					
                    <li><a href="exchange-blood-registration.php">Exchange Blood Donor Registration</a></li>					
					<li><a href="exchange-blood-list.php">Exchange Blood list</a></li>
				</ul></center>
        </div>
		<br><br>
        <div id="footer"><h3 align="center">DONATE BLOOD AND GIVE A LIFE!!<h3>
        	<p align="center"><a href="logout.php"><font color="white">Logout</a></p></div> 
     </div>
</div>
</body>
</html>