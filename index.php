<?php 

$username=$_POST["username"];
$password=$_POST["password"];
$Username="root";
$Password="root";
  
if($username==$Username && $Password==$password){
header("Location:dashbord.html");
}else{
    header("Location:index.html");
}


?>