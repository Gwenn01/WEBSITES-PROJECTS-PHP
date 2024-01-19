<?php
    require('database.php');
    session_start();
    if(empty($_SESSION['status']) || $_SESSION['status'] == 'invalid'){
        $_SESSION['status'] = 'invalid';
    }else{
        header('location:index.php');
    }
    if (isset($_POST['login'])){
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        if(!empty($email) || !empty($password)){
            // check the data if its already registered
            $queryLogin = "SELECT * FROM tblaccount WHERE email = '$email'";
            $sqlLogin = mysqli_query($connection, $queryLogin);
            $userdata = mysqli_fetch_assoc($sqlLogin);
            if (mysqli_num_rows($sqlLogin) > 0){
                // check the pass
                if($password == $userdata['password']){
                    $_SESSION['UserData'] = $userdata;
                    $_SESSION['status'] = 'valid';
                    $name = $userdata['username'];
                    echo "<script>alert('Welcome $name')</script>"; 
                    echo "<script>window.location.href='index.php'</script>"; 
                }else{
                    echo "<script>alert('Invalid Password!')</script>";   
                    $_SESSION['status'] = 'invalid'; 
                }
            }else{
                echo "<script>alert('Invalid Email!')</script>"; 
                $_SESSION['status'] = 'invalid';
            }
        }else{
            echo "<script>alert('Please fill up the blank!')</script>";
            $_SESSION['status'] = 'invalid';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="" method="POST" class="register-form">
            <h2>LOGIN NOW</h2>
            <div class="inputs">
                <input type="email" name="email"  placeholder="Enter email" class="box">
                <input type="password" name="password"  placeholder="Enter password" class="box">
            </div>
            <div class="submits">
                <input type="submit" name="login" id="login">
            </div>
            <span>don't have a account? <a href="register.php">register now</a></span>
        </form>
    </div>
</body>
</html>