<h1 class="text-primary"><i class="fa fa-dashboard"></i>All user <small>All user</small></h1>
    <ol class="breadcrumb">

          <li><a href="index.php?page=dashboard"><i class="fa fa-dashboard"></i> Dashbord</a></li>
            <li class="active"><i class="fa fa-users"></i>All user</li>
        </ol>
        <h3>ALL STUDENTS</h3>
        <div class="table-responsive">
        <table id="data" class="table table-bordered table-hover table-striped">
            <thead>
                <tr>

                    <th>ID</th>
                    <th>NAME</th>
                    <th>Email</th>
                    <th>user name</th>
                   
                    <th>photo</th>
                    <th>status</th>
                   
                    
                </tr>
            </thead>
            <tbody>
            <?php
                include_once "config.php";

                $sql = " SELECT * FROM user";
                $query = mysqli_query($conn,$sql);
                //print_r($query);
                while($std_row=mysqli_fetch_assoc($query)){
                    //print_r($std_row);
               
            
            ?>
                <tr>
                    <td><?=$std_row['id'];?></td>
                    <td><?=ucwords($std_row['name']);?></td>
                    <td><?=$std_row['email'];?></td>
                    <td><?=$std_row['username'];?></td>
                    
                    
                    <td><img style="width:100px;" src="std_img/<?=$std_row['photo'];?>"></td>
                    <td><?=$std_row['status'];?></td>
                    
                </tr>
                <?php }?>
                
            </tbody>
        </table>
        </div>