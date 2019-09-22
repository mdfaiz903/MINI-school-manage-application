<?php
    include_once 'admin/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>sms</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <br>
  <a href="admin/login.php"class="btn btn-primary float-right">Login</a> <br><br>


  <h1 class="text-center"> wellcome to students management system</h1>

    <div class="row">
    <div class="col-md-6">
     <form action="" method="POST">
        <table class="table table-bordered ">
            <tr>
                <td colspan="2"><label>Student information:</label></td>
                
            </tr>
            
            <tr>
                <td><label for="choose">Chose class:</label></td>
                <td>
                    <select class="form-control" id="choose" name="choose">
                        <option value="">Select</option>
                        <option value="1st">class-1</option>
                        <option value="2nd">class-2</option>
                        <option value="3rd">class-3</option>
                        <option value="4th">class-4</option>
                        <option value="5th">class-5</option>
                        
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="roll">Roll</label></td>
                <td><input class="form-control" type="text" name="roll" pattren="[0-9]{6}"> </td>
            </tr>
            <tr>
                <td class="text-center" colspan="2">
                <input class="btn btn-success" type="submit" value="show-data" name="submit">
                 </td>
               
            </tr>
        </table>
    </form>    
        </div>
<!--  -->
    <?php
        if(isset($_POST['submit'])){
            //print_r ($_POST);
            $choose = $_POST['choose'];
            $roll = $_POST['roll'];
            //echo $roll;
            $result = mysqli_query($conn,"SELECT * FROM students  WHERE class='$choose'AND roll='$roll'");
            
           
            if(mysqli_num_rows($result)>0){
                //echo "yes";
                $data = mysqli_fetch_assoc($result);
                //print_r ($data);
    ?>
                    <div class="col-md-6">
            <table class="table table-bordered table-hover">
            <tr >
                <td rowspan="5">
                    <img class="img-thumbnail" style="width:150px" src="admin/std_img/<?=$data['photo'];?>">
                </td>
                <td>Name</td>
                <td><?=$data['name'];?></td>
               
            </tr>
            <tr>
                <td>Roll</td>
                <td><?=$data['roll'];?></td>             
            </tr>
            <tr>
                <td>Class</td>
                <td><?=$data['class'];?></td>
                
               
            </tr>
            <tr>
                <td>City</td>
                <td><?=$data['city'];?></td>
               
               
            </tr>
            <tr>
                <td>contact No</td>
                <td><?=$data['parents_contac'];?></td>
               
               
            </tr>
        </table>
        </div>
    <?php
            }
            else
            {
    ?>
            <script type="text/javascript">
            alert("Data not found");
            </script>
                echo "no";
    <?php }
        }
    ?>
        
            
  
  
       
    
<!--  -->
    </div>



 </div>
</body>
</html>