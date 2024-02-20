<?php 
 require_once("db_connection.php");

$student_id=$_POST["student_id"];
$date=$_POST["date"];
$sub_id=$_POST["sub_id"];
$day=$_POST["day"];
$status=$_POST["status"];


if($student_id&&$date&&$sub_id&&$day&&$status){


$con=create_connection();
 $query = "INSERT INTO `attendence` (`student_id`, `date`, `sub_id`, `day`, `status`) 
 VALUES ('$student_id', '$date', '$sub_id', '$day', '$status');";
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