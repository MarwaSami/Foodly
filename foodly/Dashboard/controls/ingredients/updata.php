<?php
require_once('getdata.php');
//1. get data from ADD form 
$id=$_REQUEST['id'];
// $category=$_REQUEST['catgory'];
// $subs=$_REQUEST['subs'];
$ingredient_name=$_REQUEST['name'];
$ingredient_price=$_REQUEST['price'];
$ingredient_cala=$_REQUEST['cala'];
$is_there_error=false;
print_r($_REQUEST);
//2.Validation
// price is number
if(!is_numeric($ingredient_price))
{
    $error= "Error you must add price as number";
    $is_there_error=true;
}

if($is_there_error){
     header("location:../../views/ingredients/add_ingred.php?error=$error");
}
else
{
    $sqlquery="update ingredients set name='$ingredient_name' ,price='$ingredient_price',calories='$ingredient_cala' where id=$id ";
    $dbobj->prepare($sqlquery)->execute();
    header("location:../../views/ingredients/index.php");
}

?>