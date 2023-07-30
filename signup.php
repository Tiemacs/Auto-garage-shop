<?php
    include 'connection.php';

    if (isset($_POST['save'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
           header("location: login.php?error=successful signup");
            exit();
        } else {
            echo "Registration Failed. Try Again" . mysqli_error($conn);
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>SIGNUP</title>
        <link rel="stylesheet" type="text/css" href="Style.css">
    </head>
    <body>
        <form action="#" method="POST">
            <h2>signup</h2>
            <?php if (isset($_GET['error'])){ ?>
                <p class="error"><?php echo $_GET['error'] ;?></p>
            <?php }?>
            <label>Username</label>
            <input type="text" name="username" placeholder="User Name">

            <label>Email</label>
            <input type="email" name="email" placeholder="Email">
        
            <label>Password</label>
            <input type="password" name="password" placeholder="Password"><br>

            <button type="submit" name="save">SIGNUP</button>
        </form>
    </body>
</html>
