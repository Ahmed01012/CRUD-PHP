<?php include "header.php"; ?>


<?php include "conn.php";
$id=$_GET['id'];
$order="SELECT * FROM `tbcrud` WHERE id=$id";
$req=mysqli_query($con,$order);

$data= mysqli_fetch_array($req);



?>


<div class="container" style="margin-top:50px;">
    <form action="update1.php" method="post" enctype="multipart/form-data">
            <div class="mb-3" >
                <label for="" class="form-label">ID:</label>    
                <input type="text" name="id" value="<?php echo $data['id'] ?>" class="form-control" style="width:500px;">
            </div>
            <div class="mb-3" >
                <label for="" class="form-label">Name:</label>    
                <input type="text" name="name" value="<?php echo $data['name'] ?>" class="form-control" style="width:500px;">
            </div>
            <div class="mb-3" >
                <label for="" class="form-label">Price:</label>
                <input type="text" name="price" value="<?php echo $data['price'] ?>" class="form-control" style="width:500px;"><br>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Image:</label>
                <td><input type="file" name="image" value="<?php echo $data['image'] ?>" id="" class="form-control" style="width:500px;" ><img src="<?php echo $data['image'] ?>" width="100" height="100" alt=""></td>
            </div>
            <button class="btn btn-success" name="update">Update</button>   
        </form>
    </div>

<?php include "footer.php"; ?>
