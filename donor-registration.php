<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
         <title>Donor Registration</title>
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
			   <center><u><h1>Donor Registration</h1></u></center>
			   <br>
				<center><div id="form">
				<form action="" method="post">
				    <table>
					    <tr>
						    <td width="200px" height="50px">Enter Name</td><td width="200px" height="50px"><input type="text" name="name" placeholder="Enter Name"></td>
							<td width="200px" height="50px">Enter Father's Name</td><td width="200px" height="50px"><input type="text" name="fname" placeholder="Enter Father's Name"></td>
						</tr>
						<tr>
                            <td width="200px" height="50px">Enter Address</td>
							<td width="200px" height="50px"><textarea name="address"></textarea></td>
							<td width="200px" height="50px">Enter City</td>
							<td width="200px" height="50px"><input type="text" name="city" placeholder="Enter City"></td>
						</tr>
                        <tr>
                            <td width="200px" height="50px">Enter Age</td>
							<td width="200px" height="50px"><input type="text" name="age" placeholder="Enter Age"></td>
							<td width="200px" height="50px">Select Blood Group</td>
							<td width="200px" height="50px">
							    <select name="bgroup">
								   <option>o+</option>
								   <option>AB+</option>
								   <option>AB-</option>
								   <option>A+</option>
								   <option>B+</option>
								</select>
                            </td>							
						</tr>	
                        <tr>
                            <td width="200px" height="50px">Enter E-Mail</td>
							<td width="200px" height="50px"><input type="text" name="email" placeholder="Enter E-Mail"></td>
							<td width="200px" height="50px">Enter Mobile No</td>
							<td width="200px" height="50px"><input type="text" name="mno" placeholder="Enter Mobile No"></td>
						</tr>
                        <tr>
                            <td><input type="submit" name="sub" value="Submit"></td>
							
						</tr>							
				   </table>
				   </form>
				   <?php
				    if(isset($_POST['sub']))
					{
						$name=$_POST['name'];
						$fname=$_POST['fname'];
						$address=$_POST['address'];
						$city=$_POST['city'];
						$age=$_POST['age'];
						$bgroup=$_POST['bgroup'];
						$mno=$_POST['mno'];
						$email=$_POST['email'];
						$q=$db->prepare("INSERT INTO donor_registration (name,fname,address,city,age,bgroup,mno,email) VALUES(:name,:fname,:address,:city,:age,:bgroup,:mno,:email)");
						$q->bindvalue('name',$name);
						$q->bindvalue('fname',$fname);
						$q->bindvalue('address',$address);
						$q->bindvalue('city',$city);
						$q->bindvalue('age',$age);
						$q->bindvalue('bgroup',$bgroup);
						$q->bindvalue('mno',$mno);
						$q->bindvalue('email',$email);
						if($q->execute())
						{
							echo "<script>alert('Donor Registration Successful')</script>";
						}
						else
						{
							echo "<script>alert('Donor Registration Fail')</script>";
						}
					}
					?>
				</div></center>
        </div>
		<br><br>
        <div id="footer"><h3 align="center">DONATE BLOOD AND GIVE A LIFE!!<h3>
        	<p align="center"><a href="logout.php"><font color="white">Logout</a></p></div> 
     </div>
</div>
</body>
</html>