<?php
if (isset($_SESSION['role'])) {
    checkrole($_SESSION['role']);
}   

include 'Connections/config.php';

if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $q = mysqli_query($conn, "SELECT p.*, c.name AS category 
    FROM product p 
    JOIN category c ON c.id = p.category_id 
    WHERE p.id = '$id'");
    $a = mysqli_fetch_array($q);
}
?>

<div class="container  mt-5 ">
    <div class="d-flex justify-content-center">
        <form style="width: 100%; max-width: 400px;" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input value="<?php echo $a['name'] ?>" name="product_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Price</label>
                <input value="<?php echo $a['price'] ?>" name="price" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Description</label>
                <textarea  name="description" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"><?php echo $a['description'] ?></textarea>
            </div>
            <select name="category" id="categorySelect" class="form-select mb-3" aria-label="Default select example">
                <option selected value="<?php echo $a['category_id'] ?> "><?php echo $a['category'] ?></option>
                <?php
                    getCategoriesDropdown();
                ?>
            </select>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Amount</label>
                <input value="<?php echo $a['amount'] ?>" name="amount" type="text" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <img src="./images/products/<?php echo $a['image'] ?>" alt="" width="100px" height="100px" style="margin-bottom: 10px;">
                    <div class="custom-file">
                        <input name="updateimage" type="file" class="custom-file-input" id="inputGroupFile01" accept="image/png, image/jpeg, application/pdf">
                    </div>
                </div>
            </div>
            <button name="updateProduct_submit" type="submit" class="btn btn-primary InteractiveButton">Update product</button>
        </form>
    </div>
</div>

<?php
if (isset($_POST["updateProduct_submit"], $_POST['category'])) {
    updateProduct($id, $_POST['product_name'], $_POST['category'], $_POST['price'], $_POST['description'],  $_FILES['updateimage'], $_POST['amount']);
}
?>