<?php
include_once ('config.php');
$std_id = base64_decode($_GET['id']);
//echo ($std_id);
$sql = "DELETE FROM `students` WHERE id='$std_id'";
$query = mysqli_query($conn,$sql);
if($query){
    header('location:index.php?page=all_student');
}else{
    echo "no";
}

?>