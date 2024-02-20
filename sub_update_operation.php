<?php 
 require_once("db_connection.php");

$subject_id=$_POST["sub_id"];
$subject_name=$_POST["sub_name"];
$minimum_marks=$_POST["min_marks"];
$maximum_marks=$_POST["max_marks"];



if($subject_name&&$subject_id){
 $con=create_connection();
 $query = "UPDATE `subject` SET `sub_name`='$subject_name' WHERE sub_id='$subject_id';";
 if(mysqli_query($con, $query)){
    echo"update succsessfull";
     }
      else{
    echo"update faild";
    }
}
if($minimum_marks&&$subject_id){
   $con1=create_connection();
    $query1 = "UPDATE `subject` SET `min_marks`='$minimum_marks' WHERE sub_id='$subject_id'; ";
    if(mysqli_query($con1, $query1)){
      echo"update succsessfull";
       }
        else{
     echo"update faild";
     }

     
   }  if($maximum_marks&&$subject_id){
             $con=create_connection();
                 $query = "UPDATE `subject` SET `max_marks`=' $maximum_marks' WHERE sub_id='$subject_id'; ";
                  if(mysqli_query($con, $query)){
                     echo"update succsessfull";
                             }
                            else{
                               echo"update faild";
                                }
                      }                    

?>
 
 
 
 