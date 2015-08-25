<?php

$dsn='mysql:host=localhost;dbname=saohhph02913';
$username='root';
$password='';
$db= new PDO($dsn, $username, $password);


$ID = $_POST['id'];


$query = "DELETE FROM `sanpham` WHERE `id_sp` = '$ID' ";
$result = $db->exec($query);
echo ' Da xoa ';

?>
<a href="index.php">Ve trang chu</a>