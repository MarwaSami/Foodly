<?php
require_once("config.php");
$id=$_GET["id"];
$sql="delete from customers where id=$id";
$conn->prepare($sql)->execute();
header("Location:../views/customers/");
