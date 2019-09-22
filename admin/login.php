<?php
  require_once ('config.php');
  $error="";
  session_start();
   if(isset($_SESSION['user_login'])){
       header ('location:index.php'); 
    }
  
  if(isset($_POST['btn'])){
    //print_r ($_POST);
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($username)||empty($password)){
      $error = "your field is empty";
    }

     $sql = "SELECT * FROM `user` WHERE username = '$username' AND password = '$password'";
      $result = mysqli_query($conn,$sql);
      if(mysqli_num_rows($result)>0){
        $_SESSION['user_login'] = $username;
          header ('location:index.php');
      }else{
        echo "YOU HAVE NO ACCOUNT";
      }
  }


?>




<!DOCTYPE html>
<html lang="en">
<head>
  <title>login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
 <h1 class="text-center">School management system</h1>
 <div class="row">
   <div class="col-md-4"></div>
   <div class="col-md-4">
     <form action="login.php" method="post">
        <div class="form-group">
      <label for="username">user name:</label>
      <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
       <span><?=$error;?></span>
      </div>
        <div class="form-group">
      <label for="password">password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter your password" name="password">
       <span><?=$error;?></span>
      </div>
      <div class="form-group">
      
      <input type="submit" class="btn btn-success" id="btn"  name="btn">
      
      
      </div>


      </form>
      <p>Dont have account registration please<p>
     <a href="register.php" type="submit" class="btn btn-success" id="btn"  name="btn" value="">register</a>
      </div>
   <div class="col-md-4">
     </div>
 </div>

</div>

</body>
</html>