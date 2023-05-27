<?php
session_start();
include('conn.php');
error_reporting(0);
?>	
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Codes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
.blinking{
    animation:blinkingText 1.2s infinite;
}
@keyframes blinkingText{
    0%{     color: #FFEB3B;    }
    49%{    color: #FF5722; }
    60%{    color: #429600; }
    99%{    color: #e91e1e;  }
    100%{   color: #FFF;    }
}
.data {
  background: url('img/cream.jpg') center / cover no-repeat;
}
</style>
<body class = "data">
 
<div class="container ">
  <h2 class="text-center" style="color:black">Online Quiz</h2>
   <?php echo '<h1 class="text-center blinking" style="color:white">'.$_SESSION['user'].' your result </h1>'; ?><div class="card" style="background:#333841; color:white">
   <h2 class="data text-center" style="color:black">Result</h2>
   </div>
   <div class="card-body" style="color:white">
   <table border='0px' width="100%">
   <th style="color:black">Attempt Questions</th>
   <th style="color:black">Your Score is :</th>
  <tr>
  <h2 style="color:black"> <?php
  $res = 0;
  $i = 1;
   if(isset($_POST['sub'])){
	   if(!empty($_POST['check'])){
		  $match = count($_POST['check']);
		  echo "<td style='color:black'>Out of 7 you attempt ".$match.' options</td>';
	    $select = $_POST['check'];
	   $sql1 = "select * from  questions ";
	$data2 = mysqli_query($conn,$sql1);

		while($row = mysqli_fetch_assoc($data2)){
			$check = $row['ans_id'] == $select[$i];
			if($check){
			  $res++;
			}
			$i++;
		}
		echo "<td style='color:black'>".$res."</td>";
	   }
	   
	   if(empty($_POST['check'])){
		  $match = count($_POST['check']);
		  echo "<td>Please select the options </td>";
	   }	
   }
   ?></h2>
   </tr>
   </table>
   </div>
   <div class="card-footer text-center">
	<a href = 'http://localhost/quiz/logout.php'>
	<button class="btn btn-primary">Log out</button></a></div>
  </div>