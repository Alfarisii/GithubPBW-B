<?php
include 'config.php';
// menyimpan data kedalam variabel
$username       = $_POST['username'];
$password       = $_POST['password'];

// query SQL untuk insert data
$sql = "INSERT INTO rsh_admin SET username='$username',password='$password'";
if (mysqli_query($connection, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}
mysqli_close($connection);
// mengalihkan ke halaman index.php
header("location:home.php");
?>