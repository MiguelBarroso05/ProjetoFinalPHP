<div class="container mt-5">
    <div style="text-align: center; margin-bottom: 1%">
        <h1>Products</h1>
    </div>
    <div>
        <div style="display: flex;">
            <select name="categorySearch" id="categorySearch" class="form-select mb-3" aria-label="Default select example" style="width: 20%; margin-bottom: 2%;">
                <option selected value="-1">All Categories</option>
                <?php getCategoriesDropdown(); ?>
            </select>
        </div>
        <div id="displayProducts">
            <!-- Products to show-->
        </div>
    </div>
</div>