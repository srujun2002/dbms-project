<?php 
 require_once("db_connection.php");

 $std_id=$_POST["student_id"];
 $date=$_POST["date"];
 $subject_id=$_POST["sub_id"];
 $day=$_POST["day"];
 $status=$_POST["status"];
 
 

 if($std_id&&$std_id){
   $con=create_connection();
   $query ="UPDATE `attendence` SET `date`='$date' WHERE student_id=$std_id;";
   if(mysqli_query($con, $query)){
      echo"update succsessfull";
       }
        else{
      echo"update faild";
      }
  }
  if($std_id&&$std_id){
     $con=create_connection();
     $query ="UPDATE `attendence` SET`sub_id`='$subject_id' WHERE student_id=$std_id;";
     if(mysqli_query($con, $query)){
        echo"update succsessfull";
         }
          else{
        echo"update faild";
        }
    }
    if($std_id&&$std_id){
     $con=create_connection();
     $query ="UPDATE `attendence` SET `day`='$day' WHERE student_id=$subject_id;";
     if(mysqli_query($con, $query)){
        echo"update succsessfull";
         }
          else{
        echo"update faild";
        }
    }
    if($std_id&&$std_id){
      $con=create_connection();
      $query ="UPDATE `attendence` SET `status`='$status' WHERE student_id=$subject_id;";
      if(mysqli_query($con, $query)){
         echo"update succsessfull";
          }
           else{
         echo"update faild";
         }
     }
     
    ?>