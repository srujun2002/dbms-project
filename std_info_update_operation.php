<?php 
 require_once("db_connection.php");

$student_id=$_POST["student_id"];
$std_name=$_POST["std_name"];
$DOB=$_POST["DOB"];
$Gender=$_POST["Gender"];
$Address=$_POST["std_address"];
$Parent_name=$_POST["Parent_name"];
$ph=$_POST["ph"];

if($std_name&&$student_id){
 $con=create_connection();
 $query = "UPDATE std_info SET stud_name = '$std_name' WHERE stud_id = '$student_id' ;";
 if(mysqli_query($con, $query)){
    echo"update succsessfull";
     }
      else{
    echo"update faild";
    }
}
 if($DOB&&$student_id){
      $con1=create_connection();
       $query1 = "UPDATE std_info SET dob = '$DOB' WHERE stud_id = '$student_id'; ";
       if(mysqli_query($con1, $query1)){
         echo"update succsessfull";
          }
           else{
        echo"update faild";
        }
 }
  if($Gender&&$student_id){
        $con2=create_connection();
         $query2 = "UPDATE std_info SET gender = '$Gender' WHERE stud_id = '$student_id'; ";
         if(mysqli_query($con2, $query2)){
            echo"update succsessfull";
             }
            else{
            echo"update faild";
            }
        } if($Address&&$student_id){
                $con=create_connection();
                 $query = "UPDATE std_info SET std_address = '$Address' WHERE stud_id = '$student_id'; ";
                 if(mysqli_query($con, $query)){
                    echo"update succsessfull";
                     }
                      else{
                    echo"update faild";
                    }
                 }  if($Parent_name&&$student_id){
                        $con=create_connection();
                         $query = "UPDATE std_info SET par_name = '$Parent_name' WHERE stud_id =' $student_id'; ";
                         if(mysqli_query($con, $query)){
                            echo"update succsessfull";
                             }
                              else{
                            echo"update faild";
                            }
                        } 
                         if($ph&&$student_id){
                                $con=create_connection();
                                 $query = "UPDATE std_info SET par_phno =' $ph' WHERE stud_id = '$student_id'; ";
                                 if(mysqli_query($con, $query)){
                                    echo"update succsessfull";
                                     }
                                      else{
                                    echo"update faild";
                                    }
                                }                    

?>