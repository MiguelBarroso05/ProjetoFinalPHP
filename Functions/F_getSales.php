<?php

include '../Connections/config.php';

$q = mysqli_query($conn, "SELECT u.id ,u.name as name, update_date , b.total_price
                            FROM basket b                          
                            JOIN user u ON b.user_id = u.id
                            WHERE b.status = 1
                            ORDER BY update_date DESC;");

while ($a = mysqli_fetch_array($q)) {
    echo '<tr>
    <th scope="row">' . $a['id'] . '</th>	
    <td>' . $a['name'] . '</td>
    <td>' . $a['update_date'] . '</td>
    <td>' . $a['total_price'] . '$</td>
    </tr>';
}
