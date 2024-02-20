<?php 
 require_once("db_connection.php");

 $day=$_POST["day"];
 $start_time=$_POST["start_time"];
 $end_time=$_POST["end_time"];
 $sub_id=$_POST["sub_id"];
 $acad_year=$_POST["acad_year"];
 

 
  if($day&&$sub_id){
     $con=create_connection();
     $query ="UPDATE `time_table` SET`day`='$day' WHERE sub_id=$sub_id;";
     if(mysqli_query($con, $query)){
        echo"update succsessfull";
         }
          else{
        echo"update succsessfull";
        }
    }
    if($start_time&&$sub_id){
     $con=create_connection();
     $query ="UPDATE `time_table` SET start_time='$start_time' WHERE sub_id=$sub_id;";
     if(mysqli_query($con, $query)){
        echo"update succsessfull ";
         }
          else{
        echo"update succsessfull";
        }
    }
    if($end_time&&$sub_id){
      $con=create_connection();
      $query ="UPDATE `time_table` SET end_time='$end_time' WHERE sub_id=$sub_id;";
      if(mysqli_query($con, $query)){
         echo"update succsessfull";
          }
           else{
         echo"update faild";
         }
     }
     if($acad_year&&$sub_id){
      $con=create_connection();
      $query ="UPDATE `time_table` SET `acad_year`='$acad_year' WHERE sub_id=$sub_id;";
      if(mysqli_query($con, $query)){
         echo"update succsessfull";
          }
           else{
         echo"update succsessfull";
         }
     } 
    ?>