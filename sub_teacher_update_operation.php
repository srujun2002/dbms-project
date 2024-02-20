<?php 
 require_once("db_connection.php");

$sub_id=$_POST["sub_id"];
$teacher_id=$_POST["teacher_id"];
$class=$_POST["class"];
$teacher_name=$_POST["teacher_name"];


if($sub_id&&$teacher_id){
 $con=create_connection();
 $query = "UPDATE `sub_teacher` SET `sub_id`='$sub_id' WHERE teacher_id='$teacher_id';";
 if(mysqli_query($con, $query)){
    echo"update succsessfull";
     }
      else{
    echo"update faild";
    }
}
if($class&&$teacher_id){
   $con1=create_connection();
    $query1 = "UPDATE `sub_teacher` SET `class`='$class' WHERE teacher_id='$teacher_id'; ";
    if(mysqli_query($con1, $query1)){
      echo"update succsessfull";
       }
        else{
     echo"update faild";
     }

     
   }  
   if($teacher_name&&$teacher_id){
      $con1=create_connection();
       $query1 = "UPDATE `sub_teacher` SET `teacher_name`='$teacher_name' WHERE teacher_id='$teacher_id'; ";
       if(mysqli_query($con1, $query1)){
         echo"update succsessfull";
          }
           else{
        echo"update faild";
        }
   
        
      }  
?>
 
 
 
 