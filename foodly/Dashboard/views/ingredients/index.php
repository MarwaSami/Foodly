<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
include_once "../../views/dashboard.php"
?>

  <div class="content">
    <div id="users" class="table-container">
      <div style="display:grid; grid-template-columns: 1fr 2fr 1fr; margin-bottom:2vh;">
      <h2>Ingredients</h2>
      <div>
      <form method="POST" action="http://localhost/foodly/Dashboard/views/ingredients/index.php">
     <label for="filter">Filter by:  </label>
     <select name="filter" id="filter" class="form-control w-50" style='display:inline;'>
      <option value="all">All</option>
      <option value="SANDWICHES">SANDWICHES</option>
      <option value="MEALS">MEALS</option>
      <option value="PIZZAS">PIZZAS</option>
      <option value="PASTA">PASTA</option>
      <option value="FRESHJUICES">FRESHJUICES</option>
  </select>
  <button type="submit" class="btn btn-primary">Filter</button>
</form>
      </div>
      <div>
        <a href="add_ingred.php" id="add" class="btn btn-primary"
      >Add Ingredients</a>
      </div>

      </div>
      <table class="table">
        <thead>
          <tr>
            <th>Category</th>
            <th>Subcategory</th>
            <th>Name</th>
            <th>Price</th>
            <th>Calarioes</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>

         <?php
require_once '../../controls/ingredients/getdata.php';
if (!isset($_REQUEST['filter']) || ($_REQUEST['filter'] == 'all')) {
    $sqlquery = "SELECT  ingredients.id, categories.name as category ,sub_categories.name as sub,ingredients.name,ingredients.price,ingredients.calories
         from ingredients
         INNER JOIN categories on (categories.id=ingredients.categories_id)
         join sub_categories
         on (sub_categories.id=ingredients.sub_categories_id)";

} else {
    $sqlquery = "SELECT  ingredients.id, categories.name as category ,sub_categories.name as sub,ingredients.name,ingredients.price,ingredients.calories
          from ingredients
          INNER JOIN categories on (categories.id=ingredients.categories_id)
          join sub_categories
          on (sub_categories.id=ingredients.sub_categories_id)
          where categories.name='$_REQUEST[filter]'";
}
$ingrediented = getdata($sqlquery);

foreach ($ingrediented as $ingred) {

    echo "<tr><td>$ingred[name]</td>";
    echo "<td >$ingred[category]</td>";
    echo "<td >$ingred[sub]</td>";
    echo "<td >$ingred[price]</td>";
    echo "<td >$ingred[calories]</td> ";
    echo " <td><a href='../../controls/ingredients/deletedata.php?id=$ingred[id]' class='btn  btn-primary w-25'><i class='fa-solid fa-trash' style='color: #ffffff;'></i></a>
              <a href='update_ingred.php?id=$ingred[id]' class='btn  btn-primary w-25'><i class='fa-regular fa-pen-to-square' style='color: #ffffff;'></i></a>
              </td>
          </tr>";
}
?>
          <!-- Add more rows as needed -->
        </tbody>
      </table>
    </div>


