<div style="display: flex; flex-direction: column; align-items: center; padding-top: 2%; ">
  <div style="width: 60%; padding: 0 0 5px 5px;">
    <h3>Orders History</h3>
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
      <tbody>
        <?php
            $user_id = $_SESSION['id'];
            include 'Connections/config.php';
            
            $q = mysqli_query($conn, "SELECT u.id ,u.name as name, update_date , b.total_price
                                        FROM basket b                          
                                        JOIN user u ON b.user_id = u.id
                                        WHERE b.status = 1 AND u.id = $user_id
                                        ORDER BY update_date DESC;");
            
            while ($a = mysqli_fetch_array($q)) {
                echo '<tr>
                <th scope="row">' . $a['id'] . '</th>	
                <td>' . $a['name'] . '</td>
                <td>' . $a['update_date'] . '</td>
                <td>' . $a['total_price'] . '$</td>
                </tr>';
            }
        ?>
      </tbody>
    </table>
  </div>
</div>