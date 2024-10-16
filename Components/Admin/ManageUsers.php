<div style="display: flex; justify-content: center; margin-top: 2%; ">
  <div style="padding: 5px; width: 61%; background-color: black; border-radius: 3px;">
  <table class="table" style="margin-bottom: 0;">
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
  <tbody>

    <?php
    include 'Functions\getClients.php';
    getClients();
    ?>

  </tbody>
</table>
</div>
</div>