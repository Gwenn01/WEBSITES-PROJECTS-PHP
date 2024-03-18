<?php 
    require('BackEnd/database.php');
    // functionality
    if(isset($_POST['add'])){
        $foodcode = $_POST['food-code'];
        $foodname = $_POST['food-name'];
        $foodprice = $_POST['food-price'];

        $queryInsert = "INSERT INTO foodcart(id, foodcode, foodname, foodprice)VALUES(null, '$foodcode', '$foodname', '$foodprice')";
        $slqInsert = mysqli_query($connection, $queryInsert);

        if($slqInsert){
            echo "<script>alert('Add Successfully!!')</script>";
        }else{
            echo "<script>alert('Add Failed!!')</script>";
        }
    }
    if(isset($_POST['delete'])){
        $deleteItem = $_POST['id'];

        $queryDelete = "DELETE FROM foodcart WHERE id = '$deleteItem'";
        $sqlDelete = mysqli_query($connection, $queryDelete);

        if($sqlDelete){
            echo "<script>alert('Successfully Delete!!')</script>";
        }else{
            echo "<script>alert('Failed Delete!!')</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Order</title>
    <style>
        body{
            background-color: #778da9;
            font-family: trebuchet MS;
        }
        .main{
            display: grid;
            grid-template-columns: 1fr 600px;
        }
        .food-orders{
            grid-column: 1/2;
            display: grid;
            grid-template-columns: 1fr 1fr; 
        }
        .food-orders .pruducts{
            background-color: white;
            margin: 10px;
            height: 350px;
            width: 300px;
            border: 3px solid black;
            border-radius: 10px;
            box-shadow: 0 0 10px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .food-cart{
            grid-column: 2/3;
            border: 2px solid black;
            background-color: gray;
            color: white;
        }
        .add{
            padding: 10px 20px;
            width: 200px;
            border: none;
            background-color: green;
            color: white;
            font-weight: bolder;
        }
        .add:hover{
            color: gray;
        }
        table{
            width: 100%;
            border: 1px solid black;
        }
        table tr th{
            border: 1px solid black;
            padding: 5px;
            background-color: white;
            color: black;
        }
        table tr td{
            border: 1px solid black;
            background-color: gray;
            color: white;
            text-align: center;
            padding: 5px;
        }
        .delete{
            margin: none;
            padding: 5px 10px;
            width: 100px;
            border: none;
            background-color: red;
            color: white;
            font-weight: bolder;
        }
        .delete:hover{
            color: gray;
        }
        .payment-details{
            margin-top: 30px;
            width: 98%;
            border: 1px solid black;
            padding: 5px;
            background-color: white;
            color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .totals{
            width: 99%;
            display: flex;
            justify-content: space-around;
        }
        #form-pay{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 20px;
        }
        .inputs{
            padding: 10px 20px;
        }
        .pay{
            margin: none;
            padding: 10px 20px;
            width: 400px;
            border: none;
            background-color: #415a77;
            color: white;
            font-weight: bolder;
        }
        .pay:hover{
            color: gray;
        }
    </style>
</head>
<body>
    <?php require('header.php')?>
    <div class="main">
        <div class="food-orders">
            <?php 
                 $querySelect = "SELECT * FROM products";
                 $sqlSelect = mysqli_query($connection, $querySelect);
                 if(mysqli_num_rows($sqlSelect) > 0){
                    while($result = mysqli_fetch_assoc($sqlSelect)){
            ?>
                <div class="pruducts">
                    <img src="Products/<?php echo $result['foodimage']?>" alt="foodimage" style="height: 100px; width: 100px;">
                    <p>Food Code: <?php echo $result['foodcode']?></p>
                    <p>Food Name: <?php echo $result['foodname']?></p>
                    <p>Food Price: <?php echo $result['foodprice']?></p>
                    <form action="" method="POST" class="add-form">
                        <input type="hidden" name="food-code" value="<?php echo $result['foodcode']?>">
                        <input type="hidden" name="food-name" value="<?php echo $result['foodname']?>">
                        <input type="hidden" name="food-price" value="<?php echo $result['foodprice']?>">
                        <input type="submit" name="add" value="ADD" class="add">
                    </form>
                </div>
            <?php 
                    }
                 }
            ?>
        </div>
        <div class="food-cart">
            <table>
                <tr>
                    <th>#</th>
                    <th>FoodCode</th>
                    <th>FoodName</th>
                    <th>FoodPrice</th>
                    <th>Action</th>
                </tr>
                <?php 
                    $qurySelectCart = "SELECT * FROM foodcart";
                    $sqlSelectCart = mysqli_query($connection,  $qurySelectCart);
                    $count = 1;
                    $totalAmount = 0;
                    if(mysqli_num_rows($sqlSelectCart) > 0){
                        while($result = mysqli_fetch_assoc($sqlSelectCart)){
                            $totalAmount += (int)$result['foodprice'];
                ?>
                    <tr>
                        <td><?php echo $count;?></td>
                        <td><?php echo $result['foodcode'];?></td>
                        <td><?php echo $result['foodname'];?></td>
                        <td><?php echo $result['foodprice'];?></td>
                        <td>
                            <form action="" method="POST">
                                <input type="hidden" name="id" value="<?php echo $result['id'];?>">
                                <input type="submit" name="delete" value="DELETE" class="delete">
                            </form>
                        </td>
                    </tr>
                <?php 
                            $count++;
                        }
                    }
                ?>
            </table>
            <div class="payment-details">
                <div class="totals">
                    <p>Total Item: <?php echo $count-1?></p>
                    <p>Total Amount: <?php echo $totalAmount?></p>
                </div>
                <form action="records.php" method="POST" id="form-pay">
                    <input type="hidden" value="<?php echo $totalAmount?>" id="total-amount">
                    <div>
                        <label for="recieved-amount">Received Amount: </label>
                        <input type="text" name="recieved-amount" id="recieved-amount" class="inputs">
                    </div>
                    <div>
                        <label for="change-amount">Change Amount: </label>
                        <input type="text" name="change-amount" id="change-amount" class="inputs">
                    </div>
                    <input type="submit" name="pay" value="PAY" class="pay" id="payBtn" disabled>
                </form>
            </div>
        </div>
    </div>
</body>
<script>
    let btnRecieved = document.getElementById('recieved-amount');
    let btnChange = document.getElementById('change-amount');
    let totalAmount = document.getElementById('total-amount');
    let btnPay = document.getElementById('payBtn');
    btnRecieved.addEventListener('input', () => {
        btnChange.value = btnRecieved.value - totalAmount.value;

        if(parseInt(btnRecieved.value) >= parseInt(totalAmount.value)){
            console.log('hey');
            btnPay.disabled = false;
        }
    });

</script>
</html>