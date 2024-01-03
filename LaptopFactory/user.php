<?php
    session_start(); // Start the session if it's not started already

    // Check if the user is logged in by verifying the session variable
    if (isset($_SESSION['user_data'])) {
        $loggedInUser = $_SESSION['user_data']; // Access the username stored in the session
        $jsonString = json_encode($loggedInUser);
    } else {
        exit();
    }
    // Logout logic
    if (isset($_POST['logout'])) {
        // Unset all session variables
        $_SESSION = array();

        // Destroy the session
        session_destroy();
        // Redirect to the index.php file after logout
        header("Location: index.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="user.css">
</head>
<body>
    <div class="container">
     <img src="IMAGES/Icon/account.png" alt="account" id="account">
     <h1><?php echo "Username: " . $loggedInUser['username'];?></h1>
     <h2><?php echo "Email: " . $loggedInUser['email'];?></h2>
     <h2><?php echo "Address: " . $loggedInUser['address'];?></h2>
     <form method="post" action="">
            <button type="submit" name="logout">Logout</button>
    </form>
    <a href="index.php" style="text-decoration: none; color: black">Go back</a>
    </div>
</body>
</html>