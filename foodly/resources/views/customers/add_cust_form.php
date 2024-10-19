<?php
// require_once("../../controls/user.php")
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
    .container{
      margin-top: 10px;
    }
  </style>
</head>
<body>

<?php
include_once("../../views/dashboard.php")
?>
  <div class="content">
    <h1>add customer</h1><br>


    <div class="container">
    <form method="post" action="../../controls/addcustomer.php"  enctype="multipart/form-data"> 

Name: <input type="text" name="name"   class="form-control" >
<br>
<br>
Email: <input type="text" name="email" id="exampleFormControlInput1" placeholder="name@example.com"  class="form-control">
<br>
<br>
Password: <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
<br>
<br>
Phone: <input type="number" name="phone"  class="form-control">
<br>
<br>
<label for="subscription">Subscription:</label>
<select  class ="form-control" name="subscription" id="subscription">
<option value="monthly">Monthly</option>
<option value="weekly">Weekly</option>
</select>
<br>
<br>
<input class="btn btn-primary" type="submit" name="submit" value="Add"  >
</form>
</div>
      
     

    



    
</body>
</html>