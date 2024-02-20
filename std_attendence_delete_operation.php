<?php 
 require_once("db_connection.php");

$student_id=$_POST["student_id"];

if($student_id&&$student_id){


$con=create_connection();
 $query = "DELETE FROM `attendence` WHERE student_id=$student_id";
 if(mysqli_query($con, $query)){
    echo"deletion sucessfull";
 }
}else
         echo"deletion is unsucessful"
    

?>