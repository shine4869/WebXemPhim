<?php ob_start(); ?>
    <h1>User Index Page</h1>
    
    <!-- <a href="/index.php?action=create">Add User</a> -->
    <?php
    session_start();

    if(isset($_SESSION['flash_message'])) {
        $message = $_SESSION['flash_message'];
        unset($_SESSION['flash_message']);
        echo $message . '<br>';
    }
    // Start the session
    //session_start();

// Include your model, view, and controller files as needed

// Assuming you have a function to check if a user is logged in
    function isUserLoggedIn() {
        return isset($_SESSION['currentUser']) && !empty($_SESSION['currentUser']);
    }

    // Your controller logic for login and logout actions
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Assuming you have login and logout functions in your controller
        if (isset($_POST['login'])) {
            // Perform login action
            // ...
        } elseif (isset($_POST['logout'])) {
            // Perform logout action
            // ...
        }
    }

    // Include your header or common HTML structure here

    // Display login or logout button based on session
    if (isUserLoggedIn()) {
        echo '<p>You have logged in</p>';
        echo '<form method="post" action="../user/logout">';
        echo '<input type="submit" name="logout" value="Logout">';
        echo '</form>';
    } else {
        echo '<p>You need to login to view content</p>';
        echo '<form method="get" action="../user/signin">';
        echo '<input type="submit" name="login" value="Login">';
        echo '</form>';
        //
    }

    ?>
    <a href="/user/create">Add User</a>
<?php $content = ob_get_clean(); ?>
<?php include (__DIR__ . '/../../../templates/layout.php'); ?>
