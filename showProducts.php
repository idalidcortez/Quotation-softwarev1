<?php
include 'connect.php';
$s = $_POST['id'];
$s = trim($s);
$con = mysqli_connect('localhost', 'root', '', 'quote');
$sql = "SELECT * FROM products WHERE p_name = '{$s}'";
$res = mysqli_query($con, $sql);
while ($rows = mysqli_fetch_array($res)) {
?>

<tr>
    <td><?php echo $rows['p_brand']; ?></td>
    <td><?php echo $rows['p_description']; ?></td>
    <td><?php echo $rows['p_price']; ?></td>
</tr>

<?php
}
echo $sql;
?>
