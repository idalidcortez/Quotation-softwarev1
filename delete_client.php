<?php 

include 'connect.php';
if(isset($_GET['deleteid'])){

$id=$_GET['deleteid'];


$sql="delete from `clients` where c_id=$id";
$result= mysqli_query($con, $sql);
if($result){
    header('location:index_clients.php');
	}else{
     die(mysqli_error($con));
   }

}




?>