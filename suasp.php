<?php
$dsn='mysql:host=localhost;dbname=saohhph02913';
$username='root';
$password='';
$db= new PDO($dsn, $username, $password);

$ID = $_POST['id'];
$Name = $_POST['name'];
$mota = $_POST['mota'];


$sql = "UPDATE sanpham SET `ten_sp` = '$Name', `mota` = '$mota' Where `id_sp` = '$ID'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
<a href="index.php">Ve trang quan tri</a>