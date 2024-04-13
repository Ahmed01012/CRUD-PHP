<?php
include "conn.php";
$id=$_GET['id'];
$order="DELETE FROM `tbcrud` WHERE id=$id";
mysqli_query($con,$order);
header('location:table.php');
?>