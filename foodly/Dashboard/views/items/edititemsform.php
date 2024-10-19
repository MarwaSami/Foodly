<?php
require_once('../../controls/config.php');
$id = $_GET['id'];
$sql = "select * from items where id=$id";
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
  <h1>Edit Item</h1>

  <div id="users" class="table-container">

    <form class="container"  method="post" action="../../controls/Edititems.php" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?php echo $item['id']?>" hidden >
      Name: <input type="text" value="<?php  echo $item['name']?>" name="name" class="form-control">
      <br>

      Price: <input type="text" value="<?php echo $item['price']?>" name="price" class="form-control">
      <br>

      Image: <input type="file" name="img" >
      <img  src="http://localhost:84/foodly/Dashboard/storage/items/<?php echo $item['img']?>" class="form-control" >
      <br>

      Description: <input type="text" value="<?php echo $item['description']?>" name="description" class="form-control">
      <br>

      Category:
      <select   class="form-control"   name="categories_id">
  <?php foreach ($categories as $category): ?>
    <option  value="<?php echo $category['id'] ?>" >
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

  <input class="btn btn-primary" type="submit" name="submit" value="Update">
    </form>
  </div>
</div>

