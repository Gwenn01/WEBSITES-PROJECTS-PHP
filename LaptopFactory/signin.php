<?php
    #put all the data into a database
    // call the connection
    require('Backend/database.php');
    // make a query to store all the data
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        echo "dsdjshjdhaj";
        // get all the values
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        if(!empty($username) && !empty($password) && !empty($email) && !empty($address)){
            if (!is_numeric($username)){
                $queryStore = "INSERT INTO tbliteproject  (username, password, email, address) VALUES ('$username',   '$password', '$email', '$address') ";
                $sqlStore =  $sqlCreate = mysqli_query($con, $queryStore);
                echo "<srcipt>alert('Successfully Registered!')</script>";
                header('location: login.php');
                die();
            }else{
                $invalid = "Invalid";
                echo "<srcipt>alert('Please Enter Valid Information!')</script>";
                header('location: signin.php');
            } 
        }else{
            header('location: signin.php');
        }
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="login-signup.css">
</head>

<body>
    <div class="container">
        <form  method="POST" id="signin">
            <h2>Sign in</h2>
            <div class="errors"></div>
            <input type="text" name="username" placeholder="Username" required>
            <div class="errors"></div>
            <input type="password" name="password" placeholder="Password" required>
            <div class="errors"></div>
            <input type="email" name="email" placeholder="Email" required>
            <div class="errors"></div>
            <input type="text" name="address" placeholder="Address" required>
            <input type="submit" name="login" value="Sign in" id="login-btn">
            <span>Alredy a user<a href="login.php">LOGIN</a></span>
        </form>
    </div>
</body>
</html>