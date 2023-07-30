<?php
include 'connection.php';

if (isset($_POST['order_btn'])) {
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $payment_method = $_POST['payment-method'];
    $address = $_POST['address'];
    $town = $_POST['town'];
    $country = $_POST['country'];
    $pin = $_POST['pin'];

    $cart_query = mysqli_query($conn, "SELECT * FROM cart");
    $product_price = array(); // Initialize an array to store product prices
    $price_total = 0;

    if (mysqli_num_rows($cart_query) > 0) {
        while ($product_item = mysqli_fetch_assoc($cart_query)) {
            $product_name[] = $product_item['name'].' ('.$product_item['quantity'].' )';
            $product_price[] = $product_item['price'] * $product_item['quantity'];
        }
    }

    $total_product = implode(',', $product_price);
    
    // Calculate the total price by iterating over the product prices
    foreach ($product_price as $price) {
        $price_total += $price;
    }

    $detail_query = mysqli_query($conn, "INSERT INTO orders(`name`, `number`, `email`, `method`, `address`, `town`, `country`, `pin`, `total_parts`, `total_price`) VALUES ('$name','$number','$email','$payment_method','$address','$town','$country','$pin','$total_product','$price_total')");

    if ($cart_query && $detail_query) {
        echo "
        <div class='order-confirm-container'>
        <div class='message-container'>
            <h3>thank you for shopping with us</h3>
            <div class='order-detail'>
                <span>".$total_product."</span>
                <span class='total'>total : $".$price_total."/-</span>
            </div>
            <div class='customer-details'>
                <p>Your name : <span>".$name."</span></p>
                <p>Your number : <span>".$number."</span></p>
                <p>Your email : <span>".$email."</span></p>
                <p>Your address : <span>".$address.",".$town.",".$country.",".$pin."</span></p>
                <p>payment method: <span>".$payment_method."</span></p>
                <p class='pay'>(*pay when product arrives*)</p>
            </div>
            <a href='products.php' class='btn'>continue shopping</a>
        </div>
    </div>
        ";
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
    
    <?php include 'header.php' ?>
    <div class="checkout-form">
        <h1>payment process</h1>
        <div class="display-oeder">
            <?php
            $select_cart=mysqli_query($conn, "SELECT * FROM cart");
            $total=0;
            $grand_total=0;
            if (mysqli_num_rows($select_cart)>0) {
                while($fetch_cart=mysqli_fetch_assoc($select_cart)) {
                    $total_price = $fetch_cart['price']* $fetch_cart['quantity'];
                    $grand_total = $total += $total_price;
            ?>
            <span><?= $fetch_cart['name']; ?>(<?= $fetch_cart['quantity']; ?>)</span>
            <?php

                   }
            }
            ?>
            <span class="grand-total">Total amount payable : $<?= $grand_total; ?>/-</span>
        </div>
        <form method="POST">
            <div class="input-field">
                <span>your name</span>
                <input type="text" name="name" placeholder="Enter your name" required>
            </div>
            <div class="input-field">
                <span>your number</span>
                <input type="number" name="number" placeholder="Enter your number" required>
            </div>
            <div class="input-field">
                <span>your email</span>
                <input type="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="input-field">
                <span>payment method</span>
                <select name="payment-method">
                    <option value="cash on delivery">cash on delivery</option>
                    <option value="credit card">credit card</option>
                    <option value="paytm">Visa</option>
                    <option value="phone pay">M Pesa</option>
                    <option value="pay pal">pay pal</option>
                </select>
            </div>
            <div class="input-field">
                <span>County</span>
                <input type="text" name="address" placeholder="e.g Kiambu." required>
            </div>
            <div class="input-field">
                <span>town</span>
                <input type="text" name="town" placeholder="e.g Nairobi." required>
            </div>
            <div class="input-field">
                <span>country</span>
                <input type="text" name="country" placeholder="e.g Kenya." required>
            </div>
            <div class="input-field">
                <span>postal code</span>
                <input type="text" name="pin" placeholder="e.g 00100." required>
            </div>
            <div class="input-field">
                <input type="submit" name="order_btn" value="order now" class="btn">   
            </div><
    </div>
   
  </body>
</html>