<?php
include "conn.php";

if(isset($_POST['update'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $price=$_POST['price'];
    $image=$_FILES['image'];
    $img_location=$_FILES['image']['tmp_name'];
    $img_name=$_FILES['image']['name'];
    $img_des = "image/".$img_name;
    move_uploaded_file($img_location, 'image/'.$img_name);

    $sql="UPDATE `tbcrud` SET `name`='$name',`price`='$price',`image`='$img_des' WHERE  id='$id'";
    mysqli_query($con,$sql);
    header('location:table.php');
}
?>