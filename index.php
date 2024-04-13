<?php include 'header.php'; ?>
<div class="container" style="margin-top:50px;">
    <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3" >
                <label for="" class="form-label">Name:</label>    
                <input type="text" name="name" class="form-control" style="width:500px;">
            </div>
            <div class="mb-3" >
                <label for="" class="form-label">sallary:</label>
                <input type="text" name="price" class="form-control" style="width:500px;"><br>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Image:</label>
                <input type="file" name="image" id="" class="form-control" style="width:500px;" >
            </div>
            <button class="btn btn-primary" name="upload">Upload</button>   
        </form>
    </div>
    <?php include 'insert.php'; ?>
<?php include 'footer.php'; ?>

