<?php
    include 'connection.php';
    if(isset ($_POST['update_btn'])){
        $update_value = $_POST['update_quantity'];
        $update_id = $_POST['update_quantity_id'];

        $update_query = mysqli_query($conn, "UPDATE cart SET quantity='$update_value' WHERE id='$update_id'")
        or die('Query failed');

        if($update_query){
            header('location:cart.php');
        }
    }

 
?>