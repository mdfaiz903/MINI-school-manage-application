<?php
    session_start();
    if(!isset($_SESSION['user_login'])){
       header ('location:login.php'); 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>School management system</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<!-- cs -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css
">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css
">
<link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.5/css/fixedHeader.bootstrap.min.css
">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css
">
<!-- //cs -->
  <!-- js -->
  <script type="text/javascript" src="  https://code.jquery.com/jquery-3.3.1.js
"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js
"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js
"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js
"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js
"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js
"></script>
<script type="text/javascript" src="js/script.js"></script>
  <!-- //js -->
</head>
<body>
   

<!-- navbar -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">SMS</a>
    </div>
 
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><i class="fa fa-user"></i> Wellcome : fayez</a></li>
      <li><a href="register.php"><i class="fa fa-user-plus"></i> Add user</a></li>
      <li><a href="index.php?page=user_profile"><i class="fa fa-user"></i> profile</a></li>
      <li><a href="logout.php"><i class="fa fa-power-off"></i> Login</a></li>
      
    </ul>
  </div>
</nav>
<!-- //navbar -->

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
            <div class="list-group">
    <a href="index.php?page=dashboard" class="list-group-item active"><i class="fa fa-dashboard"></i> Dashbord</a>
    <a href="index.php?page=add_student" class="list-group-item"><i class="fa fa-user-plus"></i>  Add student</a>
    <a href="index.php?page=std_update" class="list-group-item"><i class="fa fa-edit"></i>  update student </a>
    <a href="index.php?page=all_student" class="list-group-item"><i class="fa fa-users"></i>  All student </a>
    <a href="index.php?page=all_users" class="list-group-item"><i class="fa fa-users"></i>  All user </a>
  </div>
  </div>

  <!-- //dashbord -->
  <div class="col-sm-9">
      <?php
      
      if(isset($_GET['page'])){
          $page = $_GET['page'].'.php';
      }else{
        $page = "dashboard.php";
      }
      if(file_exists($page)){
        require_once $page;
      }else{
        require_once '404.php';
      }
      ?>
  </div>
    </div>
</div>
<!-- <footer class="footer-area">
    <p>copyright &copy 2019 all SMS right reserved</p>
    </footer> -->
</body>
</html>
