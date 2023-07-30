<?php
if (isset($_GET['delete_all'])) {
        mysqli_query($conn, "DELETE * FROM  cart");
        header("location:cart.php?successsful");
    }
    else{
        echo"error";
    }
?>