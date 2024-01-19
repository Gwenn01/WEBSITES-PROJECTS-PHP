<?php
     if($_SESSION['UserData']){
        $loginUser = $_SESSION['UserData'];
    }
?>
<div class="sidebar">
    <div class="student-details">
        <img src="Image/login-logo.png" alt="logo">
        <p>Students Details</p>
    </div>
    <div class="profile">
        <img src="Image/account.png" alt="">
        <p><?php echo $loginUser['name'];?></p>
    </div>
    <div class="functions">
        <a href="index.php">
            <div class="icon">
                <img src="Image/dashboard.png" alt="" class="icon-img">
                <p>Dashboard</p>
            </div>
        </a>
        <a href="add-student.php">
            <div class="icon">
                <img src="Image/add-student.png" alt="" class="icon-img">
                <p>Add Students</p>
            </div>
        </a>
        <a href="students-profile.php">
            <div class="icon">
                <img src="Image/student-profile.png" alt="" class="icon-img">
                <p>Student Profile</p>
            </div>
        </a>
        <a href="manage-student.php">
            <div class="icon">
                <img src="Image/manage-student.png" alt="" class="icon-img">
                <p>Manage Student</p>
            </div>
        </a>
        <a href="logout.php">
        <div class="icon">
                <img src="Image/logout.png" alt="" class="icon-img">
                <p>Logouts</p>
        </div>
        </a>
    </div>
</div>