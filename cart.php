<?php 
include 'connection.php'?>
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
    <?php include 'header.php' ?>
    <div class="cart-container">
        <h1>Shopping cart</h1>
        <table>
            <thead>
                <th>image</th>
                <th>name</th>
                <th>price</th>
                <th>quantity</th>
                <th>total price</th>
                <th>action</th>
            </thead>
            <tbody>
                <?php
                $select_cart = mysqli_query($conn, "SELECT * FROM cart");
                $grand_total=0;
                if (mysqli_num_rows($select_cart)>0){
                    while($fetch_cart=mysqli_fetch_assoc($select_cart)){
                ?>
                <tr>
                    <td><img src="image/<?php echo $fetch_cart['image']; ?>"></td>
                    <td><?php echo $fetch_cart['name']; ?></td>
                    <td>$<?php echo $fetch_cart['price']; ?></td>
                    <td class="quantity">
                        <form method="POST">
                            <input type="hidden" name="update_quantity_id" value="$<?php echo $fetch_cart['id']; ?>">
                            <input type="hidden" min="1" name="update_quantity" value="<?php echo $fetch_cart['quantity']; ?>">
                            <input type="submit" name="update_btn" value="update">
                        </form>
                    </td>
                    <td>$<?php echo $sub_total = $fetch_cart['price']*$fetch_cart['quantity']; ?></td>
                    <td><a href="delete.php?remove=<?php echo $fetch_cart['id']; ?>" onclick="return confirm('remove item from cart')" class="delete-btn">remove</a></td>
                </tr>
                <?php
                    $grand_total+=$sub_total;
                    }
                }
                ?>
                <tr class="table-bottom">
                    <td><a href="products.php" class="option-btn">continue shopping</a></td>
                    <td colspan="3"><h1>total amount payable</h1></td>
                    <td style="font-weight: bold;"><?php echo $grand_total; ?></td>
                </tr>
                
            </tbody>
        </table>
        <div class="checkout-btn">
            <a href="checkout.php" class="btn" <?=($grand_total>1)?'':'disabled'?> >proceed to checkout</a>
        </div>
    </div>

  </body>
</html>