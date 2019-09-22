<?php 
  include_once 'config.php';

  $id = $_GET['id'];
  //echo $id;

  $sql = " SELECT * FROM students WHERE id = '$id'";
  $query = mysqli_query($conn,$sql);
  //print_r ($query);
  $result = mysqli_fetch_assoc($query);
  //print_r($result);

  if(isset($_POST['update'])){
      // echo '<pre>';
      //   print_r($_POST);
      //   print_r($_FILES);
      $std_name = $_POST['name'];
      $std_roll = $_POST['roll'];
      $std_city = $_POST['city'];
      $std_contact = $_POST['contact'];
      $std_class = $_POST['class'];

      
      
      $std_photo =explode('.', $_FILES['file_upload']['name']);
      // echo $std_photo;
      // print_r ($std_photo);
      $std_photo_ex = end($std_photo);
      //echo $std_photo_ex; 
      $std_photo_name =  $std_name.uniqid().'.'.$std_photo_ex;

      $sql="UPDATE students SET name ='$std_name', roll ='$std_roll', class ='$std_class', city ='$std_city', parents_contac ='$std_contact', photo ='$std_photo_name' WHERE id = '$id'";
      
      $query = mysqli_query($conn,$sql);
      if($query){
        $tmp_name = $_FILES[file_upload][tmp_name];
        move_uploaded_file($tmp_name,'std_img/'. $std_photo_name);
       
        header ('location:index.php?page=all_student');
      }else{
        echo "no";
      }
    
     
    }
?>
<h1 class="text-primary"><i class="fa fa-pencil-square-o"></i>UPDATE STUDENT <small>UPDATE STUDENT </small></h1>
          <ol class="breadcrumb">
          <li><a href="index.php?page=dashboard"><i class="fa fa-dashboard"></i> Dashbord</a></li>
          <li><a href="index.php?page=all_student"><i class="fa fa-users"></i> ALL STUDENTS</a></li>
            <li class="active"><i class="fa fa-pencil-square-o"></i>UPDATE STUDENT</li>

        </ol>

   
<div class="row">
    <div class="col-sm-6">
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="name">Student name</label>
        <input type = "text" name="name" class="form-control" placeholder="enter your name" id="name" value="<?=$result['name'];?>">
      </div>
       <div class="form-group">
      <label for="roll">Student-Roll:</label>
      <input type="text" class="form-control" id="roll" placeholder="Enter roll" name="roll" pattern="[0-9]{6}" value="<?=$result['roll'];?>">
      
      </div>
    <div class="form-group">
      <label for="city">City:</label>
      <input type="text" class="form-control" id="city" placeholder="Enter city" name="city" value="<?=$result['city'];?>">
      
    </div>
    <div class="form-group">
      <label for="contact">contact:</label>
      <input type="text" class="form-control" id="contact" placeholder=" 01********" name="contact" pattern="01[1|5|6|7|8|9][0-9]{8}" value="<?=$result['parents_contac'];?>">
    </div>
    <div class="form-group">
      <label for="class">class:</label>
      <select id="class" class="form-control" name="class">
        <option value="">Select</option>
        <option <?= $result['class']=='1st'?'selected""':'';?> value="1st">class-1</option>
        <option <?= $result['class']=='2nd'?'selected""':'';?> value="2nd">class-2</option>
        <option <?= $result['class']=='3rd'?'selected""':'';?> value="3rd">class-3</option>
        <option <?= $result['class']=='4th'?'selected""':'';?> value="4th">class-4</option>
        <option <?= $result['class']=='5th'?'selected""':'';?> value="5th">class-5</option>
      </select>

    
      <label for="file_upload">photo:</label>
      <input type="file" name="file_upload" id="file_upload" value="<?=$result['file_upload'];?>">
      <br>
      <button type="submit" name="update" class="btn btn-primary"> UPDATE</button>
  </form>
    </div>
</div>