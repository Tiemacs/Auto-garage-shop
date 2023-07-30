
<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN</title>
       <link rel="stylesheet" href="Style.css">

    </head>
    <body>
        <form action="index.php" method="POST"  class="form">
            <h2>LOGIN</H2>
            <?php if (isset($_GET['error'])){ ?>
                <p class="error"><?php echo $_GET['error'] ;?></p>
            <?php }?>
            <div class="form-input">

            <label>username</label>
                
            <input type="text" name="username" placeholder="User Name">
            </div>
          <div class="form-input">
          <label>Password</label>
            <input type="password" name="password" placeholder="password"><br>

          </div>
          <div class="form-input">
            
          <button type="submit">Login</button>
          </div>
        </form>

    </body>
</html>

