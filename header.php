<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  </head>
  <body>
    <header>   
      <div class="flex">
          <a href="" class="logo">Tiemacs Garage</a>
          <div class="navbar">
          <a href="home.php">home</a>
             <a href="products.php">shop</a>
          </div>
          <?php
             $select_rows =mysqli_query($conn, "SELECT * FROM cart") or die('Query failed');
             $row_count = mysqli_num_rows($select_rows);
          ?>
          <a href="cart.php" class="cart"><i class="bi bi-cart-check-fill"></i><span><?php echo $row_count; ?></span></a>

      </div>
    </header>
  </body>
</html>