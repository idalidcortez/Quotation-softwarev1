<?php
include 'connect.php';
$con = mysqli_connect('localhost', 'root', '', 'quote');
$sql = "SELECT DISTINCT c_name FROM clients";
$sql1 = "SELECT DISTINCT p_name FROM products";
$sql2 = "SELECT DISTINCT sp_name FROM salespeople";
$res = mysqli_query($con, $sql);
$res1 = mysqli_query($con, $sql1);
$res2 = mysqli_query($con, $sql2);
?>

<?php
if(isset($_POST['submit'])){
   $date = $_POST['date'];
   $quantity = $_POST['quantity'];

   $sql3 = "INSERT INTO sales (s_date, quantity) VALUES ('$date', '$quantity')";
   $result = mysqli_query($con, $sql3);
   if($result){
      // Data inserted successfully
      header('location:index.php');
      exit();
   } else {
      die(mysqli_error($con));
   }
}
?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="index_products.css">
    <script type="text/javascript" src="quotation_index.js"></script>
    <script type="text/javascript" src="quotation_index1.js"></script>
    <script type="text/javascript" src="quotation_index2.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<body>
<div class="margin">
    <div class="box-part text-center">
        <div class="image">
            <a href="index.php">
                <img src="products.png" width="90" height="80" alt="Button Image"
                     style="position: absolute; top: 15px; left: 340px;">
                <h3 style="position: absolute; top: 95px; left: 345px;">Products</h3>
            </a>
            <a href="index_clients.php">
                <img src="clients2.png" width="90" height="80" alt="Button Image"
                     style="position: absolute; top: 15px; left: 660px;">
                <h3 style="position: absolute; top: 95px; left: 675px;">Clients</h3>
            </a>
            <a href="index_salespeople.php">
                <img src="vendor3.png" width="90" height="80" alt="Button Image"
                     style="position: absolute; top: 15px; left: 985px;">
                <h3 style="position: absolute; top: 95px; left: 979px;">Salespeople</h3>
            </a>

             <a href="index.php">
        
         <img src="back3.png" alt="Button Image" style="position: absolute; top: 148px; left: 465px;">
       
      </a>
        </div>
        <br>
        <br>
        <br>
        <figure class="text-center">
            <h1>New quotation</h1>
            <h2>Hair products</h2>
        </figure>
    </div>
    <br>
    <br>
    <div class="text-center">
        Select client:
        <select id="clients" onchange="selectName()">
            <?php while ($rows = mysqli_fetch_array($res)) { ?>
                <option value="<?php echo $rows['c_name']; ?>"><?php echo $rows['c_name']; ?></option>
            <?php } ?>
        </select>
    </div>
    <br>
    <br>
    <table class="container text-center">
        <thead>
        <tr>
            <th style="width: 30%">Last name</th>
            <th style="width: 30%">Phone number</th>
            <th style="width: 30%">Email</th>
        </tr>
        </thead>
        <tbody id="ans"></tbody>
    </table>
    <br>
    <br>
   <div class="text-center">
    Select product:
    <select id="products" onchange="selectProductName()">
        <?php while ($rows = mysqli_fetch_array($res1)) { ?>
            <option value="<?php echo $rows['p_name']; ?>"><?php echo $rows['p_name']; ?></option>
        <?php } ?>
    </select>
</div>
<br>
<br>
<table class="container text-center">
    <thead>
        <tr>
            <th style="width: 30%">Brand</th>
            <th style="width: 30%">Description</th>
            <th style="width: 30%">Price</th>
            <th style="width: 30%">Quantity</th>
        </tr>
    </thead>
    <tbody id="ans1">
        <tr>
            <td>Brand Name</td>
            <td>Description</td>
            <td>Price</td>
            <td>
                <div class="form-group">
                    <input type="number" class="form-control" placeholder="" name="quantity" autocomplete="off">
                </div>
            </td>
        </tr>
    </tbody>
</table>

        </thead>
        <tbody id="ans1"></tbody>
    </table>
    <br>
    <br>

    <form method="POST" action="process.php">
   <div class="text-center">
    Select salesperson:
    <select id="salespeople" onchange="selectSalespeopleName()">
        <?php while ($rows = mysqli_fetch_array($res2)) { ?>
            <option value="<?php echo $rows['sp_name']; ?>"><?php echo $rows['sp_name']; ?></option>
        <?php } ?> <br> <br>
    </select>
</div>

        <br> <br> <table class="container text-center">
            <thead>
            <tr>
                <th style="width: 30%">Last name</th>
            </tr>
            </thead>
            <tbody id="ans2"></tbody>
        </table>
    </div>
   
    <div class="box-part text-center">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label>Date</label>
                <input type="date" class="form-control" placeholder="Enter date" name="date" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Quantity</label>
                <input type="number" class="form-control" placeholder="Enter quantity" name="quantity" autocomplete="off">
            </div>
            <button type="submit" class="my-button" name="submit">Submit</button>
        </form>
      </form>
    </div>
</div>

</body>
</html>
