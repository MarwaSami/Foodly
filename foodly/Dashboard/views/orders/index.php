<?php
include("../../views/dashboard.php");
require_once("../../controls/orders/showorders.php");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Orders</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
        .content {
            margin-left: 20px;
        }

        .content h1 {
            /* margin-bottom: px; */
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
            width: 80%;
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

        #addcbtn {
            margin-right: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="content">
        <h1>Orders</h1>
        <div id="users" class="table-container">
            <div style="display:flex ;justify-content:space-between">
                <!-- <h2></h2> -->
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Customer_ID</th>
                        <th>Date</th>
                        <th>Total Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($orders as $order) {
                        echo "<tr>
                    <td>$order[id]</td>
                    <td>$order[cust_id]</td>
                    <td>$order[date]</td>
                    <td>$order[price]</td>
                    <td><a class='btn btn-primary openPopup' data-href='orderdetails.php?id=$order[id]' onclick='event.preventDefault();'> Details</a>

                    <a class='btn btn-danger w-25' onclick='confirmDelete($order[id])'><i class='fa-solid fa-trash'></i></a>
                    </td>
                </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="viewModal" role="dialog">
            <div class="modal-dialog modal-lg">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Order Details</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="order-view-modal modal-body"></div>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function() {
                $('.openPopup').on('click', function() {
                    var dataURL = $(this).attr('data-href');

                    $('.order-view-modal').load(dataURL, function() {
                        $('#viewModal').modal({
                            show: true
                        });
                    });
                });
            });
        </script>

        <!-- Delete confirmation  -->
        <script>
            function confirmDelete(orderId) {
                var confirmation = confirm("Are you sure you want to delete this order?");
                if (confirmation) {
                    window.location.href = '../../controls/orders/deleteorder.php?id=' + orderId;
                }
            }
        </script>

</body>

</html>
