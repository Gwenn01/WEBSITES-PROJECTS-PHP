<?php
    if(isset($_POST['yes'])){
        session_start();
        $_SESSION['status'] = 'invalid';
        session_unset();
        header('location: login.php');
    }
    if(isset($_POST['no'])){
        header('location: students-profile.php');
    }
   
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <style>
        .container{
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container form{
            height: 180px;
            width: 400px;
            border: 2px solid black;
            border-radius: 10px;
            box-shadow: 0 0 10px; 
            background-color: #415a77;
            color: white;
        }
        p{
            font-size: 30px;
        }
        input{
            margin: 20px;
            padding: 10px 10px;
            width: 100px;
            background-color: #3a86ff;
            border: none;
            color: white;
            font-weight: bold;
        }
        input:hover{
            color: gray;
        }
        #yes{
            background-color: #d62828;
        }
        #no{
            background-color: #219ebc;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="" method="POST">
            <center>
            <p>Do you really want to logout?</p>
            <input type="submit" name="yes" value="Yes" id="yes">
            <input type="submit" name="no" value="No" id="no">
            </center>
        </form>
    </div>
</body>
</html>