<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="dashboard">

        <?php
        session_start();
        if (isset($_SESSION['username'])) {
            echo "Welcome, " . $_SESSION['username'] . "!<br>";
            echo "<a href='logout.php'>Logout</a>";
        } else {
            header("Location: login.html");
        }
        ?>

    </div>
</body>

</html>