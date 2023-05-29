<?php
session_start();
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
    .content {
      background: url('img/cream.jpg') center / cover no-repeat;
    }
    .data {
      background: url('img/cream_.jpg') center / cover no-repeat;
    }
  </style>
  <body class="content" style="color:white">
    <div class="container " align="center">
      <div class="col-sm-6 data" style="margin-top: 200px;">
        <h2 style="color:#716d61;">Login Form</h2>
        <form method="post">
          <div class="form-group">
            <label for="fname" style="color:#716d61;">Username:</label>
            <input type="text" class="form-control" name="fname" id="email" placeholder="Enter username" name="email" required>
          </div>
          <div class="form-group">
            <label for="pwd" style="color:#716d61;">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pass" required>
          </div>
          <button type="submit" name="sub" class="btn btn-primary">Submit</button>
          <br>
          <br>
          <p style="color:grey;">Don't have account? <a href="registration.php"> Register</a>
          </p>
        </form>
      </div>
    </div>
    <div align="center" style="background:grey; margin-top: 10px;"> <?php
include("conn.php");
if(isset($_POST['sub'])){
	$user =	$_POST['fname'];
	$pass = $_POST['pass'];

	$sql = "SELECT * FROM user WHERE name = '$user' && password = '$pass'";
	$data = mysqli_query($conn,$sql);
	$result =  mysqli_num_rows($data);

	if($result == 1){
		$_SESSION['user'] = $user;
		$_SESSION['pass'] = $pass;
		
		while($row = mysqli_fetch_assoc($data)){
      ?> <a href='quiz.php/?id=<?php echo  $_SESSION['id'] =$row['id']; ?>' style="color: white;text-decoration: none;"> <?php echo 'Welcome '.$user." click here";?> </a> <?php	}
	}
	else{
		echo "user invailed";
	}
}
?> </div>
  </body>
</html>
