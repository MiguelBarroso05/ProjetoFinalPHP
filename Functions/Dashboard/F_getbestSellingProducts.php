<?php

    include '../../Connections/config.php';

    $q = mysqli_query($conn, "SELECT p.name, SUM(s.amount) AS total_sales
FROM product p
Left JOIN product_basket s ON p.id = s.product_id
join basket b ON b.id = s.basket_id
WHERE b.status = 1
GROUP BY p.name
ORDER BY total_sales DESC
LIMIT 5;");

    while ($a = mysqli_fetch_array($q)) {   
        echo '<tr>
        <th scope="row">' . $a['name'] . '</th>
        <td>' . $a['total_sales'] . '</td>
        </tr>';
    }