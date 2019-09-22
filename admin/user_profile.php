<?php
include_once 'config.php';
//echo $_SESSION['user_login'];
$session_user = $_SESSION['user_login'];

$user_data = mysqli_query($conn," SELECT * FROM user WHERE username = '$session_user'");
$user_row = mysqli_fetch_assoc($user_data);
//print_r($user_row);




?>         
         
         
          <h1 class="text-primary"><i class="fa fa-dashboard"></i>USER PROFILE <small>My Profile</small></h1>
          <ol class="breadcrumb">

            <li><a href="index.php?page=dashboard"><i class="fa fa-dashboard"></i>Dashbord</a> </li>
            <li class="active"><i class="fa fa-user"></i>My Profile</a> </li>

        </ol>

        <div class="row">
            <div class="col-sm-6">
                <table class="table table-bordered table-hover">
                    <tr>
                        <td>User ID</td>
                        <td><?=$user_row['id'];?></td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td><?=ucwords($user_row['name']);?></td>
                    </tr>
                    <tr>
                        <td>User name</td>
                        <td><?=$user_row['username'];?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?=$user_row['email'];?></td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td><?=$user_row['status'];?></td>
                    </tr>
                    <tr>
                        <td>Sign-up date</td>
                        <td><?=$user_row['datetime'];?></td>
                    </tr>
                </table>
                <a href="" class="btn btn-primary pull-right">Edit</a>
            </div>
            <div class="col-sm-6">
                <a href="" ><img class="img-thumbnail" style="width:250px" src="std_img/<?=$user_row['photo'];?>"> </a>
                <br><br>
                <form action="" method="post" enctype="multipart/form-data">
                 <label>Photo : </label>
                 <input type="file" name="file_upload">
                </form>
                <br>
                <a href="" class="btn btn-primary " name="upload">submit</a>

            </div>
        </div>