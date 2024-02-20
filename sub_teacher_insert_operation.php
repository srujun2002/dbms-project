<?php 
 require_once("db_connection.php");

$sub_id=$_POST["sub_id"];
$teacher_id=$_POST["teacher_id"];
$class=$_POST["class"];
$teacher_name=$_POST["teacher_name"];




$con=create_connection();
 $query ="INSERT INTO `sub_teacher` (`sub_id`, `teacher_id`, `class`, `teacher_name`)
 VALUES ('$sub_id','$teacher_id','$class','$teacher_name'); ";
 if(mysqli_query($con, $query)){
    echo"insertion succsessfull";
     }
else{
    echo"insertion faild";
 }




?>