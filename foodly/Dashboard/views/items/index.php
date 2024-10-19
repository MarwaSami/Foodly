<?php
require_once("../../controls/items.php")
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
<?php
include_once("../../views/dashboard.php")
?>

  <div class="content">
    <h1>Dashboard</h1>

    <div id="users" class="table-container">
      <div style="display:flex ;justify-content:space-between">
      <h2>Items</h2>
      <a href="additemsform.php" id="addcbtn" class="btn btn-primary"
      >Add Item</a>

      </div>
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Image</th>
            <th>Price</th>
            <th>Category</th>
            <th>Description</th>
            <th>type</th>
            <th>Actoins</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach($items as $item){
            $sql="select name from categories where id=$item[categories_id]";
            $stmt=$conn->prepare($sql);
            $stmt->execute();
            $name=$stmt->fetch(PDO::FETCH_ASSOC);
            // <td><img width='100px'src='http://localhost:84/foodly/Dashboard/storage/$item[img]'></td>
            echo " <tr>
            <td>$item[id]</td>
            <td>$item[name]</td>";
            if($item['img']==null)
            echo "<td></td>";
            else
            echo " <td><img width='100px'src='http://localhost/foodly/Dashboard/storage/items/$item[img]'></td>";
            echo "<td>$item[price]</td>
            <td>$name[name]</td>
            <td>$item[description]</td>
            <td>$item[type]</td>
            <td>

            <a class='btn btn-outline-dark' href='edititemsform.php?id=$item[id]&&action=Edit'>Edit </a>
            <a class='btn btn-outline-dark' href='../../controls/Deleteitems.php?id=$item[id]&&action=Delete'>Del </a>   </td>

          </tr>";
          }
          ?>
          <!-- Add more rows as needed -->
        </tbody>
      </table>
    </div>


