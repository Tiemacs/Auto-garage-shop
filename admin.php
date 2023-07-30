<?php
    include 'connection.php';

    if (isset($_GET['delete'])){
        $delete_id = $_GET['delete'];
        $delete_query = mysqli_query($conn,"DELETE FROM products WHERE id=$delete_id") or die('Query failed');
        if ($delete_query) {
            $message[]='Product has been deleted successfully';
          
        }else{
            $message[]='Failed to delete product';
        }
    }

  if (isset($_POST['update_product'])){
    $update_p_id = $_POST['update_p_id'];
    $update_p_name = $_POST['update_p_name'];
    $update_p_price = $_POST['update_p_price'];
    $update_p_img = $_FILES['update_p_image']['name'];
    $update_p_img_tmp_name = $_FILES['update_p_image']['tmp_name'];
    $update_p_folder = 'Images/'.$update_p_img;

    $update_query = mysqli_query($conn, "UPDATE products SET id ='$update_p_id', name='$update_p_name', price='$update_p_price', image='$update_p_img' WHERE id = '$update_p_id'") or die('Query failed');
    if ($update_query){
        move_uploaded_file($update_p_img_tmp_name, $update_p_folder);
        $message[] = 'Product has been updated successfully';
        header('location: admin.php');
    } else {
        $message[] = 'Failed to update product';
    }
} 

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Admin panel</title>
  </head>
  <body>
      <header>   
      <div class="flex">
          <a href="" class="logo">Tiemacs Garage</a>
          <div class="navbar">
          <a href="home.php">Home</a>
            <a href="product_form.php">Add products</a>
          </div>
        
           
      </div>
          
    </header>
    
      <?php
          if (isset($message)){
             foreach ($message as $message) {
                 echo '
                     <div class="message">
                         <span>'.$message.'<i class="bi bi-x"
                             onclick="this.parentElement.style.display=`none`"></i></span>
            
                     </div>
                 ';
             }
         }
    
    ?>
    <a href="Shop.php" class="add"></a>
    <selection class= "show-product">
        <table>
            <thead>
                <th>product image</th>
                <th>product name</th>
                <th>product price</th>
                <th>action</th>
            </thead>
            <tbody>
                <?php
                $select_products = mysqli_query($conn, "SELECT * FROM products") or die('query failed');
                if (mysqli_num_rows($select_products)){
                    while ($row = mysqli_fetch_assoc($select_products)){

                        ?>
                        <tr>
                            <td><img src="image/<?php echo $row['image'] ;?>"></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['price']; ?></td>
                            <td>
                                <a href="admin.php?delete=<?php echo $row['id'] ;?>" class ="delete-btn"><i class= "bi bi-trash"
                                onclick="return confirm('Are you sure you want to delete this item')"></i>Delete</a>
                                <a href="admin.php?edit=<?php echo $row ['id'] ;?>" class="option-btn"><i class ="bi bi-pencil"></i>Update</a>
                            </td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </selection>
    <section class="edit-form">
        <?php
            if (isset($_GET['edit'])) {
                $edit_id = $_GET['edit'];
                $edit_query = mysqli_query($conn, "SELECT * FROM products WHERE id=$edit_id") or die('Query failed');
                if (mysqli_num_rows($edit_query) > 0){
                    while($fetch_edit = mysqli_fetch_assoc($edit_query)){
  
        ?>
        <form method="POST" enctype="multipart/form-data">
            <h3>update product</h3>
            <img src="image/<?php echo $fetch_edit['image']; ?>">
            <input type="hidden" name="update_p_id" value="<?php echo $fetch_edit['id']; ?>">
            <input type="text" name="update_p_name" value="<?php echo $fetch_edit['name']; ?>" required>
            <input type="number" name="update_p_price" min="0" value="<?php echo $fetch_edit['price']; ?>" required>
            <input type="file" name="p_image" accept="image/png, image/jpg, image/jpeg" required>
            <input type="submit" name="update_product" value="Update product" class="btn update">
            <input type="reset" value="cancel" class="btn cancle" id="close-edit">
        </form>
        <?php                
                    }
                }
                echo "<script>document.querySelector('.edit-form').style.display = 'block'</script>";
            }
        ?>

    </section>

    <script type="text/javascript">
        const closeBtn = document.querySelector('.close-edit')

        closeBtn.addEventListener('click',()=>{
            document.querySelector('.edit-form').style.display = 'none'
        })
    </script>

  </body>
</html>