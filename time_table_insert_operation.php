<?php 
 require_once("db_connection.php");

$day=$_POST["day"];
$start_time=$_POST["start_time"];
$end_time=$_POST["end_time"];
$sub_id=$_POST["sub_id"];
$acad_year=$_POST["acad_year"];


if($day&&$start_time&&$end_time&&$sub_id&&$acad_year){


$con=create_connection();

 $query = "INSERT INTO `time_table`(`day`, `start_time`, `end_time`, `sub_id`, `acad_year`)
  VALUES ('$day','$start_time','$end_time','$sub_id','$acad_year')";

 if(mysqli_query($con, $query)){

    echo"insertion succsessfull";
     }
else{
    echo"insertion faild";
    }
}



?>