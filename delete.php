<?php
include 'connection.php';
if (isset($_GET['remove'])){
        $remove_id = $_GET['remove'];
        $res="DELETE  FROM cart WHERE id='$remove_id'";
        $sql=mysqli_query($conn,$res);
        if($sql==true){
            
         header('location: cart.php?successful');

        }else{
            header("location:cart.php?unsuccessful");
           
        }
        
        
       
    }
    ?>