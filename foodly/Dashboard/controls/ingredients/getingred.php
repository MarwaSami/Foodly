<?php
require_once('getdata.php');
$ingrediented=displayingred();
function displayingred(){
    $sqlquery="SELECT  ingredients.id, categories.name as category ,sub_categories.name as sub,ingredients.name,ingredients.price,ingredients.calories 
    from ingredients
    INNER JOIN categories on (categories.id=ingredients.categories_id)
    INNER join sub_categories
    on (sub_categories.id=ingredients.sub_categories_id)";
 $disingredients=getdata($sqlquery);
 return $disingredients;
}
?>