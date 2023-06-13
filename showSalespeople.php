<?php
include 'connect.php';
$k = $_POST['id'];
$k = trim($k);
$con = mysqli_connect('localhost', 'root', '', 'quote');
$sql2 = "SELECT * FROM salespeople WHERE sp_name = '{$k}'";
$res2 = mysqli_query($con, $sql2);
while ($rows = mysqli_fetch_array($res2)) {
?>

<tr>
    <td><?php echo $rows['sp_last_name']; ?></td>
   
</tr>

<?php
}
echo $sql2;
?>
