
<?php
require_once("config.php");
$sql="delete from items  where id=$_REQUEST[id]";
    $stmt=$conn->prepare($sql);
    $stmt->execute();
   // uplode file
   header("Location:../views/items/");
