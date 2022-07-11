<?php
$db=new PDO('mysql:host=localhost:3306;dbname=my_bbms','root','');
if($db)
{
    "connected";
}
else
{
    "not connected";
}
?> 