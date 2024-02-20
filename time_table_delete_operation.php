<?php 
 require_once("db_connection.php");

$sub_id=$_POST["sub_id"];

if($sub_id){


$con=create_connection();
 $query = "DELETE from  time_table
  where sub_id =$sub_id";
 if(mysqli_query($con, $query)){
    echo"deletion succsessfull";
     }
else{
    echo"deletion faild";
    }


}

?>