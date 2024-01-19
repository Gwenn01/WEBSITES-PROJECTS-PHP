<?php
    require('BackEnd/database.php');
    session_start();
    if(empty($_SESSION['status']) || $_SESSION['status'] == "invalid"){
        header('location: login.php');
    }
    if($_SESSION['User'] && $_SESSION['User'] == 'admin'){
    // index determin if total male or female
    $studentStatus = 'totalStudent';
        if(isset($_POST['submit'])){
            $studentShow = $_POST['studentShow'];
            $studentStatus = $studentShow;
        }
    }else{
        header('location: student-profile-only.php');
    }

    // edit and update
    if(isset($_POST['delete'])){
        $dele_id = $_POST['edited_id'];
        $queryDelete = "DELETE FROM students WHERE student_id = '$dele_id'";
        $slqDelete = mysqli_query($connection, $queryDelete);

        if ($slqDelete) {
            echo "<script>alert('Delete Successfully')</script>";
        } else {
            echo "<script>alert('Delete Failed: " . mysqli_error($connection) . "')</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Student</title>
    <link rel="stylesheet" href="Styles/sidebar-header.css">
    <style>
        .manage-student{
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #manage-table{
            margin: 20px;
            border: 2px solid black;
            padding: 10px;
        }
        #manage-table tr th{
            background-color: gray;
        }
        #manage-table tr th, td{
            border: 2px solid black;
            padding: 5px 10px;
        }
        #manage-buttons{
            display: flex;
        }
        .manage-button{
            padding: 10px 10px;
            width: 100px;
            background-color: red;
            border: none;
            color: white;
            font-weight: bold;
            margin: 2px;
        }
        .manage-button:hover{
            color: gray;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php include('sidebar.php')?>
        <div class="main">
        <?php include('header.php')?>
        <div class="manage-student">
            <table id="manage-table">
                <tr>
                    <th>#</th>
                    <th>Student Id</th>
                    <th>Student Name</th>
                    <th>Student Email</th>
                    <th>Student Course</th>
                    <th>Actions</th>
                </tr>
                <?php
                    $queryShow = "";
                    if($studentStatus == 'maleStudent'){
                        $queryShow = "SELECT * FROM students WHERE student_sex = 'Male'";
                    }else if($studentStatus == 'femaleStudent'){
                        $queryShow = "SELECT * FROM students WHERE student_sex = 'Female'";
                    }else{
                        $queryShow = "SELECT * FROM students";
                    }
                    $sqlShow = mysqli_query($connection, $queryShow);
                    if (mysqli_num_rows($sqlShow) > 0){
                        $count = 1;
                        while($result = mysqli_fetch_assoc($sqlShow)){
                        
                ?>
                    <tr>
                        <td><?php echo $count?></td>
                        <td><?php echo $result['student_id']?></td>
                        <td><?php echo $result['student_name']?></td>
                        <td><?php echo $result['student_email']?></td>
                        <td><?php echo $result['student_course']?></td>
                        <td id="manage-buttons">
                            <form action="students-profile.php" method="POST">
                                <input type="submit" name="go-to-edit" value="EDIT" class="manage-button">
                            </form>
                            <form action="" method="POST">
                                <input type="hidden" name="edited_id" value="<?php echo $result['student_id']?>">
                                <input type="submit" name="delete" value="DELETE" class="manage-button">
                            </form>
                        </td>
                    </tr>
                <?php 
                    $count += 1;
                } }?>
            </table>
        </div>
        </div>
    </div>
</body>
</html>