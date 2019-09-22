<?php 
  include_once 'config.php';
?>
<h1 class="text-primary"><i class="fa fa-user-plus"></i>Add student <small>Add new student </small></h1>
          <ol class="breadcrumb">
          <li><a href="index.php?page=dashboard"><i class="fa fa-dashboard"></i> Dashbord</a></li>
            <li class="active"><i class="fa fa-user-plus"></i>Add student</li>

        </ol>

<?php
    if(isset($_POST['submit'])){
      // echo '<pre>';
      //   print_r($_POST);
      //   print_r($_FILES);
      $std_name = $_POST['name'];
      $std_roll = $_POST['roll'];
      $std_city = $_POST['city'];
      $std_contact = $_POST['contact'];
      $std_class = $_POST['class'];

      $time = time();
      
      $std_photo =explode('.', $_FILES['file_upload']['name']);
      // echo $std_photo;
      // print_r ($std_photo);
      $std_photo_ex = end($std_photo);
      //echo $std_photo_ex; 
      $std_photo_name =  $std_name.uniqid().'.'.$std_photo_ex;

      $sql="INSERT INTO students(name, roll, class, city, parents_contac, photo) VALUES ('$std_name','$std_roll','$std_class','$std_city','$std_contact','$std_photo_name')";
      
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
<div class="row">
    <div class="col-sm-6">
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="name">Student name</label>
        <input type = "text" name="name" class="form-control" placeholder="enter your name" id="name" required>
      </div>
       <div class="form-group">
      <label for="roll">Student-Roll:</label>
      <input type="text" class="form-control" id="roll" placeholder="Enter roll" name="roll" pattern="[0-9]{6}" required>
      
      </div>
    <div class="form-group">
      <label for="city">City:</label>
      <input type="text" class="form-control" id="city" placeholder="Enter city" name="city" required>
      
    </div>
    <div class="form-group">
      <label for="contact">contact:</label>
      <input type="text" class="form-control" id="contact" placeholder=" 01********" name="contact" pattern="01[1|5|6|7|8|9][0-9]{8}" required>
    </div>
    <div class="form-group">
      <label for="class">class:</label>
      <select id="class" class="form-control" name="class">
        <option value="">Select</option>
        <option value="1st">class-1</option>
        <option value="2nd">class-2</option>
        <option value="3rd">class-3</option>
        <option value="4th">class-4</option>
        <option value="5th">class-5</option>
      </select>

    
      <label for="file_upload">photo:</label>
      <input type="file" name="file_upload" id="file_upload" required>
      <br>
      <button type="submit" name="submit" class="btn btn-primary">add student</button>
  </form>
    </div>
</div>