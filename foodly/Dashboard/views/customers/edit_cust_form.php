<?php
require_once("../../controls/config.php");
$id = $_GET['id'];
$sql = "select * from customers where id=$id";
$stmt = $conn->prepare($sql);
$stmt->execute();
// fetch
$customer = $stmt->fetch(PDO::FETCH_ASSOC);

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
      margin-top: 60px;
    }
  </style>
</head>

<body>
<?php
include_once("../../views/dashboard.php")
?>

  <div class="content">
    <h1>Dashboard</h1>

    <div class="container">
    <form method="post" action="../../controls/updatcustomer.php" >

<input type="text" name="id" value="<?php echo $customer['id'] ?>" hidden>
Name: <input  type="text" name="name" class="form-control" value="<?php echo $customer['name'] ?>">
<br>
<br>
Email: <input value="<?php echo $customer['email'] ?>" type="text" name="email" id="exampleFormControlInput1"
  placeholder="name@example.com" class="form-control">
<br>
<br>
Password: <input value="<?php echo $customer['password'] ?>" type="password" name="password"
  class="form-control" id="inputPassword" placeholder="Password">
<br>
<br>
Phone: <input value="<?php echo $customer['phone'] ?>" type="number" name="phone" class="form-control">
<br>
<br>
<label for="subscription">Subscription:</label>
<select value="<?php echo $customer['subscription'] ?>" class="form-control" name="subscription"
  id="subscription">
  <option value="monthly">Monthly</option>
  <option value="weekly">Weekly</option>
</select>
<br>
<br>
<input class="btn btn-primary" type="submit" name="submit" value="Done">


</form>

</div>
  </div>







</body>

</html>