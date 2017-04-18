<?php
include('connection.php');

$name=$_POST["UN"];
$pass=$_POST["PW"];

	$query="select * from users where UserName='$name'";
	$result=mysqli_query($dbc,$query);
	$num=mysqli_num_rows($result);
	if($num==0)
		{
			$query1="insert into users set UserName='$name' ,Password='$pass'";
			$result1=mysqli_query($dbc,$query1);
			header("Location:SignIn.php");
		}
    else
    	header("Location:SignIn.php");

?>