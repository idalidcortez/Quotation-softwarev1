<?php

include 'connect.php';
$id=$_GET['updateid'];
$sql="Select * from `salespeople` where sp_id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$sp_id=$row['sp_id'];
   $sp_name=$row['sp_name'];
   $sp_last_name=$row['sp_last_name'];


if(isset($_POST['submit'])){
   $sp_name=$_POST['sp_name'];
   $sp_last_name=$_POST['sp_last_name'];
  

   $sql="update `salespeople` set sp_id=$id,sp_name='$sp_name',
   sp_last_name='$sp_last_name' where sp_id=$id";
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

    <title>Salespeople</title>
  </head>


          <div class= "margin">
        <div class="box-part text-center" >
      
      <div class= "image">
      
       <a href="index_salespeople.php">
        
         <img src="back3.png" alt="Button Image" style="position: absolute; top: 170px; left: 390px;">
       
      </a>

    </div>

    <br>
    <br>
    <br>
    <br>

      <figure class="text-center"> <h1>List of team members</h1><h2>Salespeople</h2> 
     

    </div>

    <body>
    <div class= "container my-5">
    
    <form method= "post">
  
  <div class="form-group">
  <label>Name</label>
  <input type="text" class="form-control" placeholder="Enter salesperson's name" name="sp_name" autocomplete="off"
    value="<?php echo nl2br($sp_name); ?>">

    
   </div>

 <div class="form-group">
    <label >Last name</label>
    <input type="text" class="form-control" placeholder="Enter salesperson's last name" name= "sp_last_name" autocomplete="off" value="<?php echo nl2br($sp_last_name); ?>">
    
  </div>

<div>


</div>

<br>

<div class="box-part text-center" >
  <button type="submit" class="my-button" name= "submit">Update</button>
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