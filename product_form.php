<?php
include 'connection.php';

if (isset($_POST['add_product'])){
  $name = $_POST['p_name'];
  $price = $_POST['p_price'];
  $p_image = $_FILES['p_image']['name'];
  $p_image_temp_name = $_FILES['p_image']['tmp_name'];
  $p_image_folder = 'image/'.$p_image;

  $query = "INSERT INTO products (name,price,image) VALUES('$name','$price','$p_image')";
  $insert_query = mysqli_query($conn,$query);

  if ($insert_query){
    move_uploaded_file($p_image_temp_name,$p_image_folder);
    $message[] = 'Product added successfully';
    header('location:admin.php');
  }
  else{
    $message[] = 'Failed to add Product';
  }
  
}

?>
<!Doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Build with us</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
  </head>
  <body>
    <!--<?php include 'header.php' ?>--->
    <div class="form">
        <form method="POST" enctype="multipart/form-data">
            <h3>Add a New product</h3>
            <input type="text" name="p_name" placeholder="Enter product name" required>
            <input type="number" name="p_price" min="0" placeholder="Enter product price" required>
            <input type="file" name="p_image" accept="image/png, image/jpg, image/jpeg" required>
            <input type="submit" name="add_product" value="Add product" class="btn">
        </form>
    </div>

  </body>
</html>