<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User List</title>
</head>
<body>
-->
<?php ob_start(); ?>
    <h1>User List</h1>
    <ul>
        <?php foreach ($users as $user): ?>
            <li>
                <!-- <a href="/index.php?action=show&id=<?//= $user['id'] ?>"> -->
                <a href="/user/show/<?= $user['id'] ?>">
                    <?= $user['username'] ?>
                </a>
                <!-- | <a href="/index.php?action=update&id=<?//= $user['id'] ?>">Edit</a> -->
                | <a href="/user/update/<?= $user['id'] ?>">Edit</a>
                | <a href="/user/delete/<?= $user['id'] ?>">Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>
    <!-- <a href="/index.php?action=create">Add User</a> -->
    <?php
    session_start();

    if(isset($_SESSION['flash_message'])) {
        $message = $_SESSION['flash_message'];
        unset($_SESSION['flash_message']);
        echo $message . '<br>';
    }
    
    ?>
    <a href="/user/create">Add User</a>
<?php $content = ob_get_clean(); ?>
<?php include (__DIR__ . '/../../../templates/layout.php'); ?>
<!--
</body>
</html>
-->