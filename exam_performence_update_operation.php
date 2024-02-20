<?php 
 require_once("db_connection.php");

$stud_id=$_POST["stud_id"];
$sub_id=$_POST["sub_id"];
$test1=$_POST["test1"];
$test2=$_POST["test2"];
$test3=$_POST["test3"];

if($sub_id&&$stud_id){
 $con=create_connection();
 $query = "UPDATE `exam_performence` SET `sub_id`='$sub_id' WHERE stud_id = '$stud_id' ;";
 if(mysqli_query($con, $query)){
    echo"update succsessfull";
     }
      else{
    echo"update faild";
    }
}
 if($test1&&$stud_id){
      $con1=create_connection();
       $query1 = "UPDATE exam_performence SET test1 = '$test1' WHERE stud_id = '$stud_id'; ";
       if(mysqli_query($con1, $query1)){
         echo"update succsessfull";
          }
           else{
        echo"update faild";
        }
 }
  if($test2&&$stud_id){
        $con2=create_connection();
         $query2 = "UPDATE exam_performence SET test2 = '$test2' WHERE stud_id = '$stud_id'; ";
         if(mysqli_query($con2, $query2)){
            echo"update succsessfull";
             }
            else{
            echo"update faild";
            }
        } if($test3&&$stud_id){
                $con=create_connection();
                 $query = "UPDATE exam_performence SET test3 = '$test3' WHERE stud_id = '$stud_id'; ";
                 if(mysqli_query($con, $query)){
                    echo"update succsessfull";
                     }
                      else{
                    echo"update faild";
                    }
                 } 
                                           

?>