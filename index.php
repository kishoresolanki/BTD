<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="images/site.webmanifest">
    <link rel="stylesheet" href="css/home.css">
    <title>BTD</title>
</head>
<body>
    <section>
        <div class="container">
            <header>
                <a href="#" class="logo">BTD</a>
                <ul>
                    <?php
                    if (isset($_SESSION["useruid"])) {
                        echo "<li><a href='welcome.php'>Home</a></li>";
                        echo "<li><a href='myprofile.php'>Profile</a></li>";
                        echo "<li><a href='logout.php'>Logout</a></li>";
                        echo "<li><a href='about.php'>About</a></li>";
                    }
                    else {
                        echo "<li><a href='login.php'>Login</a></li>";
                        echo "<li><a href='signup.php'>Signup</a></li>";
                        echo "<li><a href='about.php'>About</a></li>";
                    }
                    ?>
                </ul>
            </header>
            <div class="content">
                <h2>Brain Tumor Detector</h2>

            </div>
            <p class="copyrighttext">Copyright © 2021 BTD. All Right Reserved.</p>
        </div>
    </section>
    </script>
</body>
</html>