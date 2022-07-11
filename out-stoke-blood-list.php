<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Out Stoke Blood List</title>
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
			<?php
			     $un=$_SESSION['un'];
				 if(!$un)
               {
                   header("Location:index.php");
               }  
            ?>
			    <h3><center><u>OUT STOKE BLOOD LIST</center></u></h3>
				<center><div id="form">
	                <table>
                        <tr>
                            <td><center><b><font color="black">Name</font></b></center></td>
                            <td><center><b><font color="black">Blood Group</font></b></center></td>
							<td><center><b><font color="black">Mobile No</font></b></center></td>
				        </tr>
						<?php
						$q=$db->query("SELECT * FROM out_stoke_b");
						while($r1=$q->fetch(PDO::FETCH_OBJ))
						{
							?>
						<tr>
						    <td><center><?= $r1->name; ?></center></td>
							<td><center><?= $r1->bname; ?></center></td>
							<td><center><?= $r1->mno; ?></center></td>
							</tr>
						    <?php
						}
						?>
				     </table>
				</div></center>
        </div>
       <div id="footer"><h3 align="center">DONATE BLOOD AND GIVE A LIFE!!<h3>
        	<p align="center"><a href="logout.php"><font color="white">Logout</a></p></div> 
     </div>
</div>
</body>
</html>