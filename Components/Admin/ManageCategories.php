<?php
if (isset($_SESSION['role'])) {
    checkrole($_SESSION['role']);
}   
?>

<div style="display: inline-flex; width: 100%;">
    <div style="display: flex;flex-direction: column; align-items: center; margin-top: 2.6%; width: 50%;">
        <div style="width: 50%; padding: 0 0 5px 5px">
            <h3>Categories</h3>
        </div>
        <div class="cardTable">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Amount of Products</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php getCategories(); ?>
                </tbody>
            </table>
        </div>
    </div>
    <div style="display: flex; flex-direction: column; align-content: center; margin-top: 0.5%; width: 50%;">
        <?php if (isset($_GET['id'])) {
            include 'updateCategory.php';
        } else {
            echo '<div class="container  mt-5 ">
            <div class="d-flex " style="flex-direction: column; align-items: center">
                <div>
                    <h4>Create Category</h4>
                </div>
                <form style="width: 100%; max-width: 400px;" method="post">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input name="category_name" type="text" class="form-control" id="" aria-describedby="emailHelp">
                    </div>

                    <button name="createCategory_submit" type="submit" class="btn btn-primary InteractiveButton">Create Category</button>
                </form>
            </div>
        </div>';
            if (isset($_POST["createCategory_submit"])) {
                createCategory($_POST['category_name']); // Corrigido o acesso ao campo
            }
        }
        ?>
        <div class="container  mt-5 ">
            <div class="d-flex " style="flex-direction: column; align-items: center">
                <div>
                    <h4>Restore Category</h4>
                </div>
                <form style="width: 100%; max-width: 400px;" method="post">
                    <div class="mb-3">
                        <select name="unactiveCategory" class="form-select">
                            <?php
                            getUnactiveCategories();
                            ?>
                        </select>
                    </div>

                    <button name="restoreCategory_submit" type="submit" class="btn btn-primary InteractiveButton">Restore Category</button>
                    <?php if (isset($_POST["restoreCategory_submit"]) && isset($_POST['unactiveCategory'])) {
                        restoreCategory($_POST['unactiveCategory']); // Corrigido o acesso ao campo
                    } ?>
                </form>
            </div>
        </div>
    </div>
</div>