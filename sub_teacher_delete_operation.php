<?php 
 require_once("db_connection.php");

 $teacher_id=$_POST["teacher_id"];
 
 
 if($teacher_id){
 

$con1=create_connection();
 $query ="DELETE FROM `sub_teacher` WHERE `teacher_id` ='$teacher_id' ;";
 if(mysqli_query($con1, $query)){
    echo"deletion succsessfull";
     }
else{
    echo"deletion faild";
    }

 }
 

?>