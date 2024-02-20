<?php 
 require_once("db_connection.php");

$teacher_id=$_POST["teacher_id"];
$teacher_name=$_POST["teacher_name"];
$department=$_POST["department"];
$teacher_phno=$_POST["teacher_phno"];
$teacher_address=$_POST["teacher_address"];


if($teacher_name&&$teacher_id){
 $con=create_connection();
 $query = "UPDATE teacher_detailes SET teacher_name = '$teacher_name' WHERE teacher_id = '$teacher_id' ;";
 if(mysqli_query($con, $query)){
    echo"update succsessfull";
     }
      else{
    echo"update faild";
    }
}
 if($department&&$teacher_id){
      $con1=create_connection();
       $query1 = "UPDATE teacher_detailes SET department = '$department' WHERE teacher_id = '$teacher_id'; ";
       if(mysqli_query($con1, $query1)){
         echo"update succsessfull";
          }
           else{
        echo"update faild";
        }
 }
  if($teacher_phno&&$teacher_id){
        $con2=create_connection();
         $query2 = "UPDATE teacher_detailes SET teacher_phno = '$teacher_phno' WHERE teacher_id = '$teacher_id'; ";
         if(mysqli_query($con2, $query2)){
            echo"update succsessfull";
             }
            else{
            echo"update faild";
            }
        } if($teacher_address&&$teacher_id){
                $con=create_connection();
                 $query = "UPDATE teacher_detailes SET teacher_address = '$teacher_address' WHERE teacher_id = '$teacher_id'; ";
                 if(mysqli_query($con, $query)){
                    echo"update succsessfull";
                     }
                      else{
                    echo"update faild";
                    }
                 }                          

?>