<?php 
 require_once("db_connection.php");

 $stud_id=$_POST["stud_id"];
 
 
 if($stud_id){
 



$con=create_connection();
 $query = "CALL proc('$stud_id');";
 if(mysqli_query($con, $query)){
    echo"deletion succsessfull";
     }
else{
    echo"deletion faild";
    }

 }
 

?>