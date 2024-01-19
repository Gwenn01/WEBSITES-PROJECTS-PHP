<?php 
    require('BackEnd/database.php');
    session_start();
    if(empty($_SESSION['status']) || $_SESSION['status'] == "invalid"){
        $_SESSION['status'] = "invalid";
    }else{
        header('location: index.php');
    }

    if(isset($_POST['forget-password'])){
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        $confirm_password = trim($_POST['confirm-password']);
        $queryCheck = "SELECT * FROM students WHERE username = '$username'";
        $slqCheck = mysqli_query($connection, $queryCheck);

        if(mysqli_num_rows($slqCheck) > 0){
            if($password == $confirm_password){
                $queryChange = "UPDATE students SET password = ' $confirm_password' WHERE username = '$username'";
                $sqlChange = mysqli_query($connection,  $queryChange);
                header('location: login.php');
            }else{
                echo "<script>alert('Wrong Password!!')</script>";
            }
        }else{
            echo "<script>alert('Wrong Email!!')</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <style> 
        *{
    padding: 0%;
    margin: 0%;
        }
        body{
            font-family: trebuchet MS;
        }
        .main{
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        form{
            border: 2px solid black;
            box-shadow: 0 0 10px;
            border-radius: 10px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 30px;
        }
        .login{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 20px;
        }
        .login-input{
            padding: 10px 10px;
            width: 400px;
            border: 1px solid black;
            border-radius: 5px;
        }
        .login-btn{
            padding: 10px 10px;
            width: 150px;
            background-color: #3a86ff;
            border: none;
            color: white;
            font-weight: bold;
        }
        .login-btn:hover{
            color: gray;
        }
        form span a{
            text-decoration: none;
            color: brown;
            font-size: 15px;
        }
    </style>
</head>
<body>
<div class="main">
        <form action="" method="POST">
            <div class="login">
                <h1>Forget Password</h1>
                <input type="text" name="username" placeholder="Username or Student ID" class="login-input" require>
                <input type="Password" name="password" placeholder="Password" class="login-input" require>
                <input type="Password" name="confirm-password" placeholder="Confirm Password" class="login-input" require>
                <input type="submit" name="forget-password" value="Forget" class="login-btn">
            </div>
            <span><a href="login.php">go back?</a></span>
        </form>
    </div>
</body>
</html>
