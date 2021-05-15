<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css">
</head>
<?php
    session_start();
    require('dbconn.php');

    if (!isset($_SESSION['id']) OR (trim($_SESSION['id']) == '')) {
        header('location: login.php');
        exit();
    }

    $id = mysqli_query($dbconn, "SELECT * FROM login_data WHERE no = '".$_SESSION['id']."'");
    $data = mysqli_fetch_assoc($id);
?>
<body class="index-body">
    <div class="index-container">
        <div class="info">
            <h1>404</h1>
            <h2>Page Under Construction</h2>
        </div>
        <div class="button-logout">
            <input type="button" class="button" onclick="location.href='logout.php'" value="Logout">
        </div>
    </div>
    <div class="index-visitor">
        <h2>ID: <?php echo $_SESSION['id']?></h2>
        <h2>Username: <?php echo $_SESSION['username']?></h2>
    </div>
</body>
</html>