<?php
include('connection.php');
$name=$_POST["UN"];
$pass=$_POST["PW"];

if($name==BOSS&&$pass==BOSS)
{
	session_start();
	$_SESSION['name']=$name;
	header("Location:VroomCarzCreation.php");
}
?>
<html>
<body>
<script>alert("check credentials");</script></body>
<?php include('BossSignIn.php');?>
</html>
