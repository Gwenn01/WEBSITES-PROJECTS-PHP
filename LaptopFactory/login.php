<?php
session_start(); 
    require('Backend/database.php');
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $username = $_POST['username'];
        $password = $_POST['password'];
      
        if(!empty($username) && !empty($password)){
            $queryRead = "SELECT * from tbliteproject where username = '$username' limit 1";
            $sqlRead = mysqli_query($con, $queryRead);
            if($sqlRead && mysqli_num_rows($sqlRead)){
                $userdata = mysqli_fetch_assoc($sqlRead);
                $jsonString = json_encode($userdata);
                if ($userdata['password'] == $password){
                    $_SESSION['user_data'] = $userdata;
                    header('location: index.php');
                }
            }else{
                echo "<script>alert('Invalid Username or Password!');</script>";
            }  
        }    
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login-signup.css">
    <style>
        .title{
            color: white;
            margin-bottom: 50px;
        }
        .title h1{
            font-size: 50px;
            letter-spacing: 10px;
        }
        .title p{
            text-align: center;
        }
    </style>
</head>

<body>
    
    <div class="container">
    <div class="title">
        <h1>LAPTOPS FACTORY</h1>
        <p>Please sign up before entering our shop.</p>
    </div>
        <form method="POST" id="login">
            <h2>Login</h2>
            <div class="errors"></div>
            <input type="text" name="username" placeholder="Username">
            <div class="errors"></div>
            <input type="password" name="password" placeholder="Password">
            <input type="submit" name="login" value="Log in" id="login-btn">
            <span>Not registered?<a href="signin.php">Create an account</a></span>
        </form>
    </div>
</body>
</html>