<?php
include "conn.php";
if(isset($_POST['upload'])){
    $name=$_POST['name'];
    $price=$_POST['price'];
    $image=$_FILES['image'];
    $img_location=$_FILES['image']['tmp_name'];
    $img_name=$_FILES['image']['name'];
    $img_des = "image/".$img_name;
    move_uploaded_file($img_location, 'image/'.$img_name);

    $sql="INSERT INTO `tbcrud`(`name`, `price`, `image`) VALUES ('$name','$price','$img_des')";
    mysqli_query($con,$sql);
}
?>