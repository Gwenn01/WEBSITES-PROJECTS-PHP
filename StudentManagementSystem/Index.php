<?php
    require('BackEnd/database.php');
    session_start();
    $totalStudent = 0;
    $maleStudent = 0;
    $femaleStudent = 0;
    if(empty($_SESSION['status']) || $_SESSION['status'] == "invalid"){
        header('location: login.php');
    }else{
        if($_SESSION['User'] && $_SESSION['User'] == 'admin'){
            $queryCountAll = "SELECT * FROM students";
            $sqlCountAll = mysqli_query($connection, $queryCountAll);

            while($result = mysqli_fetch_assoc($sqlCountAll)){
                if($result['student_sex'] == 'Male'){
                    $maleStudent += 1;
                }
                if($result['student_sex'] == 'Female'){
                    $femaleStudent += 1; 
                }
                $totalStudent += 1;
            }
        }else{
            header('location: student-profile-only.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard</title>
    <link rel="stylesheet" href="Styles/sidebar-header.css">
    <style>
        .container-dashboard{
             display: flex;
        }
        .total-student, .total-male-student, .total-female-student  {
            border: 1px solid black;
            box-shadow: 0 0 10px;
            height: 180px;
            width: 350px;
            margin: 18px;
            display: flex;
            flex-direction: column;
            gap: 20px;
            justify-content: space-between;
            color: white;
        }
        .total-student{
            background-color: #219ebc;
        }
        .total-male-student{
            background-color: #2a9d8f;
        }
        .total-female-student{
            background-color: #0077b6;
        }
        .details{
            padding: 20px;
        }
        .details-dashboard-input{
            width: 100%;
            height: 30px;
            cursor: pointer;
            background-color: #3a86ff;
            color: white;
            border: none;
        }
        .details-dashboard-input:hover{
            color: gray;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php include('sidebar.php')?>
        <div class="main">
            <?php include('header.php')?>
            <div class="container-dashboard">
                <div class="total-student">
                    <div class="details">
                        <h2><?php echo $totalStudent;?></h2>
                        <p>Total Stduents</p>
                    </div>
                    <form action="manage-student.php"  method="POST" class="form-dashboard">
                        <input type="hidden" name="studentShow" value="totalStudent">
                        <input type="submit" name="submit" value="More Info" class="details-dashboard-input">
                    </form>
                </div>
                
                <div class="total-male-student">
                    <div class="details">
                        <h2><?php echo $maleStudent;?></h2>
                        <p>Total Male Stduents</p>
                    </div>
                    <form action="manage-student.php"  method="POST" class="form-dashboard">
                    <input type="hidden" name="studentShow" value="maleStudent">
                        <input type="submit" name="submit" value="More Info" class="details-dashboard-input">
                    </form>
                </div>
                <div class="total-female-student">
                    <div class="details">
                        <h2><?php echo $femaleStudent;?></h2>
                        <p>Total Female Stduents</p>
                    </div>
                    <form action="manage-student.php"  method="POST" class="form-dashboard">
                    <input type="hidden" name="studentShow" value="femaleStudent">
                        <input type="submit" name="submit" value="More Info" class="details-dashboard-input">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>