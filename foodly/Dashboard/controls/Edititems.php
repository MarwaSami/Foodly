<?php
require_once 'config.php';

$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$categories_id = $_POST['categories_id'];
$description = $_POST['description'];
$image = uniqid()."." . pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION);
$sql = "UPDATE items SET name =' $_POST[name]', price ='$_POST[price]', categories_id = '$_POST[categories_id]',type='$_POST[type]', description = '$_POST[description]' WHERE id =$_POST[id]";
$stmt = $conn->prepare($sql);
$stmt->execute();
$item=$stmt->fetch(PDO::FETCH_ASSOC);
header("Location: ../views/items/");
$stmt->close();
?>
