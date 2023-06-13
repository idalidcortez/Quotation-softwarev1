<?php

include 'connect.php';
$id=$_GET['updateid'];
$sql="Select * from `clients` where c_id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$c_id=$row['c_id'];
   $c_name=$row['c_name'];
   $c_last_name=$row['c_last_name'];
   $c_phone_number=$row['c_phone_number'];
   $c_email=$row['c_email'];

if(isset($_POST['submit'])){
   $c_name=$_POST['c_name'];
   $c_last_name=$_POST['c_last_name'];
   $c_phone_number=$_POST['c_phone_number'];
   $c_email=$_POST['c_email'];

   $sql="update `clients` set c_id=$id,c_name='$c_name',
   c_last_name='$c_last_name',c_phone_number='$c_phone_number',c_email='$c_email'
   where c_id=$id";
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

    <title>Clients</title>
  </head>



          <div class= "margin">
        <div class="box-part text-center" >
      
      <div class= "image">
      
       <a href="index_clients.php">
        
         <img src="back3.png" alt="Button Image" style="position: absolute; top: 170px; left: 400px;">
       
      </a>
    


    </div>


<br>
<br>
<br>
<br>
     <figure class="text-center"> <h1>Update list of clients </h1><h2></h2>
     


    </div>

  
    <body>
    <div class= "container my-5">
    
    <form method= "post">
  
  <div class="form-group">
  <label>Name</label>
  <input type="text" class="form-control" placeholder="Enter client's name" name="c_name" autocomplete="off"
    value="<?php echo nl2br($c_name); ?>">

    
   </div>

 <div class="form-group">
    <label >Last name</label>
    <input type="text" class="form-control" placeholder="Enter client's last name" name= "c_last_name" autocomplete="off" value="<?php echo nl2br($c_last_name); ?>">
    
  </div>

  <div class="form-group">
    <label >Phone number</label>
    <input type="varchar" class="form-control" placeholder="Enter client's phone number" name= "c_phone_number" autocomplete="off" value="<?php echo nl2br($c_phone_number); ?>">
    
  </div>

<div class="form-group">
  <label>Email</label>
  <input type="email" class="form-control" placeholder="Enter client's email" name="c_email" autocomplete="off" value="<?php echo $c_email; ?>">
</div>



<br>
<div class="box-part text-center" >
  <button type="submit" class="my-button" name= "submit">Update</button>
</form>

    </div>

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
  
  </body>
</html>