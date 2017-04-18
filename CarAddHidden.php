<?php
session_start();
include('connection.php');
$sname=$_SESSION['name'];
$pname=$_POST["cname"];
$ploc=$_POST["iloc"];
$pcost=$_POST["ccost"];
$pquant=$_POST["cquant"];
$num1=$_POST['crid'];

if($pname && $pcost && $ploc && $num1 && $pquant)
{

	$query="select * from cars where CarID='$num1'";
	$result=mysqli_query($dbc,$query);
	$num=mysqli_num_rows($result);
	if($num==0)
	{
	$query1="insert into cars set Name='$pname' ,CarID='$num1' ,Rent='$pcost' ,Capacity='$pquant' ,ImgLoc='$ploc'";
		$result1=mysqli_query($dbc,$query1);
	header('Location:VroomCarzCreation.php');
	}
	else
	{
	echo "<script>alert('Car already exist!');</script>";
		include('AddCar.php');	
	}
}

else
{
	echo "<script>alert('Please,Enter all the details to Cont');</script>";
	include('AddCar.php');
}

?>