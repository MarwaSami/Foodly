<?php
// connect to the database
require_once("../../controls/config.php");
// if($conn){
//     echo "Connected ";
// }



 $sql="select * from orders";
//  convert from string to sql quary
 $stmt=$conn->prepare($sql);
 $stmt->execute();
//  fetch data
$orders=$stmt->fetchAll(PDO::FETCH_ASSOC);
?>
