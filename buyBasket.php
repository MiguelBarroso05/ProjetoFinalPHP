<?php
if (isset($_REQUEST["basket_id"])) {
    include 'Connections/config.php';

    $basket_id = $_REQUEST["basket_id"];

    mysqli_query($conn, "UPDATE product_basket pb 
    JOIN product p ON pb.product_id = p.id 
    JOIN basket b ON pb.basket_id = b.id 
    SET p.amount = p.amount - pb.amount
    WHERE b.id = '$basket_id'");
    
    mysqli_query($conn, "UPDATE basket SET status = '1', update_date = NOW() WHERE id = '$basket_id'");
    echo '<meta http-equiv="refresh" content="0;url=index.php?nav=productDisplay">';
}
