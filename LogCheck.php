<?php
include('connection.php');
$name=$_POST["UN"];
$pass=$_POST["PW"];
$query="select * from users where UserName='$name' and Password='$pass'";
$result=mysqli_query($dbc,$query);
$num=mysqli_num_rows($result);
if($num==0)
{
	
}
else 
{
	session_start();
	$_SESSION['name']=$name;
	header("Location:VroomCarz.php");
}
?>
<html>
<body>
<script>alert("check credentials");</script></body>
<?php include('SignIn.php');?>
</html>
