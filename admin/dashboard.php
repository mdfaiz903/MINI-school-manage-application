<?php
    include_once ('config.php');
    $count_std = mysqli_query($conn,"SELECT * FROM students") ;
    //print_r ($count_std);
    $total_row = mysqli_num_rows($count_std);
    //echo $row;

    $count_usr = mysqli_query($conn,"SELECT * FROM user");
    $total_user = mysqli_num_rows($count_usr);

?>

<div class="content">
          <h1 class="text-primary"><i class="fa fa-dashboard"></i>Dashbord <small>statics overview</small></h1>
          <ol class="breadcrumb">

            <li><i class="fa fa-dashboard"></i>Dashbord</li>
        </ol>

        <div class="row">
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-users fa-5x"></i>
                            </div>
                            <div class="col-xs-9">
                                <div class="pull-right" style="font-size:45px"><?=$total_row;?></div>
                                <div class="clearfix"></div>
                                <div class="pull-right">All students</div>
                            </div>
                        </div>
                    </div>
                    <a href="index.php?page=all_student">
                            <div class="panel-footer">
                        <span class="pull-left">All students</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-o-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                    </a>
                    
                </div>
            </div>
            <div class="row">
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-users fa-5x"></i>
                            </div>
                            <div class="col-xs-9">
                                <div class="pull-right" style="font-size:45px"><?=$total_user;?></div>
                                <div class="clearfix"></div>
                                <div class="pull-right">All Users</div>
                            </div>
                        </div>
                    </div>
                    <a href="index.php?page=all_users">
                            <div class="panel-footer">
                        <span class="pull-left">All Users</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-o-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                    </a>
                    
                </div>
            </div>
            <div class="row">
        
        </div>
        <hr>
        <h3>New students</h3>
        <div class="table-responsive">
        <table id="data" class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>ROLL</th>
                    <th>CLASS</th>
                    <th>CITY</th>
                    <th>CONTACT</th>
                    <th>PHOTO</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include_once "config.php";

                $sql = " SELECT * FROM students";
                $query = mysqli_query($conn,$sql);
                //print_r($query);
                while($std_row=mysqli_fetch_assoc($query)){
                    //print_r($std_row);
               
            
            ?>
                <tr>
                    <td><?=$std_row['id'];?></td>
                    <td><?=$std_row['name'];?></td>
                    <td><?=$std_row['roll'];?></td>
                    <td><?=$std_row['class'];?></td>
                    <td><?=$std_row['city'];?></td>
                    <td><?=$std_row['parents_contac'];?></td>
                    <td><img style="width:100px;" src="std_img/<?=$std_row['photo'];?>"></td>
                </tr>
                <?php }?>
                
            </tbody>
        </table>
        </div>
      </div>