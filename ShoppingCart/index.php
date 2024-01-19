<?php
    require('database.php');
    session_start();
    // check if the user is already login
    if($_SESSION['status'] == 'invalid' || empty($_SESSION['status'])){
        header('location: login.php'); 
    }
    // check the data of the user
    if(isset($_SESSION['UserData'])){
        $loginUser = $_SESSION['UserData'];

        // creating a tables if exist, if not create
        $tableName = "usercart_id" . $loginUser['ID'];

        $queryCheckTable = "SHOW TABLES LIKE '$tableName'";
        $sqlCheckTable = mysqli_query($connection, $queryCheckTable);

        if(mysqli_num_rows($sqlCheckTable) < 1){
            $qyueyCreateTable = "CREATE TABLE IF NOT EXISTS `$tableName` (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, name VARCHAR(255) NOT NULL, price VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, quantity INT(6))";
            $sqlCreateTable = mysqli_query($connection, $qyueyCreateTable);
        }
    }
    // put the data on database if the user already add in cart
    if(isset($_POST['add_to_cart'])){
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $product_image = $_POST['product_image'];
        $product_quantity = $_POST['product_quantity'];

        $queryInsertCart = "INSERT INTO $tableName(id, name, price, image, quantity)VALUES(null, '$product_name', '$product_price', '$product_image', '$product_quantity')";
        $sqlInsertCart = mysqli_query($connection, $queryInsertCart);
        echo "<script>alert('Successfully Added in Cart')</script>";
    }
    // update the cart
    if(isset($_POST['update'])){
        $updatedQuantity = $_POST['update_quantity'];
        $productUpdate = $_POST['update_id'];
        $queryUpdateProduct = "UPDATE $tableName SET quantity = '$updatedQuantity' WHERE id = '$productUpdate'";
        $sqlUpdateProduct = mysqli_query($connection, $queryUpdateProduct);
        echo "<script>alert('Updated Successfully!')</script>";
    }
    //
    if(isset($_POST['delete'])){
        $productDelete = $_POST['delete_id'];
        $queryDeleteProduct = "DELETE FROM $tableName WHERE id = '$productDelete'";
        $sqlDeleteProduct = mysqli_query($connection, $queryDeleteProduct);
        echo "<script>alert('Delete Successfully!')</script>";
        if ( $sqlDeleteProduct) {
            echo "<script>alert('Delete Successfully!')</script>";
        } else {
            echo "Error deleting all records: " . mysqli_error($connection);
        }
    }
    if(isset($_POST['delete_all'])){
        $queryDeleteAllProduct = "TRUNCATE TABLE $tableName"; // Remove the FROM keyword
        $sqlDeleteAllProduct = mysqli_query($connection, $queryDeleteAllProduct);
        if ($sqlDeleteAllProduct) {
            echo "<script>alert('Delete All Successfully!')</script>";
        } else {
            echo "Error deleting all records: " . mysqli_error($connection);
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styleProducts.css">
    <link rel="stylesheet" href="cart.css">
</head>
<body>
    <div class="main">

        <div class="accounts">
            <span>Username: <?php echo $loginUser['username']?></span>
            <span>Email: <?php echo $loginUser['email']?></span>
            <div class="buttons">
                <a href="login.php"><button class="btn" id="btn-login">Login</button></a>
                <a href="register.php"><button class="btn" id="btn-register">Register</button></a>
                <a href="logout.php"><button class="btn" id="btn-logout">Logout</button></a>
            </div>
        </div>

        <h2>LATEST PRODUCTS</h2>

        <div class="product">
            <?php 
                $queryProducts = "SELECT * FROM tblproducts";
                $sqlProducts = mysqli_query($connection, $queryProducts);
                if(mysqli_num_rows($sqlProducts) > 0){
                    while($result_products = mysqli_fetch_assoc($sqlProducts)){
            ?>
                    <form action="" method="POST" class="products">
                        <img src="Image/<?php echo $result_products['image']?>" alt="image">
                        <h3><?php echo $result_products['name']?></h3>
                        <p><?php echo $result_products['price']?></p>
                        <input type="number" name="product_quantity" value="1",min="1" id="quantity">                        
                        <input type="hidden" name="product_image" value="<?php echo $result_products['image']?>">
                        <input type="hidden" name="product_price" value="<?php echo $result_products['price']?>">
                        <input type="hidden" name="product_name" value="<?php echo $result_products['name']?>">
                        <input type="submit" name="add_to_cart" value="Add to cart" id="addToCart">
                    </form>
            <?php 
                    };
                };
            ?>
        </div>

        <h2>SHOPPING CART</h2>

        <div class="shopping-cart">
            <table>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Delete</th>
                </tr>
                
                    <?php
                        $grandTotal = 0;
                        $queryShowCart = "SELECT * FROM $tableName";
                        $sqlShowCart = mysqli_query($connection, $queryShowCart);
                        if(mysqli_num_rows($sqlShowCart) > 0){
                            while($cartData = mysqli_fetch_assoc($sqlShowCart)){                  
                    ?>
                    
                    <tr>
                        <td><img src="Image/<?php echo $cartData['image']?>" alt="" style="height: 120px; width: 180px"></td>
                        <td><h4><?php echo $cartData['name']?></h4></td>
                        <td><p>₱<?php echo $cartData['price'] . ".00"?></p></td>
                        <td>
                            <form action="" method="POST">
                                <input type="number" name="update_quantity" id="update_quantity" value="<?php echo $cartData['quantity']?>">
                                <input type="hidden" name="update_id" value="<?php echo $cartData['id']?>">
                                <input type="submit" name="update" id="update" value="update">
                            </form>
                        </td>
                        <td>₱<?php
                                $total = (float)$cartData['price'] * (float)$cartData['quantity'];
                                $grandTotal += $total;
                                echo $total . ".00";
                                ?>
                        </td>
                        <td>
                            <form action="" method="POST">
                                <input type="hidden" name="delete_id" value="<?php echo $cartData['id']?>">
                                <input type="submit" name="delete" id="delete" value="Delete">
                            </form>
                        </td>
                    </tr>
                    <?php 
                            };
                        };
                    ?>
                    <tr>
                        <td></td>
                        <td><p>Grand Total</p></td>
                        <td></td>
                        <td></td>
                        <td><p>₱<?php echo $grandTotal . ".00";?></p></td>
                        <td>
                            <form action="" method="POST">
                                <input type="submit" name="delete_all" value="Delete All" id="deleteALL">
                            </form>
                        </td>
                    </tr>
            </table>
        </div>
    </div>
</body>
</html>