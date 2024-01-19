<?php 
    require('BackEnd/database.php');
    session_start();
    $validate = "valid";
    $validateText = "";
    if(empty($_SESSION['status']) || $_SESSION['status'] == "invalid"){
        $_SESSION['status'] = "invalid";
    }else{
        header('location: index.php');
    }
    if(isset($_POST['login'])){
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        $queryAdmins = "SELECT * FROM admins WHERE username = '$username'";
        $sqlAdmins = mysqli_query($connection, $queryAdmins);
        $queryStudents = "SELECT * FROM students WHERE username = '$username'";
        $sqlStudents = mysqli_query($connection, $queryStudents);

        if(mysqli_num_rows($sqlAdmins) > 0){
            $adminData = mysqli_fetch_assoc($sqlAdmins);
            if($adminData['password'] == $password){
                $_SESSION['User'] = 'admin';
                $_SESSION['UserData'] = $adminData;
                $_SESSION['status'] = 'valid';
                header('location: index.php');
            }else{
                $validate = "invalid";
                $validateText = "Invalid Password!!";
            }
        }else if(mysqli_num_rows($sqlStudents) > 0){
            $studentData = mysqli_fetch_assoc($sqlStudents);
            if($password == $studentData['password']){
                $_SESSION['User'] = 'student';
                $_SESSION['UserData'] = $studentData;
                $_SESSION['status'] = 'valid';
                header('location: student-profile-only.php');
            }else{
                $validate = "invalid";
                $validateText = "Invalid Password!!";
            }
        }else{
            $validate = "invalid";
            $validateText = "Invalid Username!!";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="Styles/login.css">
</head>
<body>
    <div class="main">
        <form action="" method="POST">
            <div class="logos">
                <img src="Image/login-logo.png" alt="logo">
                <h2>EDUCATION</h2>
            </div>
            <div class="login">
                <h1>Welcome</h1>
                <div class="<?php echo $validate?>">
                    <?php echo $validateText?>
                </div>
                <input type="text" name="username" placeholder="Username or Student ID" class="login-input" require>
                <input type="Password" name="password" placeholder="Password" class="login-input" require>
                <input type="submit" name="login" value="Login" class="login-btn">
            </div>
            <span><a href="forget-password.php">Forget password?</a></span>
        </form>
    </div>
</body>
</html>