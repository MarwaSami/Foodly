<?php
require_once('../../controls/config.php');
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;$sql = "select * from items where id=$id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$item=$stmt->fetch(PDO::FETCH_ASSOC);
$sql = "select * from categories";
$stmt = $conn->prepare($sql);
$stmt->execute();
$categories=$stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>

    .content {
      margin-left: 20px;
    }

    .content h1 {
      margin-bottom: 20px;
      font-size: 32px;
    }

    .table-container {
      margin-top: 80px;
    }

    .table-container h2 {
      margin-bottom: 10px;
      font-size: 24px;
    }

    .table-container table {
      width: 100%;
      border-collapse: collapse;
    }

    .table-container th,
    .table-container td {
      padding: 12px 15px;
      border: 1px solid #dee2e6;
      text-align: left;
    }

    .table-container th {
      background-color: #0A2558;
      color: #f8f9fa;
    }

    .table-container tbody tr:nth-child(even) {
      background-color: #f8f9fa;
    }

    .table-container tbody tr:hover {
      background-color: #e9ecef;
    }
    #addcbtn{
      margin-right: 20px;
      margin-bottom: 20px;
      
    }
  </style>
</head>
<body>

<?php
include_once("../../views/dashboard.php");

?>

  <div class="content">
    <h1>add item</h1><br>

    <div id="items" class="table-container">
      
      <form class="container" method="post" action="../../controls/Additems.php"  enctype="multipart/form-data"> 

    Name: <input type="text" name="name"   class="form-control" >
    <br>

    Image: <input type="file" name="img" id="image"  class="form-control">
    <br>

    price: <input type="text" name="price" class="form-control"  >
    <br>

    description: <input type="text" name="description"  class="form-control">
    <br>


    Category:
      <select    class="form-control" name="categories_id">
  <?php foreach ($categories as $category): ?>
    <option value="<?php echo $category['id'] ?>" >
      <?php echo $category['name'] ?>
    </option>
  <?php endforeach ?>
</select>  
<br>
<label for="type">Type:</label>
   <select value="<?php echo $item['type'] ?>" class="form-control" name="type"
  id="type">
  <option value="original">Original</option>
  <option value="customiz">Customiz</option>
  </select>

    <br>
    <input   class="btn btn-primary" type="submit" name="submit" value="Add Item"  >
    </form>




   
