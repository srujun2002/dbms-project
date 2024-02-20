<?php 
 require_once("db_connection.php");

$sub_id=$_POST["sub_id"];
$sub_name=$_POST["sub_name"];
$min_marks=$_POST["min_marks"];
$max_marks=$_POST["max_marks"];




$con=create_connection();
 $query ="INSERT INTO `subject` (`sub_name`, `min_marks`, `max_marks`, `sub_id`) 
 VALUES ('$sub_name', '$min_marks', '$max_marks', '$sub_id'); ";
 if(mysqli_query($con, $query)){
    echo"insertion succsessfull";
     }
else{
    echo"insertion faild";
 }




?>