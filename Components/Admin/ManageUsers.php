<?php
if (isset($_SESSION['role'])) {
    checkrole($_SESSION['role']);
}   
?>

<div style="display: flex; justify-content: space-between; width: 60%; margin: 0 auto; padding-top: 2%;">
  <!-- Dropdowns de pesquisa no lado esquerdo -->
  <div style="display: flex;">
    <select name="districtSearch" id="districtSearch" class="form-select mb-3" aria-label="Default select example" style="width: 52%; margin-bottom: 0 !important;">
      <option selected value="-1">All Districts</option>
      <?php getDistricts(); ?>
    </select>
    <select name="countySearch" id="countySelect" class="form-select mb-3" aria-label="Default select example" style="width: 57%; margin-left:5%; margin-bottom: 0 !important;">
      <option disabled selected>Select a County</option>
    </select>
  </div>

  <!-- Botão de criar novo usuário no lado direito -->
  <div>
    <a name="createNewUser_submit" type="submit" class="btn btn-primary InteractiveButton" href="index.php?nav=register">Create new User</a>
  </div>
</div>

<!-- Tabela centrada abaixo dos dropdowns e do botão -->
<div style="display: flex; justify-content: center; margin-top: 0.5%; ">
  <div class="cardTable">
    <table class="table" style="margin-bottom: 0; border: 1px solid rgba(139, 139, 139, 0.5);">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Email</th>
          <th scope="col">District</th>
          <th scope="col">County</th>
          <th scope="col">Role</th>
          <th scope="col"></th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody id="tableUsers">
        <!-- Conteúdo da tabela -->
      </tbody>
    </table>
  </div>
</div>


