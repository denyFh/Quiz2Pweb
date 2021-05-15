<?php
    session_start();
    session_destroy();
    $msg = "Logout Berhasil.";
    echo "<script>alert('$msg'); document.location='login.php'</script>";

    if (isset($_COOKIE["username"]) AND isset($_COOKIE["password"])) {
        setcookie("username", '', time() + (60 * 1), "/");
        setcookie("password", '', time() + (60 * 1), "/");
    }
?>