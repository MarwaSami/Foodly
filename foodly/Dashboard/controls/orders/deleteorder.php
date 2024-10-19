
<?php
require_once("../config.php");
$id=$_GET["id"];
$sql="delete from orders where id=$id";
$stmt = $conn->prepare($sql);
$stmt->execute();
header("Location:../../views/orders/");

?>

