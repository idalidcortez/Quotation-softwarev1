<?php 

include 'connect.php';
if(isset($_GET['deleteid'])){

$id=$_GET['deleteid'];


$sql="delete from `salespeople` where sp_id=$id";
$result= mysqli_query($con, $sql);
if($result){
    header('location:index_salespeople.php');
	}else{
     die(mysqli_error($con));
   }

}




?>