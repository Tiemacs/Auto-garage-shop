 <?php
$sname="localhost";
$uname="root";
$password="";
$dbname="mydatabase2023";

$conn=mysqli_connect($sname,$uname,$password,$dbname);

if(!$conn) {
    echo "connection failed!";
}
?>