<?php

include 'connect.php';

$c_email = '';

if(isset($_POST['submit'])){
   $c_name=$_POST['c_name'];
   $c_last_name=$_POST['c_last_name'];
   $c_phone_number=$_POST['c_phone_number'];
   $c_email=$_POST['c_email'];

   $sql="insert into `clients` (c_name, c_last_name, c_phone_number, c_email) 
   values ('$c_name', '$c_last_name', '$c_phone_number', '$c_email')";
   $result=mysqli_query($con,$sql);
   if($result){
    //echo "Data inserted successfully";
    header('location:index_clients.php');
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

    <title>Add client</title>
  </head>


          <div class= "margin">
        <div class="box-part text-center">
      
      <div class= "image">
      
       <a href="index_clients.php">
        
         <img src="back3.png" alt="Button Image" style="position: absolute; top: 149px; left: 450px;">
       
      </a>
     
     <br>
     <br>
     <br>

    </div>

      <figure class="text-center"> <h1>Add to client list</h1><h2></h2> 

    </div>

    <body>
    <div class= "container my-5">
    
    <form method= "post">
  
  <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control" placeholder="Enter client's name" name= "c_name" autocomplete="off">
    
   </div>

 <div class="form-group">
    <label >Last name</label>
    <input type="text" class="form-control" placeholder="Enter client's last name" name= "c_last_name" autocomplete="off">
    
  </div>

  <div class="form-group">
    <label >Phone number</label>
    <input type="varchar" class="form-control" placeholder="Enter client's phone number" name= "c_phone_number" autocomplete="off">
    
  </div>

<div class="form-group">
  <label>Email</label>
  <input type="text" class="form-control" placeholder="Enter client's email address" name="c_email" autocomplete="off" value="<?php echo nl2br($c_email); ?>">
</div>



  </div>

<div class="box-part text-center" >
  <button type="submit" class="my-button" name= "submit">Submit</button>
</form>

    </div>

    <br>

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

</html>