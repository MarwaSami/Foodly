<?php
require_once("config.php");
$name=$_POST["name"];
    $price=$_POST["price"];
    $type=$_POST['type'];
    $categories_id=$_POST["categories_id"];
    $description=$_POST["description"];
    $image = uniqid()."." . pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION);
        if (isset($_POST["categories_id"])) {
        $categories_id = $_POST["categories_id"];
    } else {
        // handle the case where the categories_id field is missing or empty
        // e.g. display an error message or redirect to an error page
    }
    $sql = "SELECT id FROM categories WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bindParam(1, $categories_id);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    // the ID exists in the categories table, so insert the item into the items table
    // ...
} else {
    // the ID doesn't exist in the categories table, so handle the error
    // e.g. display an error message or redirect to an error page
}

  $sql="insert into items(name, price, categories_id, img, description,type) VALUES ('$name', '$price', '$categories_id', '$image', '$description','$type')";
 move_uploaded_file($_FILES["img"]["tmp_name"],"../storage/items/".$image);
  $stmt =$conn->prepare($sql);
$stmt->execute();
   // uplode file
   header("Location:../views/items/");
