<?php
    require('BackEnd/database.php');
    session_start();
    if(empty($_SESSION['status']) || $_SESSION['status'] == "invalid"){
        header('location: login.php');
    }
    if($_SESSION['User'] && $_SESSION['User'] == 'admin'){
        if(isset($_POST['submit'])){
            $student_id = $_POST['studentno'];
            $student_name = $_POST['studentname'];
            $student_age = $_POST['studentage'];
            $student_sex = $_POST['studentsex'];
            $student_course = $_POST['studentcourse'];
            $student_address = $_POST['studentaddress'];
            $student_email = $_POST['studentemail'];
            $student_phone = $_POST['studentphone'];
            $guardian_name = $_POST['guardianname'];
            $guardian_relationship = $_POST['guardianrelationship'];
            $guardian_email = $_POST['guardianemail'];
            $guardian_phone = $_POST['guardianphone'];
            
            $username = $_POST['username'];
            $password = $_POST['password'];

            $queryInsert = "INSERT INTO students 
                        (student_id, student_name, student_age, student_sex, student_course, 
                        student_address, student_email, student_phone, guardian_name, guardian_relationship, 
                        guardian_email, guardian_phone, username, password)
                        VALUES 
                        ('$student_id', '$student_name', '$student_age', '$student_sex', '$student_course', 
                        '$student_address', '$student_email', '$student_phone', '$guardian_name', '$guardian_relationship', 
                        '$guardian_email', '$guardian_phone', '$username', '$password')";

            $sqInsert = mysqli_query($connection, $queryInsert);
            if ($sqInsert) {
                echo "<script>alert('Insert Successfully')</script>";
            } else {
                echo "<script>alert('Insert Failed: " . mysqli_error($connection) . "')</script>";
            }
        }
    }else{
        header('location: student-profile-only.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link rel="stylesheet" href="Styles/sidebar-header.css">
    <style>
        .container-add-sdudent{
            font-family: trebuchet MS;
            padding: 10px;
        }
        h3{
            margin: 5px;
        }
        h4{
            margin-bottom: 10px;
            color: red;
            border-bottom: 1px solid black;
            font-size: 25px;
        }
        .add-student{
            color: black;
            border: 2px solid black;
            border-radius: 0;
            width: 95%;
            height: auto;
            padding: 20px;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .name-and-input{
            display: flex;
            flex-direction: column;
            gap: 5px;
        }
        .student-detail{
            border: none;
            display: flex;
            gap: 20px;
        }
        .parent-detail{
            display: flex;
            flex-direction: row;
            gap: 20px;
        }
        .add-student input, select{
            border: 1px solid black;
            padding: 10px;
            width: 240px;
        }
        label{
            color: black;
        }
        #submit{
            padding: 10px 10px;
            width: 300px;
            background-color: #3a86ff;
            border: none;
            color: white;
            font-weight: bold;
        }
        #submit:hover{
            color: gray;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php include('sidebar.php')?>
        <div class="main">
            <?php include('header.php')?>
            <div class="container-add-sdudent">
                <h3>Add Student</h3>
                <form action="" class="add-student" method="POST">
                    <h4>Student Details</h4>
                    <div class="student-detail">
                        <div class="name-and-input">
                            <label for="studentno">Student No.</label>
                            <input type="text" name="studentno" placeholder="00001">
                        </div>
                        <div class="name-and-input">
                            <label for="studentname">Student Name</label>
                            <input type="text" name="studentname" placeholder="Name">
                        </div>
                        <div class="name-and-input">
                            <label for="studentage">Age</label>
                            <input type="text" name="studentage" placeholder="Age">
                        </div>
                        <div class="name-and-input">
                            <label for="studentsex">Sex</label>
                            <select name="studentsex" id="">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="student-detail">
                    <div class="name-and-input">
                            <label for="studentcourse">Course</label>
                            <input type="text" name="studentcourse" placeholder="Course">
                        </div>
                        <div class="name-and-input">
                            <label for="studentaddress">Address</label>
                            <input type="text" name="studentaddress" placeholder="address">
                        </div>
                        <div class="name-and-input">
                            <label for="studentemail">Email</label>
                            <input type="text" name="studentemail" placeholder="Email">
                        </div>
                        <div class="name-and-input">
                            <label for="studentphone">Phone No</label>
                            <input type="number" name="studentphone" placeholder="Phone No.">
                        </div>
                    </div>
                    <h4>Guardian Details</h4>
                    <div class="parent-detail">
                        <div class="name-and-input">
                            <label for="guardianname">Guardian Name</label>
                            <input type="text" name="guardianname" placeholder="Guardian Name">
                        </div>
                        <div class="name-and-input">
                                <label for="guardianrelationship">Relationship</label>
                                <select name="guardianrelationship" id="">
                                <option value="parent">Parent</option>
                                    <option value="grandparent">Grandparent</option>
                                    <option value="sibling">Sibling</option>
                                    <option value="relative">Relative</option>
                                    <option value="legalguardian">Legal Guardian</option>
                                    <option value="fosterparent">Foster Parent</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        <div class="name-and-input">
                            <label for="guardianemail">Email</label>
                            <input type="text" name="guardianemail" placeholder="Email">
                        </div>
                        <div class="name-and-input">
                            <label for="guardianphone">Phone No</label>
                            <input type="number" name="guardianphone" placeholder="Phone No.">
                        </div>
                    </div>
                    <div class="name-and-input">
                            <label for="username">Username</label>
                            <input type="text" name="username" placeholder="Username">
                    </div>
                    <div class="name-and-input">
                            <label for="password">Password</label>
                            <input type="password" name="password" placeholder="Password">
                    </div>
                    <input type="submit" name="submit" value="Submit" id="submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>