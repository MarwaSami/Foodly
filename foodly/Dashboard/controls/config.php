<?php
// 1_connect to data base 
define("dsn","mysql:host=localhost;dbname=foodly");
define("user","root");
define("pass","");
$conn=new PDO(dsn,user,pass);

// if(!$conn){
//     echo 'Error:' . mysqli_connect_error();
// }
?>