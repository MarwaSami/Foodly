
<?php
require_once("config.php");
if(!empty($_GET)){
switch ($_GET["action"]){
    case "add":{
        add($conn);
        break;
    }
    case "delete":{
        remove($conn);
        break;
    }
    case "update":{
       update($conn);
       break;
    }
    case "edit":{
        edit($conn);
        break;
     }
}}
// get all data
function index($conn){
    $sql="select * from items";
    $stmt=$conn->prepare($sql);
    $stmt->execute();
    $items=$stmt->fetchAll(PDO::FETCH_ASSOC);
    return $items;
}
$items=index($conn);
// add item
function add($conn){
    $name=$_POST["name"];
    $price=$_POST["price"];
    $description=$_POST["description"];

    $image=md5(microtime()).".".pathinfo($_FILES['img']['name'],PATHINFO_EXTENTION);
    $stmt=$conn->prepare($sql);
    $stmt->execute();
   // uplode file
   header("Location:../views/items/");
}
function update($conn){
    echo "in update";
    $sql="update items set name ='$_POST[name]',price='$_POST[price]' where id=$_POST[id]";
    $stmt=$conn->prepare($sql);
    $stmt->execute();
   // uplode file
   header("Location:../views/items/");
}

function remove($conn){
    $sql="delete from items  where id=$_REQUEST[id]";
    $stmt=$conn->prepare($sql);
    $stmt->execute();
   // uplode file
   header("Location:../views/items/");
}

function edit($conn){
include("../config.php");
$id=$_GET['id'];
$sql="select * from items where id=$id";
$stmt=$conn->prepare($sql);
$stmt->execute();
// fetch
$item=$stmt->fetch(PDO::FETCH_ASSOC);
include_once("../views/items/edititemsform.php");
}
