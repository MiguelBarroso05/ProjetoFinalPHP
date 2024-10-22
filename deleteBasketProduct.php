<?php

if (isset($_REQUEST['id'])) {
    include 'Connections\config.php';
    $product_id = $_REQUEST['id'];
    mysqli_query($conn, "DELETE FROM product_basket WHERE product_id = '$product_id'");
    echo '<meta http-equiv="refresh" content="0;url=index.php?nav=basket">';
}