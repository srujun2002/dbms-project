<?php 
 require_once("db_connection.php");

$teacher_id=$_POST["teacher_id"];
$teacher_name=$_POST["teacher_name"];
$department=$_POST["department"];
$teacher_phno=$_POST["teacher_phno"];
$teacher_address=$_POST["teacher_address"];


if($teacher_id&&$teacher_name&&$department&&$teacher_phno&&$teacher_address){


$con=create_connection();
 $query = "INSERT INTO `teacher_detailes` (`teacher_id`, `teacher_name`, `department`, `teacher_phno`, `teacher_address`) 
 VALUES ('$teacher_id', '$teacher_name', '$department', '$teacher_phno', '$teacher_address');";
 if(mysqli_query($con, $query)){
    echo"insertion succsessfull";
     }
else{
    echo"insertion faild";
    }
}else{
    echo" enter all the field";

}



?>