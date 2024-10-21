<div style="display: inline-flex; width: 100%;">
    <div style="display: flex; justify-content: center; margin-top: 2.6%; width: 50%;">
        <div style="padding: 5px; width: 50%; background-color: black; border-radius: 3px;">
            <table class="table" style="margin-bottom: 0;">
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
    <div style="display: flex; justify-content: center; margin-top: 0.5%; width: 50%;">
        <?php if (isset($_GET['id'])) {
            include 'updateCategory.php';
        } else {
            echo '<div class="container  mt-5 ">
            <div class="d-flex " style="flex-direction: column; align-items: center">
                <div>
                    <h4>CREATE NEW CATEGORY</h4>
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
    </div>
</div>