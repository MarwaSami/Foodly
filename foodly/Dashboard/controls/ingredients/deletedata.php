<?php
require_once('getdata.php');
$id=$_REQUEST['id'];
$sqlquery="DELETE FROM ingredients where id=$_REQUEST[id]";
$dbobj->prepare($sqlquery)->execute();
header("location:../../views/ingredients/index.php");
?>