<?php
require_once('getdata.php');
//1. get data from ADD form 
$category=$_REQUEST['category'];
$subs=$_REQUEST['subs'];
$ingredient_name=$_REQUEST['name'];
$ingredient_price=$_REQUEST['price'];
$ingredient_cala=$_REQUEST['cala'];
$is_there_error=false;
//2.Validation
// price is number
if(!is_numeric($ingredient_price))
{
    $error= "Error you must add price as number";
    $is_there_error=true;
}
// ingredients is not exist
foreach ($ingredients[$category][$subs] as $ingredient){
     if($ingredient['name']==$ingredient_name){
        $error="this ingredient is already exists ";
        $is_there_error=true;
        break;
     }
}
if($is_there_error){
    header("location:../../views/ingredients/add_ingred.php?error=$error");
}
else
{
    $sqlquery="select id from categories where name='$category'";
    $cate_id=getdata($sqlquery)[0]['id'];
    $sqlquery="select id from sub_categories where name='$subs'";
    $subcate_id=getdata($sqlquery)[0]['id'];
    $sqlquery="insert into ingredients(name,price,calories,categories_id,sub_categories_id) values('$ingredient_name','$ingredient_price',$ingredient_cala,$cate_id,$subcate_id)";
    $stmt= $dbobj->prepare($sqlquery);
    $stmt->execute();
    header("location:../../views/ingredients/index.php");
}

?>