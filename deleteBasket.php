<?php
include 'Connections\config.php';
if (isset($_REQUEST["basket_id"])) {
    $user_id = $_REQUEST["user_id"];
    $basket_id = $_REQUEST["basket_id"];
    mysqli_query($conn, "DELETE FROM basket WHERE id = '$basket_id'");
    mysqli_query($conn, "DELETE FROM product_basket WHERE basket_id = '$basket_id'");
    echo '<meta http-equiv="refresh" content="0;url=index.php?nav=productDisplay">';
}

