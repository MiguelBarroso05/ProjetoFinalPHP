<?php
function getCategorySales() {
    include 'Connections/config.php';

    $q = mysqli_query($conn, "SELECT c.name as category, COUNT(p.id) as sales 
                              FROM category c 
                              JOIN product p ON p.category_id = c.id
                              JOIN sale pb ON pb.product_id = p.id
                              GROUP BY category");

    $result = [];
    while ($row = mysqli_fetch_assoc($q)) {
        $result[] = $row;  
    }
    return $result;
}