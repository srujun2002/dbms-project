<! DOCTYPE html>  
<html lang="en" >  
<head>  
  <meta charset="UTF-8">  
  <title> Bootstrap 4 Login Form Example  
</title>  
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">  
</head>  
<style>  
body {  
  background: #28a745 !important;  
  font-family: 'Muli', sans-serif;  
}  
h1 {  
  color: #fff;  
  padding-bottom: 2rem;  
  font-weight: bold;  
}  
a {  
  color: #333;  
}  
a:hover {  
  color: #E8D426;  
  text-decoration: none;  
}  
.form-control:focus {  
    color: #000;  
    background-color: #fff;  
    border: 2px solid #E8D426;  
    outline: 0;  
    box-shadow: none;  
}  
.btn {  
  background: #28a745;  
  border: #E8D426;  
}  
.btn:hover {  
  background: #28a745;  
  border: #E8D426;  
}  
</style>  
<body>  
<div class="pt-5">  
  <h1 class="text-center">UPDATE DETAILES </h1>  
<div class="container">  
                <div class="row">  
                    <div class="col-md-5 mx-auto">  
                        <div class="card card-body">  
                      <form id="submitForm" action="sub_teacher_update_operation.php" method="post" data-parsley-validate="" data-parsley-errors-messages-disabled="true" novalidate="" _lpchecked="1">  
                   <div class="form-group required">  
              <lSabel for="sub_id"> sub_id </lSabel>  
             <input type="number" class="form-control text-lowercase" id="sub_id" required="" name="sub_id" value="">  
               </div>   
               
               
       <div class="form-group required">  
    <label class="d-flex flex-row align-items-center" for="teacher_id">teacher_id   
     </label>  
<input type="number" class="form-control" required="" id="teacher_id" name="teacher_id" value="">  
       </div> 
       
       
       <div class="form-group required">  
    <label class="d-flex flex-row align-items-center" for="class">class   
     </label>  
<input type="number" class="form-control" required="" id="class" name="class" value="">  
       </div>  
 
       <div class="form-group required">  
    <label class="d-flex flex-row align-items-center" for="teacher_name">teacher_name   
     </label>  
<input type="text" teacher_name="form-control" required="" id="teacher_name" name="teacher_name" value="">  
       </div>  
       

         <div class="form-group pt-1">  
      <button class="btn btn-primary btn-block" type="submit"> update </button>  
                  </div>  
                  
               </form>   
                        </div>  
                    </div>  
                </div>  
            </div>  
</div>  
</body>  
</html>  
