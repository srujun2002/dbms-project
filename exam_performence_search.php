
<?php

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2, minimum-scale=1">
</head>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Latest compiled Bootstrap JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<body>
<div class="pt-5">  
  <h1 class="text-center">EXAM PERFORMENCE DETAILES </h1>  
<div class="container">  
                <div class="row">  
                    <div class="col-md-5 mx-auto">  
                        <div class="card card-body">  
                      <form id="submitForm" action="exam_performence_search.php" method="post" data-parsley-validate="" data-parsley-errors-messages-disabled="true" novalidate="" _lpchecked="1">  
                 
                      <div class="form-group required">  
              <lSabel for="stud_id"> student_id </lSabel>  
             <input type="number" class="form-control text-lowercase" id="stud_id" required="" name="search" value="">  
               </div>   
              
         <div class="form-group pt-1">  
      <button class="btn btn-primary btn-block" name="read" type="submit"> Read </button>  
                  </div>  
                  
               </form>                
                       </div>  
                    </div>  
                </div>  
            </div>  
</div>  
<br>

<table class="table">
	<thead>
		<tr>
			<th> Stud_id </th>
			<th> sub_id </th>
			<th> test1</th>
      <th> test2 </th>
			<th> test3 </th>
      <th> total </th>
      <th> average </th>
			

		</tr>
	</thead> 
  <?php

  if(isset($_POST['read'])){
   require_once("db_connection.php");
    $search_value=$_POST['search'];
  $con=create_connection();
   $query="select *from exam_performence where stud_id like '%$search_value%'";
  $result= mysqli_query($con, $query);
   

  
   while($row=mysqli_fetch_array($result)){
     ?>
     	<tbody>
		<tr>
   
     			<td> <?php echo $row['stud_id']; ?> </td>
			<td> <?php echo $row['sub_id']; ?></td>
			<td><?php echo $row['test1']; ?></td>
			<td> <?php echo $row['test2']; ?> </td>
			<td> <?php echo $row['test3'] ;?></td>
      <td> <?php echo $row['total'] ;?></td>
      <td> <?php echo $row['average'] ;?></td>
		</tr> 
		
    <?php
   }
    }
      ?>
	</tbody>
</table>

</body>
</html>
