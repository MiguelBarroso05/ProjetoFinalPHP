<?php $id = $_REQUEST['id'];

include 'Connections/config.php';

$q = mysqli_query($conn, "SELECT id, name FROM category WHERE id = '$id'");
$a = mysqli_fetch_array($q);

?>
<div class="container  mt-5 ">
    <div class="d-flex " style="flex-direction: column; align-items: center">
        <div>
            <h4>Update Category</h4>
        </div>
        <form style="width: 100%; max-width: 400px;" method="post">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input name="name" value="<?php echo $a['name'] ?>" type="text" class="form-control" id="id_CategoryName" aria-describedby="emailHelp">
            </div>

            <button name="updateCategory_submit" type="submit" class="btn btn-primary">Update</button>
            <?php if (isset($_POST["updateCategory_submit"])) {
                updateCategory($_POST['id'], $_POST['name']);
            } ?>

        </form>
    </div>
</div>