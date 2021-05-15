<body>

    <?php 

        if (isset($_POST['submit'])) {
            require('dbconn.php');
            $username = $dbconn->real_escape_string($_POST['username']);
            $pass = $dbconn->real_escape_string($_POST['pass']);
            
            $get_query = mysqli_query($dbconn, "SELECT * FROM login_data WHERE username='$username' AND password='$pass'") or die(mysqli_error($dbconn));
            
            if (mysqli_num_rows($get_query) == 0) {
                $msg = "User tidak ditemukan, Silahkan login kembali.";
                echo "<script>alert('$msg'); document.location='login.php'</script>";
            } else {
                $user = mysqli_fetch_assoc($get_query);
                if (isset($_POST['cbx'])) {
                    setcookie("username", $username, time() + (60 * 1));
                    setcookie("password", $pass, time() + (60 * 1));
                }
                session_start();
                $_SESSION['id'] = $user['no'];
                $_SESSION['username'] = $username;
                header('location: index.php');
            }
        } 
    ?>
    
</body>