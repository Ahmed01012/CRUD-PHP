<?php include "header.php" ?>
<?php include "conn.php" ?>
<table class="table table-bordered" >
    <tr style="text-align:center; font-size:30px; font-weight:normal;" >
        <td>Id</td>
        <td>Name</td>
        <td>Price</td>
        <td>Image</td>
        <td>Delete</td>
        <td>Update</td>
    </tr>

    <?php
        include "conn.php" ;
        $order="SELECT * FROM `tbcrud`";
        $res= mysqli_query($con,$order);
        while($row= mysqli_fetch_array($res)){
            echo "
                <tr style='text-align:center; font-size:20px;'>
                    <td>$row[id]</td>
                    <td>$row[name]</td>
                    <td>$row[price]</td>
                    <td><img src='$row[image]' width='100' height='100'></td>
                    <td><a href='delete.php? id=$row[id]'  class='btn btn-danger'>Delete</a></td>
                    <td><a href='update.php? id=$row[id]'  class='btn btn-primary'>Update</a></td>
                </tr>
            ";
        }
    ?>

<?php include "footer.php" ?>
