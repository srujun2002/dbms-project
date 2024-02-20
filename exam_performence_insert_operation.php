<?php 
 require_once("db_connection.php");


$stud_id=$_POST["stud_id"];
$sub_id=$_POST["sub_id"];
$test1=$_POST["test1"];
$test2=$_POST["test2"];
$test3=$_POST["test3"];
$sum=$test1+$test2+$test3;
if($stud_id&&$sub_id){


$con=create_connection();
 $query ="INSERT INTO `exam_performence`(`stud_id`, `sub_id`, `test1`, `test2`, `test3`,`total`) 
 VALUES ('$stud_id','$sub_id','$test1','$test2','$test3','$sum');";
 if(mysqli_query($con, $query)){
    echo"insertion succsessfull";
     }
else{
    echo"insertion faild";
 }

}


?>
