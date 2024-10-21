<div class="container  mt-5 ">
    <div class="d-flex justify-content-center">
        <form style="width: 100%; max-width: 400px;" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
                </div>
                <div class="custom-file">
                    <input name="image" type="file" class="custom-file-input" id="inputGroupFile01">
                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                </div>
            </div>
            <button name="createProduct_submit" type="submit" class="btn btn-primary">Create new product</button>
        </form>
    </div>
</div>
<?php
//Client registration by himself
if (isset($_POST["createProduct_submit"], $_POST['category'],)) {
    echo ''.$_POST['name'].', '.$_POST['category'].', '.$_POST['price'].', '.$_POST['description'].', '.$_POST['image'].', '.$_POST['amount'].'';
    createProduct($_POST['name'], $_POST['category'], $_POST['price'], $_POST['description'], $_POST['image'], $_POST['amount']);
}

?>