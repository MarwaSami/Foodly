<?php
require_once("../../controls/customer.php")
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
      <h2>Cusomers</h2>
      <a href="add_cust_form.php" id="addcbtn" class="btn btn-primary" 
      >Add Customer</a>

      </div>
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Phone</th>
            <th>Subscription</th>
            <th>Actoins</th>
          </tr>
        </thead>
        <tbody>
        <div class="container">
        <?php
          foreach($customers as $customer){
            echo " <tr>
            <td>$customer[id]</td>
            <td>$customer[name]</td>
            <td>$customer[email]</td>
            <td>$customer[password]</td>
            <td>$customer[phone]</td>
            <td>$customer[subscription]</td>
            <td><a class='btn btn-outline-dark' href='../../controls/deletecustomer.php?id=$customer[id]'>del</a>
            <a class='btn btn-outline-dark'href='edit_cust_form.php?id=$customer[id]'>edit</a></td>
          </tr>";
          }
          ?>
</div>

          <!-- Add more rows as needed -->
        </tbody>
      </table>
    </div>

    
