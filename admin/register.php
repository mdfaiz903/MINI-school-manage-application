<?php
  include 'config.php';

  session_start();
  $email_error = "";
 
$file_name = uniqid().time().str_replace(" ", "_",$_FILES['file_upload']['name']);


  if(isset($_POST['sign_up'])){
		
    $fname = $_POST['fname'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$pswd = $_POST['pswd'];  
		$com_pass = $_POST['com_pass'];

	  $destination = "std_img/".$file_name;
    // echo $img;
    $filename =  $_FILES['file_upload']['tmp_name'];
        if(move_uploaded_file($filename,$destination)){
            $sql = " INSERT INTO photo (path) VALUES ('$destination') ";

            $query = mysqli_query($conn,$sql);

            $sql = " SELECT * FROM  photo ";
            $obj = mysqli_query($conn,$sql);
            
            foreach ($obj as $key => $value){
                echo "<img style='width:150px' src=".$value['path'].">";
            }
        }
  
    $email_exist =" SELECT * FROM user WHERE email = '$email'";
    $email_check = mysqli_query($conn,$email_exist);
    
    if(mysqli_num_rows($email_check)>=1){
     $email_error = "your email is exist";
       }
    $sql = " INSERT INTO user( name, email, username, password, photo, status) VALUES ('$fname','$email','$username','$pswd','$file_name',0)";

    $result = mysqli_query($conn,$sql);
    if($result){

     $_SESSION['data_insert_success'] = "data insert successfully";
      header('location:login.php') ;
    } else{
           $_SESSION['data_dosesnot_insert'] = "data insert error";

  }


    
  }

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>register </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <div class="row">
      <div class="col-md-4"><a href="login.php" type="submit" class="btn btn-success" id="btn"  name="btn" value="">login</a></div>
      <div class="col-md-6">  <h2>user registred form</h2>

   
       
      


  <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="name">Name:</label>
				<input type="text" name="fname" class="form-control" placeholder="Enter your name"  id="name" >
      </div>
       <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      <span><?=$email_error;?></span>
      </div>
    <div class="form-group">
      <label for="username">username:</label>
      <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
      
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <div class="form-group">
      <label for="com_pass">comfirm-Password:</label>
      <input type="password" class="form-control" id="com_pass" placeholder="comfirm-Password" name="com_pass">
    </div>
    
      <label for="file_upload">photo:</label>
      <input type="file" name="file_upload" id="file_upload">
      
      <button type="submit" name="sign_up" class="btn btn-primary">register</button>
  </form></div>
      <div class="col-md-2"></div>
    </div>

</div>

</body>
</html>
