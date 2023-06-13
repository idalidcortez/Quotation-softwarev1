<?php

include 'connect.php';
if(isset($_POST['submit'])){
   $p_name=$_POST['p_name'];
   $p_brand=$_POST['p_brand'];
   $p_description=$_POST['p_description'];
   $p_price=$_POST['p_price'];

   $sql="insert into `products` (p_name, p_brand, p_description, p_price) 
   values ('$p_name', '$p_brand', '$p_description', '$p_price')";
   $result=mysqli_query($con,$sql);
   if($result){
    //echo "Data inserted successfully";
    header('location:index.php');
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

    <title>Add product</title>
  </head>




          <div class= "margin">
        <div class="box-part text-center">
      
      <div class= "image">
      
       <a href="index.php">
        
         <img src="back3.png" alt="Button Image" style="position: absolute; top: 168px; left: 445px;">
       
      </a>
      <br>

    </div>

      <figure class="text-center"> <h1 style="position: absolute; top: 150px; Left: 526px;"></h1><h2 style="position: absolute; top: 200px; Left: 560px;"></h2> 

    </div>

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
    </div>

<figure class="text-center" my-> <h1>Add to inventory</h1><h2>Hair products</h2> 
      </figure>

    <body>
    <div class= "container my-5">
    
    <form method= "post">
  
  <div class="form-group">
    <label >Product name</label>
    <input type="text" class="form-control" placeholder="Enter name of product" name= "p_name" autocomplete="off">
    
   </div>

 <div class="form-group">
    <label >Brand</label>
    <input type="text" class="form-control" placeholder="Enter brand of product" name= "p_brand" autocomplete="on">
    
  </div>

  <div class="form-group">
    <label >Description</label>
    <input type="varchar" class="form-control" placeholder="Enter Description of product" name= "p_description" autocomplete="off">
    
  </div>

 <div class="form-group">
    <label >Price</label>
    <input type="number" class="form-control" placeholder="Enter product's price" name= "p_price" autocomplete="off">
    
  </div>



  </div>

<div class="box-part text-center" >
  <button type="submit" class="my-button" name= "submit">Submit</button>
</form>

    </div>

    <br>

  </body>
</html>