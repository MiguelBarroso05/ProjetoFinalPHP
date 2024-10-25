<?php
if (isset($_SESSION['role'])) {
    checkrole($_SESSION['role']);
}   
?>

<div class="container  mt-5 ">
    <div class="d-flex justify-content-center">
        <form style="width: 100%; max-width: 400px;" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input name="product_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Price</label>
                <input name="price" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Description</label>
                <textarea name="description" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
            </div>
            <select name="category" id="categorySelect" class="form-select mb-3" aria-label="Default select example">
                <option disabled selected>Select a Category</option>
                <?php
                getCategoriesDropdown();
                ?>
            </select>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Amount</label>
                <input name="amount" type="text" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="form-label">Image</label>
                    <div class="custom-file">
                        <label class="form-label" for="inputGroupFile01">Choose file</label>
                        <input name="image" type="file" class="custom-file-input" id="inputGroupFile01" accept="image/png, image/jpeg, application/pdf">
                    </div>
                </div>
            </div>
            <button name="createProduct_submit" type="submit" class="btn btn-primary InteractiveButton">Create new product</button>
        </form>
    </div>
</div>
<?php
//Client registration by himself
if (isset($_POST["createProduct_submit"], $_POST['category'])) {
    createProduct($_POST['product_name'], $_POST['category'], $_POST['price'], $_POST['description'],  $_FILES['image'], $_POST['amount']);
}

?>