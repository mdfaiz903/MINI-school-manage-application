        <h1 class="text-primary">
        <i class="fa fa-dashboard"></i>Dashbord <small>ALL STUDENTS</small></h1>
          <ol class="breadcrumb">

          <li><a href="index.php?page=dashboard"><i class="fa fa-dashboard"></i> Dashbord</a></li>
            <li class="active"><i class="fa fa-users"></i>ALL STUDENTS</li>
        </ol>
        <h3>ALL STUDENTS</h3>
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
                    <th>ACTION</th>
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
                    <td><?=ucwords($std_row['name']);?></td>
                    <td><?=$std_row['roll'];?></td>
                    <td><?=$std_row['class'];?></td>
                    <td><?=$std_row['city'];?></td>
                    <td><?=$std_row['parents_contac'];?></td>
                    <td><img style="width:100px;" src="std_img/<?=$std_row['photo'];?>"></td>
                     <td>
                     &nbsp<a href="index.php?page=std_update&id=<?=$std_row['id'];?>" class="btn btn-warning " >Edit</a><br><br>
                     <a href="delete_std.php?id=<?=base64_encode($std_row['id']);?>" class="btn btn-danger " >Delete</a>
                     </td>
                </tr>
                <?php }?>
                
            </tbody>
        </table>
        </div>