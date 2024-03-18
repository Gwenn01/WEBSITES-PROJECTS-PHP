<?php 
    require('BackEnd/database.php');
    session_start();
    // the bottons function
    $isSearch = false;
    $foodcode = "";
    $foodname = "";
    $foodprice = "";
    $foodimage = "";
    if(isset($_POST['find'])){
        $search = $_POST['search'];
        $querySearch = "SELECT * FROM products WHERE foodcode = '$search' OR foodname = '$search'"; 
        $sqlSearch = mysqli_query($connection, $querySearch);
        if(mysqli_num_rows($sqlSearch)>0){
            $searchData = mysqli_fetch_assoc($sqlSearch);
            $foodcode = $searchData['foodcode'];
            $foodname =  $searchData['foodname'];
            $foodprice =  $searchData['foodprice'];
            $foodimage =  $searchData['foodimage'];
        }
        $isSearch = true;
    }
    if(isset($_POST['save'])){
        $foodcode = $_POST['food-code'];
        $foodname = $_POST['food-name'];
        $foodprice = $_POST['food-price'];
        $foodimage = $_POST['food-image'];

        $queryInsert = "INSERT INTO products (id, foodcode, foodname, foodprice, foodimage) VALUES (null, '$foodcode', '$foodname', '$foodprice', '$foodimage')";
        $sqlInsert = mysqli_query($connection, $queryInsert);

        if($sqlInsert){
            echo "<script>alert('Insert Successfully')</script>";
        }else{
            echo "<script>alert('Insert Failed')</script>";
        }
    }
    if(isset($_POST['edit'])){
        $foodcode = $_POST['food-code'];
        $foodname = $_POST['food-name'];
        $foodprice = $_POST['food-price'];
        $foodimage = $_POST['food-image'];

        if(!empty($foodcode) && !empty($foodname) && !empty($foodprice) && !empty($foodimage)){
            $queryUpdate = "UPDATE products SET foodcode = '$foodcode', foodname = '$foodname', foodprice = '$foodprice', foodimage = '$foodimage' WHERE foodcode = '$foodcode'";
            $sqlUpdate = mysqli_query($connection, $queryUpdate);
            if($sqlUpdate){
                echo "<script>alert('Update Successfully')</script>";
            }else{
                echo "<script>alert('Update Failed')</script>";
            }
            
        }else{
            echo "<script>alert('Please Fill the Blank')</script>";
        }
    }
    if(isset($_POST['delete'])){
        $foodcode = $_POST['food-code'];
        $foodname = $_POST['food-name'];
        $foodprice = $_POST['food-price'];
        $foodimage = $_POST['food-image'];

        $queryDelete = "DELETE FROM products WHERE foodcode = '$foodcode' OR foodname = '$foodname' OR foodprice = '$foodprice' OR foodimage = '$foodimage'";
        $sqlDelete = mysqli_query($connection, $queryDelete);

        if($sqlDelete){
            echo "<script>alert('Delete Successfully')</script>";
        }else{
            echo "<script>alert('Delete Failed')</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant POS</title>
    <style>
        .main{
            background-color: #778da9;
            font-family: trebuchet MS;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 50px;
        }
        .manage-food{
            width: 100%;
            border-bottom: 3px solid black;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .form-search{
            background-color: white;
            width: 500px;
            height: 40px;
            display: flex;
            border: 2px solid black;
            border-radius: 10px;
        }
        .form-search input{
            flex: 1;
            border: none;
            outline: none;
        }
        .form-search #find{
            padding: 10px;
            border: none;
            outline: none;
            letter-spacing: 2px;
            background-color: #0077b6;
            cursor: pointer;
            transition: all ease 1s;
            border-top-right-radius: 8px;
            border-bottom-right-radius: 8px;
        }
        .form-search #find:hover{
            background-color: rgb(16, 16, 16);
            color: white;
        }
        .form-search i{
            align-self: center;
            padding: 5px 5px;
        }
        .icon{
            height: 40px;
            width: 40px;
        }
        .form-submit{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            font-weight: bold;
        }
        .form-submit input{
            padding: 10px 10px;
            width: 200px;
            margin: 10px;
            border: 2px solid black;
        }
        .btn{
            border-radius: 10px;
            height: 50px;
            color: white;
        }
        #save{
            background-color: #0077b6;
        }
        #edit{
            background-color: #f77f00;
        }
        #delete{
            background-color: #d62828;
        }
        .btn:hover{
            color: gray;
        }
        .food-list{
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }
        .food-list table{
            margin-top: 20px;
            width: 100%;
            border: 1px solid black;
        }
        .food-list table th{
            border: 2px solid black;
            padding: 10px 50px;
        }
        #product-img{
            height: 50px;
            width: 50px;
        }
    </style>
</head>
<body>
    <?php require('header.php')?>
    <div class="main">
        <div class="manage-food">
            <h2>Manage Restaurant</h2>
            <form action="" method="POST" class="form-search">
                <i><img src="Image/search-icon.png" alt="icon" class="icon"></i>
                <input type="text" name="search">
                <input type="submit" name="find" value="Find" id="find">
            </form>
            <form action="" method="POST" class="form-submit" enctype="multipart/form-data">
                <div class="inputs">
                    <label for="food-code">Food Code</label>
                    <input type="text" name="food-code" value="<?php echo $foodcode?>">
                </div>
                <div class="inputs">
                    <label for="food-name">Food Name</label>
                    <input type="text" name="food-name" value="<?php echo $foodname?>">
                </div>
                <div class="inputs">
                    <label for="food-price">Food Price</label>
                    <input type="text" name="food-price" value="<?php echo $foodprice?>">
                </div>
                <div class="inputs">
                    <label for="food-image">Food Image</label>
                    <input type="text" name="food-image" value="<?php echo $foodimage?>">
                </div>
                <div class="inputs">
                    <input type="submit" name="save" value="SAVE" id="save" class="btn">
                    <input type="submit" name="edit" value="EDIT" id="edit" class="btn">
                    <input type="submit" name="delete" value="DELETE" id="delete" class="btn">
                </div>
            </form>
        </div>
        <div class="food-list">
            <table>
                <tr class="row">
                    <th>#</th>
                    <th>Image</th>
                    <th>Food Code</th>
                    <th>Food Name</th>
                    <th>Price</th>
                </tr>
                <?php 
                    $querySelect = "SELECT * FROM products";
                    $sqlSelect = mysqli_query($connection, $querySelect);
                    $count = 1;
                    if(mysqli_num_rows($sqlSelect) > 0){
                        while($result = mysqli_fetch_assoc( $sqlSelect)){
                ?>
                <tr>
                    <th><?php echo $count;?></th>
                    <th><img src="<?php echo "Products/". $result['foodimage'];?>" alt="product-img" id="product-img"></th>
                    <th><?php echo $result['foodcode'];?></th>
                    <th><?php echo $result['foodname'];?></th>
                    <th><?php echo $result['foodprice'];?></th>
                </tr>
                <?php
                    $count++;
                        }
                        
                    }
                ?>
            </table>
        </div>
    </div>
</body>
</html>