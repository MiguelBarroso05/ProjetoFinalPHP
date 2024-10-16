<?php

    function getClients() {

        include 'connections/config.php';

        $q = mysqli_query($conn, "SELECT u.id, u.name, u.surname, u.email, d.name as district, c.name as county, u.role
        FROM user u
        JOIN district d ON d.id = u.district
        JOIN county c ON c.id = u.county");

        while ($a = mysqli_fetch_array($q)) {
            echo '   <tr>
      <th scope="row">'.$a['id'].'</th>
      <td>'.$a['name'].'</td>
      <td>'.$a['surname'].'</td>
      <td>'.$a['email'].'</td>
      <td>'.$a['district'].'</td>
      <td>'.$a['county'].'</td>
      <td>'.$a['role'].'</td>
      <td><a class="editIcon" href="updateClient.php?id='.$a['id'].'" ><i class="fa-solid fa-user-pen"></i></a></td>
      <td><a class="editIcon" href="deleteClient.php?id='.$a['id'].'" ><i class="fa-solid fa-user-xmark"></i></a></td>

    </tr>';
    }
}
?>