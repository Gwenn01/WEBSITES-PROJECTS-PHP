<?php 
     require('BackEnd/database.php');
     session_start();
    
     if(empty($_SESSION['status']) || $_SESSION['status'] == "invalid"){
         header('location: login.php');
     }
     if($_SESSION['User'] && $_SESSION['User'] == 'student'){
        header('location: student-profile-only.php');
     }

     if(isset($_POST['edit'])){
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
            
        $queryUpdate = "UPDATE students 
        SET student_name = '$student_name', 
            student_age = '$student_age', 
            student_sex = '$student_sex', 
            student_course = '$student_course', 
            student_address = '$student_address', 
            student_email = '$student_email', 
            student_phone = '$student_phone', 
            guardian_name = '$guardian_name', 
            guardian_relationship = '$guardian_relationship', 
            guardian_email = '$guardian_email', 
            guardian_phone = '$guardian_phone'
        WHERE student_id = '$student_id'";

        $sqlUpdate = mysqli_query($connection, $queryUpdate);

        if ($sqlUpdate) {
            echo "<script>alert('Update Successfully')</script>";
        } else {
            echo "<script>alert('Update Failed: " . mysqli_error($connection) . "')</script>";
        }
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
            require('sidebar.php');
        ?>
        <div class="main">
        <?php
            require('header.php');
        ?>
        <?php 
        $querySelect = "SELECT * FROM students";
        $slqSelect = mysqli_query($connection, $querySelect);
        if(mysqli_num_rows($slqSelect)>0){
            while($result = mysqli_fetch_assoc($slqSelect)){
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
                                <input type="text" name="studentname" placeholder="Name" value="<?php echo $result['student_name']?>">
                            </div>
                            <div class="name-and-input">
                                <label for="studentage">Age</label>
                                <input type="text" name="studentage" placeholder="Age" value="<?php echo $result['student_age']?>">
                            </div>
                            <div class="name-and-input">
                                <label for="studentsex">Sex</label>
                                <select name="studentsex" id="">
                                    <option><?php echo $result['student_sex']?></option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="student-detail">
                        <div class="name-and-input">
                                <label for="studentcourse">Course</label>
                                <input type="text" name="studentcourse" placeholder="Course" value="<?php echo $result['student_course']?>">
                            </div>
                            <div class="name-and-input">
                                <label for="studentaddress">Address</label>
                                <input type="text" name="studentaddress" placeholder="address" value="<?php echo $result['student_address']?>">
                            </div>
                            <div class="name-and-input">
                                <label for="studentemail">Email</label>
                                <input type="text" name="studentemail" placeholder="Email" value="<?php echo $result['student_email']?>">
                            </div>
                            <div class="name-and-input">
                                <label for="studentphone">Phone No</label>
                                <input type="number" name="studentphone" placeholder="Phone No." value="<?php echo $result['student_phone']?>">
                            </div>
                        </div>
                        <h4>Guardian Details</h4>
                        <div class="parent-detail">
                            <div class="name-and-input">
                                <label for="guardianname">Guardian Name</label>
                                <input type="text" name="guardianname" placeholder="Guardian Name" value="<?php echo $result['guardian_name']?>">
                            </div>
                            <div class="name-and-input">
                                    <label for="guardianrelationship">Relationship</label>
                                    <select name="guardianrelationship" id="">
                                    <option><?php echo $result['guardian_relationship']?></option>
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
                                <input type="text" name="guardianemail" placeholder="Email"  value="<?php echo $result['guardian_email']?>">
                            </div>
                            <div class="name-and-input">
                                <label for="guardianphone">Phone No</label>
                                <input type="number" name="guardianphone" placeholder="Phone No." value="<?php echo $result['guardian_phone']?>">
                            </div>
                        </div>
                        <input type="submit" name="edit" value="Edit" id="submit">
                  </form>
            </div>
        <?php 
            }
        }
        ?>
    </div>
</body>
</html>