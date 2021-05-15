<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css">
</head>
<?php
    session_start();
    require('dbconn.php');

        if (isset($_SESSION['id'])) {
            header('location: index.php');
            exit();
        }

?>
<body class="login-body">
    <div class="main-container">
        <div class="form">
            <form action="check.php" method="POST">
                <div class="row-title">
                    <h1>
                        Login
                    </h1>
                </div>
                <div class="row-input">
                    <label for="username">Username</label>
                    <br>
                    <input type="text" name="username" id="username" placeholder="Masukkan username.." required value="<?php if (isset($_COOKIE["username"])){echo $_COOKIE["username"];}?>">
                </div>
                <div class="row-input">
                    <label for="pass">Password</label>
                    <br>
                    <input type="password" name="pass" id="pass" placeholder="Masukkan password.." required value="<?php if (isset($_COOKIE["password"])){echo $_COOKIE["password"];}?>">
                </div>
                <div class="row-extra">
                    <div class="check-box">
                        <input type="checkbox" name="cbx" id="cbx">
                        <span>
                            <label for="cbx">Remember Me</label>
                        </span>
                    </div>
                    <button type="submit" value="submit" name="submit">
                        Proceed
                    </button>
                </div>
            </form>
            <?php
		        if (isset($_SESSION['message'])){
			    echo $_SESSION['message'];
		        }
		        unset($_SESSION['message']);
	        ?>
        </div>
        <div class="image-section">
            <h1>Welcome</h1>
        </div>
    </div>
</body>
</html>