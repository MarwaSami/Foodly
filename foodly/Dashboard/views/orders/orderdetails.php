<?php

require_once("../../controls/config.php");
if($conn){
    echo "Connected ";
}

// get data
$id = $_GET["id"];
$sql = "SELECT * FROM `orders_details` WHERE order_id = $id";
// prepare the query
$stmt = $conn->prepare($sql);
$stmt->execute();

// fetch data
$order_details = $stmt->fetchAll(PDO::FETCH_ASSOC);



?>
<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Order_ID</th>
                <th>Item Name</th>
                <th>Price</th>
                <th>Quantity</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($order_details as $detail): ?>
            <tr>
                <td><?php echo $detail['id']; ?></td>
                <td><?php echo $detail['order_id']; ?></td>
                <td><?php
                $sql2 = "SELECT name FROM `items` WHERE id = $detail[items_id]";
                $stmt2=$conn->prepare($sql2);
                $stmt2->execute();

                // fetch data
                $item = $stmt2->fetch(PDO::FETCH_ASSOC);

                echo $item['name']; ?></td>
                <td><?php echo $detail['price']; ?></td>
                <td><?php echo $detail['quantity']; ?></td>
            </tr>
            <?php

         endforeach; ?>
        </tbody>
    </table>
</div>

</table>
</div>
<?php
?>

