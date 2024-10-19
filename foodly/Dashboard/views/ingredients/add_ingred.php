<?php
require_once("../../controls/ingredients/getingred.php");
// print_r($count_ingred_arr);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    .content {
      margin-left: 10%;
      width: 80%;
    }

    .content h1 {
      margin-bottom: 20px;
      font-size: 32px;
    }

    .table-container {
      margin-top: 30px;
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
    .error{
        display: block;
        color:red;
    }
    .btn-primary{
        width: 15%;
        margin-left: 30%;
        margin-bottom: 4vh;
    }
  </style>
  <body>
  <?php
include_once("../../views/dashboard.php")
?>
  <div class="content">
    <h1>add Ingredient</h1><br>
    <div id="ingreds" class="table-container">
      <form method="post" action="../../controls/ingredients/adddata.php"  enctype="multipart/form-data"> 
    Category : 
    <br>
    <?php
    foreach ($categories as $key => $category) {
        echo "<br> <input type='radio' name='category' value='$category' onclick='showsub(this)'> $category ";
    }
    ?> 
    <br>  
    <br>
    <label for='subs'>Subcategory:</label>
    <select  class ='form-control subs' name='subs' id='subs'>
    <option value='option'>option</option>
    </select>
    <br>
    Name: <input type="text" name="name"   class="form-control" >
    <br>
    Unit Price: <input type="number" name="price" id="exampleFormControlInput1"  class="form-control">
    <br>
    Unit Calaories: <input type="text" name="cala" class="form-control" id="cala" placeholder="cala per 100g ">
    <br>
     <?php
     if(isset($_REQUEST['error']))
     {
        echo  "<i class='fa-solid fa-triangle-exclamation' style='color: #ff0000;'></i> <label for='error' class='error'>Error: ! $_REQUEST[error]</label>";
     }
     ?>
    <input class="btn btn-primary" type="submit" name="submit" value="Add"  >
    </form>    
</body>
<script>
 function showsub(parent){
    var subs= JSON.parse('<?php echo $jasonsubcategories; ?>');
    var category=parent.value;
    document.getElementsByClassName('subs')[0].innerHTML="";
    var option=document.createElement('option');
        option.value='option';
       option.innerText='option';
       document.getElementsByClassName('subs')[0].appendChild(option);
    for(var i=0 ;i<subs[category].length;i++)
    {
        var option=document.createElement('option');
        option.value=subs[category][i].sub_category;
       option.innerText=subs[category][i].sub_category;
       document.getElementsByClassName('subs')[0].appendChild(option);
    }

 } 
</script>
</html>