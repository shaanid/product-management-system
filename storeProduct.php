<?php
include_once 'config.php';

$name = $_POST['name'];
$price = $_POST['price'];

$query = "INSERT INTO products (name, price) VALUES ('$name', '$price')";

$result = mysqli_query($con,$query);
if($result){
    echo "Product Stored succssfully";
}else{
    echo "something went wrong";
}
?>
