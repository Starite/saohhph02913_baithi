<?php

$dsn='mysql:host=localhost;dbname=saohhph02913';
$username='root';
$password='';
$db= new PDO($dsn, $username, $password);


$ID = $_POST['id'];
$Name = $_POST['name'];
$mota = $_POST['mota'];


$query = "INSERT INTO sanpham VALUES ('".$ID."','".$Name."','".$mota."')";
$result = $db->exec($query);
echo ' Da them ';

?>
<a href="index.php">Ve trang chu</a>