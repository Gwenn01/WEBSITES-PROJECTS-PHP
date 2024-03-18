<?php
    require('BackEnd/database.php');

    if(isset($_POST['pay'])){
        $pay_amount = $_POST['recieved-amount'];
        $change_amount = $_POST['change-amount'];

        $queryInsert = "INSERT INTO payment(id, pay_amount, change_amount)VALUES(null, ' $pay_amount', '$change_amount')";
        $slqInsert = mysqli_query($connection, $queryInsert);
        
        $query = "SELECT MAX(id) AS max_id FROM payment";
        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($result);
        $payment_id = $row['max_id'];

        $queyInsertRecords = "INSERT INTO records (payment_id, foodcode, foodname, foodprice, date_buy)
        SELECT $payment_id, fc.foodcode, fc.foodname, fc.foodprice, CURRENT_DATE
        FROM foodcart fc";

        $slqInsertRecords = mysqli_query($connection, $queyInsertRecords);

        $deletequery = "DELETE FROM foodcart";
        $deleteSql = mysqli_query($connection, $deletequery);

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>records</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        h2 {
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table th, table td {
            padding: 8px;
            border: 1px solid #ddd;
            text-align: left;
        }

        table th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php require('header.php')?>
    <div class="container">
        <h2>Payment Details</h2>
        <table class="payment-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Pay Amount</th>
                    <th>Change Amount</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require('BackEnd/database.php');

                $query = "SELECT * FROM payment";
                $result = mysqli_query($connection, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['pay_amount'] . "</td>";
                    echo "<td>" . $row['change_amount'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

        <h2>Records</h2>
        <table class="records-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Payment ID</th>
                    <th>Food Code</th>
                    <th>Food Name</th>
                    <th>Food Price</th>
                    <th>Date Buy</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM records";
                $result = mysqli_query($connection, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['payment_id'] . "</td>";
                    echo "<td>" . $row['foodcode'] . "</td>";
                    echo "<td>" . $row['foodname'] . "</td>";
                    echo "<td>" . $row['foodprice'] . "</td>";
                    echo "<td>" . $row['date_buy'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>