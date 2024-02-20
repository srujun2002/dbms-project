<?php
function create_connection(){
// Create connection
$con=mysqli_connect('localhost','root','','school management'); 

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
return $con;
}

?>