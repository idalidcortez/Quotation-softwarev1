<?php
include 'connect.php';
$con = mysqli_connect('localhost', 'root', '', 'quote');

if (isset($_POST['submit'])) {
  // Get the selected option from the form
  $selectedOption = $_POST['selection'];

  // Perform any necessary validation or sanitization on the selected option

  // Insert the selected option into your database table
  $sql5 = "INSERT INTO sales (ref_c_id, ref_p_id, ref_sp_id ) VALUES ('$selectedOption', '$selectedOption', '$selectedOption')";
  $result = mysqli_query($con, $sql5);

  if ($result) {
    echo "Record added to the database successfully.";
  } else {
    echo "Error adding record to the database: " . mysqli_error($con);
  }
}
?>
