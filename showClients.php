<?php
include 'connect.php';
$k = $_POST['id'];
$k = trim($k);
$con = mysqli_connect('localhost', 'root', '', 'quote');
$sql = "SELECT * FROM clients WHERE c_name = '{$k}'";
$res = mysqli_query($con, $sql);
while ($rows = mysqli_fetch_array($res)) {
?>

<tr>
    <td><?php echo $rows['c_last_name']; ?></td>
    <td><?php echo $rows['c_phone_number']; ?></td>
    <td><?php echo $rows['c_email']; ?></td>
</tr>

<?php
}
echo $sql;
?>
