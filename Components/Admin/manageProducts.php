<div style="display: flex; justify-content: space-between; width: 60%; margin: 0 auto; margin-top: 2%;">
  <!-- Dropdowns de pesquisa no lado esquerdo -->
  <div style="display: flex;">
    <select name="categorySearch" id="categorySearch" class="form-select mb-3" aria-label="Default select example" style="width: 100%; margin-bottom: 0 !important;">
      <option selected value="-1">All Categories</option>
      <?php getCategoriesDropdown(); ?>
    </select>

  </div>

  <!-- Botão de criar novo usuário no lado direito -->
  <div>
    <a name="createNewProduct_submit" type="submit" class="btn btn-primary InteractiveButton" href="index.php?nav=createProduct">Create new Product</a>
  </div>
</div>

<!-- Tabela centrada abaixo dos dropdowns e do botão -->
<div style="display: flex; justify-content: center; margin-top: 0.5%; ">
  <div style="padding: 5px; width: 60%; background-color: black; border-radius: 3px;">
    <table class="table" style="margin-bottom: 0;">
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

