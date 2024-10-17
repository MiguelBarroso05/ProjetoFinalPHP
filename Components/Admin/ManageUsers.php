
<div style="display: flex;flex-direction: column; justify-items: center !important; margin-top: 0.5%; ">
  <a name="createNewUser_submit" type="submit" class="btn btn-primary createUserButton" href="index.php?nav=register">Create new User</a>
  <div style="display: inline-flex;">
    <select name="districtSearch" id="districtSearch" class="form-select mb-3" aria-label="Default select example" style="width: 15%; margin-right: 1%; margin-bottom: 0 !important;">
      <option selected value="-1">All Districts</option>
      <?php
      getDistricts();
      ?>
    </select>
    <select name="countySearch" id="countySelect" class="form-select mb-3" aria-label="Default select example" style="width: 15%; margin-right: 1%; margin-bottom: 0 !important;">
      <option disabled selected>Select a County</option>
    </select>
  </div>
</div>
<div style="display: flex; justify-content: center; margin-top: 0.5%; ">
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
      <tbody id="tableBody">
    
      </tbody>
    </table>
  </div>
</div>

