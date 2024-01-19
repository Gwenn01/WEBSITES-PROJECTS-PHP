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
        <p><?php echo $loginUser['student_name'];?></p>
    </div>
    <div class="functions">
        <a href="students-profile.php">
            <div class="icon">
                <img src="Image/student-profile.png" alt="" class="icon-img">
                <p>Student Profile</p>
            </div>
        </a>
        <a href="logout.php">
            <div class="icon">
                <img src="Image/logout.png" alt="" class="icon-img">
                <p>Logout</p>
            </div>
        </a>
    </div>
</div>