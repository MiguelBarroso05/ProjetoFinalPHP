<?php
function getCategorySales() {
    include 'Connections/config.php';

    $q = mysqli_query($conn, "SELECT c.name as category, SUM(pb.amount) as sales 
                              FROM category c 
                              JOIN product p ON p.category_id = c.id
                              JOIN product_basket pb ON pb.product_id = p.id
                              JOIN basket b ON b.id = pb.basket_id
                              WHERE b.status = 1
                              GROUP BY category");

    $result = [];
    while ($row = mysqli_fetch_assoc($q)) {
        $result[] = $row;  
    }
    return $result;
}