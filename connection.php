<?php
$dbc=mysqli_connect('localhost','root','');
if(!$dbc)
{
	die("connection failed");
}
$dbs=mysqli_select_db($dbc,'sample');
if(!$dbs)
{
	die("data base selection failed");
}

?>