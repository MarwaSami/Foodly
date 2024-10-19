<?php
// get data
require_once("config.php");
// 2-get data 
 $sql="select * from customers";
//  convert from string to sql quary 
 $stmt=$conn->prepare($sql);
 $stmt->execute();
//  fetch data
$customers=$stmt->fetchAll(PDO::FETCH_ASSOC);
?>