<?php
    require('database.php');
    session_start();
    if(empty($_SESSION['status']) || $_SESSION['status'] == 'invalid'){
        $_SESSION['status'] = 'invalid';
    }else{
        header('location:index.php');
    }
    if(isset($_POST['register'])){
        // get the value from the user
        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $confirm = trim($_POST['confirm']);
        // check if its correct password
        if ($password ==  $confirm){
            // check if account is already exist
            $queryCheck = "SELECT * FROM tblaccount WHERE email = '$email'";
            $sqlCheck = mysqli_query($connection, $queryCheck);
            if(mysqli_num_rows($sqlCheck) < 1){
                // check if is not empty
                if(!empty($username) && !empty($email) && !empty($password)){
                    // insert all the value in a database
                    $queryInsert = "INSERT INTO tblaccount(ID, username, email, password) VALUES(null, '$username', '$email', '$password')";
                    $sqlInsert = mysqli_query($connection, $queryInsert);
                    header('location: login.php');
                    echo "<script>alert('Successfully Registered!!')</script>";
                }else{
                    echo "<script>alert('Please fill up the blank!')</script>";
                }
            }else{
                echo "<script>alert('Email Already Exist!')</script>";
            }
        }else{
            echo "<script>alert('Invalid Password!')</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="" method="POST" class="login-form">
            <h2>REGISTER NOW</h2>
            <div class="inputs">
                <input type="text" name="username"  placeholder="Enter unsername" class="box" required>
                <input type="email" name="email"  placeholder="Enter email" class="box" required>
                <input type="password" name="password"  placeholder="Enter password" class="box" required>
                <input type="password" name="confirm"  placeholder="Confirm password" class="box" required>
            </div>
            <div class="submits">
                <input type="submit" name="register" id="register">
            </div>
            <span>already have an account? <a href="login.php">login now</a></span>
        </form>
    </div>
</body>
</html>