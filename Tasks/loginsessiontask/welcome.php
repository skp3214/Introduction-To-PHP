<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

if (time() - $_SESSION['last_login_time'] > 600) { // 600 seconds = 10 minutes
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit();
}

$_SESSION['last_login_time'] = time();
?>

<h1>Welcome, <?php echo $_SESSION['username']; ?></h1>
<p>Last login time: <?php echo date("Y-m-d H:i:s", $_SESSION['last_login_time']); ?></p>
<a href="logout.php">Logout</a>