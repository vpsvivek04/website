<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vroom Carz</title>    
    <link href="css/bootstrap.min.css" rel="stylesheet">   
    <style>
      img{width: 200px; height:200px;}
    </style> 
 </head>
  
  <body>

    <div class="container">
  <div class="row">

       <?php
       session_start();
       echo 'Welcome, '.$_SESSION['name'];
       ?>

  </div>
</div>
</div>
</div><br><br>

<div class="container">
        <div class="row">
          <div class="col-md-2" >
            <a style="position: fixed; top: 450; right: 20px;" href="AddCar.php">
               <button type="button" class="btn btn-primary btn-lg">(+) Add New Car</button>
            </a><br>
            <a style="position: fixed; margin-top:180px; right: 20px;" href="logout.php">
               <button type="button" class="btn btn-primary btn-lg">logout</button>
            </a>
          </div>
        </div>


<?php
  include('connection.php');
  $query="select * from cars";
  $result=mysqli_query($dbc,$query);
  $num=mysqli_num_rows($result); 
  
  if ($num>0) 
    {
     while($row =mysqli_fetch_array($result)) 
         {
          echo "<div class=col-md-3 style='background-color:#0099CC; margin-left:60px; margin-top:23px;'><img src='".$row['ImgLoc']."' /><br>";
          echo "
          <p>Vehicle Name : ".$row['Name']."</p><br>
          <p>Vehicle Capacity :".$row['Capacity']."</p><br>
          <p>Vehicle Rent :".$row['Rent']."</p><br>
          </div>";
          //echo "<a href='e-M-Products.php'><input type='button' value='hello' onClick=".fun($a);.";/></a></div>";   
        }

    }
?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>