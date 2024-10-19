<?php
require_once('config.php');
 if($dbobj)
 {
  // get data from dB
  // 1-get catgories data
  $ingredients=[];
  $categories=getcategories();
 $jasonsubcategories=getSubcategories($categories);
//  print_r($ingredients);
 $jsondish=json_encode(getingredients());
 }
 function getcategories(){
  $sqlquery="SELECT name FROM categories ";
  $newcategories= getdata($sqlquery);
  $categories=[];
  foreach($newcategories as $category)
  {
   array_push($categories,$category['name']);
  }
  return $categories;
 }
 function getSubcategories($categories){
   $subcategories=[];
 foreach ($categories as $category)
 {
 $sqlquery="SELECT sub_categories.name as sub_category,categories_sub_categories.bgimg
 from categories_sub_categories 
 INNER JOIN categories on (categories.id=categories_sub_categories.categories_id)
 Inner join sub_categories
 on (sub_categories.id=categories_sub_categories.sub_categories_id)
 where categories.name='$category' ";
 $subcategories_cate=getdata($sqlquery);
 $subcategories[$category]=$subcategories_cate;
 sub_categories_nobg($category);
 }
  return json_encode($subcategories);
 }
 function sub_categories_nobg($category){
   // Query for ingredients
   global  $ingredients;
 $sqlquery="SELECT sub_categories.name as sub_category from categories_sub_categories 
 INNER JOIN categories on (categories.id=categories_sub_categories.categories_id)
 Inner join sub_categories
 on (sub_categories.id=categories_sub_categories.sub_categories_id)
 where categories.name='$category' ";
 $subcategories_cate=getdata($sqlquery);
 $temparr=[];
 foreach($subcategories_cate as $subcate){
 $temparr[$subcate["sub_category"]]=[];
 }
 $ingredients[$category]=$temparr;
 }
 function getingredients(){
  global $ingredients;
  foreach ($ingredients as $category=>$subs)
{
  foreach($subs as $subcategory=>$ingredient)  {
    $sqlquery="SELECT ingredients.name,ingredients.price,ingredients.calories 
       from ingredients
       INNER JOIN categories on (categories.id=ingredients.categories_id)
       INNER join sub_categories
       on (sub_categories.id=ingredients.sub_categories_id)
       where categories.name='$category' and sub_categories.name='$subcategory' ";
     $ingredientsq=getdata($sqlquery); 
    $subs[$subcategory]=$ingredientsq;
 }
  $ingredients[$category]=$subs;
}
return $ingredients;
}
 function getdata($sqlquery)
 {
   global $dbobj;
   $stmt= $dbobj->prepare($sqlquery);
   $stmt->execute();
   $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
   return $data;
 }
?>