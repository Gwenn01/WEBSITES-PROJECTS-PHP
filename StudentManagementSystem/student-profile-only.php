<?php
    require('BackEnd/database.php');
    session_start();
   
    if(empty($_SESSION['status']) || $_SESSION['status'] == "invalid"){
        header('location: login.php');
    }
    if($_SESSION['User'] && $_SESSION['User'] == 'admin'){
        header('location: students-profile.php');
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>
    <link rel="stylesheet" href="Styles/sidebar-header.css">
    <style>
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
            color: blue;
            border-bottom: 1px solid black;
            font-size: 25px;
        }
        .add-student{
            color: black;
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
    </style>
</head>
<body>
    <div class="container">
        <?php 
            require('sidebar-student.php');
        ?>
        <div class="main">
        <?php 
        if($_SESSION['UserData']){
            $result = $_SESSION['UserData'];
        ?>
            <div class="container-add-sdudent">
                    <form action="" class="add-student" method="POST">
                        <h4>Student Details</h4>
                        <div class="student-detail">
                            <div class="name-and-input">
                                <label for="studentno">Student No.</label>
                                <input type="text" name="studentno" placeholder="00001" value="<?php echo $result['student_id']?>" readonly>
                            </div>
                            <div class="name-and-input">
                                <label for="studentname">Student Name</label>
                                <input type="text" name="studentname" placeholder="Name" value="<?php echo $result['student_name']?>" readonly>
                            </div>
                            <div class="name-and-input">
                                <label for="studentage">Age</label>
                                <input type="text" name="studentage" placeholder="Age" value="<?php echo $result['student_age']?>" readonly>
                            </div>
                            <div class="name-and-input">
                                <label for="studentsex">Sex</label>
                                <select name="studentsex" id="" readonly>
                                    <option><?php echo $result['student_sex']?></option>
                                </select>
                            </div>
                        </div>
                        <div class="student-detail">
                        <div class="name-and-input">
                                <label for="studentcourse">Course</label>
                                <input type="text" name="studentcourse" placeholder="Course" value="<?php echo $result['student_course']?>" readonly>
                            </div>
                            <div class="name-and-input">
                                <label for="studentaddress">Address</label>
                                <input type="text" name="studentaddress" placeholder="address" value="<?php echo $result['student_address']?>" readonly>
                            </div>
                            <div class="name-and-input">
                                <label for="studentemail">Email</label>
                                <input type="text" name="studentemail" placeholder="Email" value="<?php echo $result['student_email']?>" readonly>
                            </div>
                            <div class="name-and-input">
                                <label for="studentphone">Phone No</label>
                                <input type="number" name="studentphone" placeholder="Phone No." value="<?php echo $result['student_phone']?>" readonly>
                            </div>
                        </div>
                        <h4>Guardian Details</h4>
                        <div class="parent-detail">
                            <div class="name-and-input">
                                <label for="guardianname">Guardian Name</label>
                                <input type="text" name="guardianname" placeholder="Guardian Name" value="<?php echo $result['guardian_name']?>" readonly>
                            </div>
                            <div class="name-and-input">
                                    <label for="guardianrelationship">Relationship</label>
                                    <select name="guardianrelationship" id="" readonly>
                                    <option><?php echo $result['guardian_relationship']?></option>
                                    </select>
                                </div>
                            <div class="name-and-input">
                                <label for="guardianemail">Email</label>
                                <input type="text" name="guardianemail" placeholder="Email"  value="<?php echo $result['guardian_email']?>" readonly>
                            </div>
                            <div class="name-and-input">
                                <label for="guardianphone">Phone No</label>
                                <input type="number" name="guardianphone" placeholder="Phone No." value="<?php echo $result['guardian_phone']?>" readonly>
                            </div>
                        </div>
                  </form>
            </div>
        <?php 
        }
        ?>
    </div>
</body>
</html>