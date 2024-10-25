<div style="display: flex; justify-content: space-between; width: 60%; margin: 0 auto; padding-top: 2%;">
  <!-- Dropdowns de pesquisa no lado esquerdo -->
  <div style="display: flex;">
    <select name="categorySearch" id="categorySearch" class="form-select mb-3" aria-label="Default select example" style="width: 100%; margin-bottom: 0 !important;">
      <option selected value="-1">All Categories</option>
      <?php getCategoriesDropdown(); ?>
    </select>
  </div>
  <div style="display: flex; flex-direction: row; height: 38px;">
    <div class="mb-3" style="margin-right: 10px;">
      <form method="post">
        <select name="unactiveProduct" class="form-select">
          <?php
          getUnactiveProducts();
          ?>
        </select>
      </div>

        <button name="restoreProduct_submit" type="submit" class="btn btn-primary InteractiveButton"  >Restore Product</button>
    <?php if (isset($_POST["restoreProduct_submit"]) && isset($_POST['unactiveProduct'])) {
          restoreProcduct($_POST['unactiveProduct']); // Corrigido o acesso ao campo
        } ?>
      </form>
  </div>



  <!-- Botão de criar novo usuário no lado direito -->
  <div>
    <a name="createNewProduct_submit" type="submit" class="btn btn-primary InteractiveButton" href="index.php?nav=createProduct">Create new Product</a>
  </div>
</div>

<!-- Tabela centrada abaixo dos dropdowns e do botão -->
<div style="display: flex; justify-content: center; margin-top: 0.5%; ">
  <div class="cardTable">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Product Name</th>
          <th scope="col">Category</th>
          <th scope="col">Price</th>
          <th scope="col">Amount</th>
          <th scope="col"></th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody id="tableProducts">
        <!-- Conteúdo da tabela -->
      </tbody>
    </table>
  </div>
</div>