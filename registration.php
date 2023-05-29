<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Quiz App</title>
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
    <div class="container m-auto d-block " align="center">
      <div class="col-sm-6 data" style="margin-top: 200px;">
        <h2 style="color:#716d61;">Registration Form</h2>
        <form method="post">
          <div class="form-group">
            <label for="fname" style="color:#716d61;">Username:</label>
            <input type="text" class="form-control" name="fname" id="email" placeholder="Enter email" name="email" required>
          </div>
          <div class="form-group">
            <label for="pwd" style="color:#716d61;">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pass" required>
          </div>
          <button type="submit" name="sub" class="btn btn-primary">Submit</button>
        </form>
      </div> 
      <?php 
        include("conn.php");
        if(isset($_POST['sub'])){
          $name  = $_POST['fname'];
          $pass = $_POST['pass'];
          
          $sql = "INSERT INTO user(name,password) VALUES('$name','$pass')";
          if(mysqli_query($conn,$sql)){
            echo '
              <p style="background:grey; margin-top:10px" >'.$name.' your record is sussfully register </p>';
          header('Refresh: 3; URL=login.php');}
          else{
            echo "not inserted";
          }
        }
      ?>
    </div>
  </body>
</html>
