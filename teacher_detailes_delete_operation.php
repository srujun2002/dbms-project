<?php 
 require_once("db_connection.php");

 $teacher_id=$_POST["teacher_id"];
 
 
 if($teacher_id){
 



$con=create_connection();
 $query = "DELETE from  teacher_detailes
  where teacher_id ='$teacher_id';";
 if(mysqli_query($con, $query)){
    echo"deletion succsessfull";
     }
else{
    echo"deletion faild";
    }

 }
 

?>