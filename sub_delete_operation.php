<?php 
 require_once("db_connection.php");

 $subject_id=$_POST["sub_id"];
 
 
 if($subject_id){
 

$con1=create_connection();
 $query ="DELETE FROM `subject` WHERE `sub_id` ='$subject_id' ;";
 if(mysqli_query($con1, $query)){
    echo"deletion succsessfull";
     }
else{
    echo"deletion faild";
    }

 }
 

?>