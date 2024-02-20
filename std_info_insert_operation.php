<?php 
 require_once("db_connection.php");

$student_id=$_POST["student_id"];
$std_name=$_POST["std_name"];
$DOB=$_POST["DOB"];
$Gender=$_POST["Gender"];
$Address=$_POST["Address"];
$Parent_name=$_POST["Parent_name"];
$ph=$_POST["ph"];

if($student_id&&$std_name&&$DOB&&$Gender&&$Address&&$Parent_name&&$ph){


$con=create_connection();
 $query = "INSERT INTO `std_info` (`stud_name`, `stud_id`, `dob`, `gender`, `std_address`, `par_name`, `par_phno`) 
 VALUES ('$std_name', '$student_id', '$DOB', '$Gender', '$Address', '$Parent_name', '$ph');";
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