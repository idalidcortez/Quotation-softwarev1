<?php

include 'connect.php';
if(isset($_POST['submit'])){
   $sp_name=$_POST['sp_name'];
   $sp_last_name=$_POST['sp_last_name'];

   $sql="insert into `salespeople` (sp_name, sp_last_name) 
   values ('$sp_name', '$sp_last_name')";
   $result=mysqli_query($con,$sql);
   if($result){
    //echo "Data inserted successfully";
    header('location:index_salespeople.php');
   }else{
     die(mysqli_error($con));
   }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="index_products.css">

    <title>Add salesperson</title>
  </head>


          <div class= "margin">
        <div class="box-part text-center">
      
      <div class= "image">
      
       <a href="index_salespeople.php">
        
         <img src="back3.png" alt="Button Image" style="position: absolute; top: 170px; left: 320px;">
       
      </a>

    </div>

    <br><br><br><br>

      <figure class="text-center"> <h1>Add to list of team members</h1><h2>Salespeople</h2> 

    </div>

    <body>
    <div class= "container my-5">
    
    <form method= "post">
  
  <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control" placeholder="Enter salesperson's name" name= "sp_name" autocomplete="off">
    
   </div>

 <div class="form-group">
    <label >Last name</label>
    <input type="text" class="form-control" placeholder="Enter salesperson's last name" name= "sp_last_name" autocomplete="on">
  
  <div>

    <br>
  </div>

<div class="box-part text-center" >
  <button type="submit" class="my-button" name= "submit">Submit</button>
</form>

    </div>

    <br>

  </body>
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
</html>