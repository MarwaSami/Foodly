<?php
require_once("config.php");
// validation

// update row ---->id

$sql="update customers set name='$_POST[name]' ,
 email='$_POST[email]', password='$_POST[password]', phone='$_POST[phone]', subscription='$_POST[subscription]' where id=$_POST[id]";
$conn->prepare($sql)->execute();


    // redirect index
    header("Location:../views/customers/");
?>