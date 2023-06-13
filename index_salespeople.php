<?php 

include 'connect.php'; ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salespeople index</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="index_products.css">
 
     <div class= "margin">
        <div class="box-part text-center" >
      
      <div class= "image">

    </div>

    <br>
    <br>
    <br>

      <figure class="text-center"> <h1>List of team members</h1><h2>Salespeople</h2> 
      </figure>

    </div>

    <body>

      <div class="container">

        <div class="box-part text-center">

        <button class="my-button my-2" align-items="center"> <a href= "add_salesperson.php" class= text-light> Add salesperson </a></button>
      
  
        </div>

        <br>

    <table class="container text-center">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Last name</th>
      <th scope="col">Operations</th>

    </tr>
  </thead>
  <tbody>

<?php
 
 $sql="Select * from `salespeople`";
 $result=mysqli_query($con,$sql);
 if($result){
  while($row=mysqli_fetch_assoc($result)){
   $sp_id=$row['sp_id'];
   $sp_name=$row['sp_name'];
   $sp_last_name=$row['sp_last_name'];

   echo '<tr>

      <th scope="row">'.$sp_id.'</th>
      <td>'.$sp_name.'</td>
      <td>'.$sp_last_name.'</td>
      <td> <button class="btn btn-primary"> <a href="update_salesperson.php? updateid='.$sp_id.'" class= "text-light">Update</a></button>
      <button class="btn btn-danger"> <a href="delete_salesperson.php? deleteid='.$sp_id.'" class= "text-light">Delete</a></button> </td>
      
      </tr>';

  }

 }

?>



  </tbody>
</table> 
      </div>
    </body>

    <div class= "margin">
        <div class="box-part text-center" >
      
      <div class= "image">
      
      <a href="index.php">
        
         <img src="products.png"  width="90" height="80" alt="Button Image" style="position: absolute; top: 15px; left: 340px;" > <h3 style="position: absolute; top: 95px; left: 345px;" > Products </h3>
       
      </a>

       <a href="index_clients.php">
        
         <img src="clients2.png"  width="90" height="80" alt="Button Image" style="position: absolute; top: 15px; left: 660px;"> <h3 style="position: absolute; top: 95px; left: 675px;" > Clients </h3>
       
       
      </a>

       <a href="index_salespeople.php">
        
         <img src="vendor3.png"  width="90" height="80" alt="Button Image" style="position: absolute; top: 15px; left: 985px;"> <h3 style="position: absolute; top: 95px; left: 979px;" > Salespeople </h3>
    
       
      </a>

       </a>

<a href="quotation_index.php">
        
         <img src="quote2.png"  width="90" height="80" alt="Button Image" style="position: absolute; top: 180px; left: 975px;"><h3 style="position: absolute; top: 260px; left: 979px;" > Quotation </h3>
    
      </a>
 
  </html>