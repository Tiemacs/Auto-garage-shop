<?php 
include "connection.php";
if(isset($_POST['username']) && isset($_POST['password'])){
    function validate($data){
        $data=trim($data);
        $data=stripcslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
    $username = validate ($_POST['username']);
    $password = validate($_POST['password']);

    if (empty($username)){
        header("Location: login.php? error= Please input username and password");
        exit();

    }
    else if(empty($password)){
        header("Location: login.php? error= Please input password");
        exit();

    }
    else{
        $sql="SELECT* FROM users Where username='$username' AND password='$password'";
        $result=mysqli_query($conn,$sql);

        if(mysqli_num_rows($result)===1){
            $row=mysqli_fetch_assoc($result);
            print($row['Usertype']);

            if($row["Usertype"]=="user")

            {
                // print_r($result);
                header("Location: home.php");
               // echo "This is user panel";
            }
            elseif($row["Usertype"]=="admin")
            {
                //echo" This is an ADMIN PANEL";
                header("Location: admin.php");
            }

            else{
                header("Location: login.php? error= incorrect username or password");
            }
        }
       
        }



}else{
    header("Location: login.php");
    exit();
}
?>