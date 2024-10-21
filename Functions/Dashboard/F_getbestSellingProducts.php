<?php

    include '../../Connections/config.php';

    $q = mysqli_query($conn, "SELECT p.name, COUNT(s.product_id) AS total_sales
FROM product p
Left JOIN sale s ON p.id = s.product_id
GROUP BY p.name
ORDER BY total_sales DESC
LIMIT 5;");

    while ($a = mysqli_fetch_array($q)) {   
        echo '<tr>
        <th scope="row">' . $a['name'] . '</th>
        <td>' . $a['total_sales'] . '</td>
        </tr>';
    }