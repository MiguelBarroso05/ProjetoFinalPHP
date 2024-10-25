<?php
if (isset($_SESSION['role'])) {
    checkrole($_SESSION['role']);
}   
?>

<div style="display: flex; flex-direction: column; align-items: center; padding-top: 2%; ">
  <div style="width: 60%; padding: 0 0 5px 5px;">
    <h3>Sales</h3>
  </div>
  <div class="cardTable">
    <table class="table" style="margin-bottom: 0; border: 1px solid rgba(139, 139, 139, 0.5);">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Date</th>
          <th scope="col">Total Price</th>
        </tr>
      </thead>
      <tbody id="tableSales">
        <!-- Conteúdo da tabela -->
      </tbody>
    </table>
  </div>
</div>
