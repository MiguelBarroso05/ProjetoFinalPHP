<?php
include 'Connections/config.php';

@$user_id = $_SESSION['id'];
@$product_id = $_REQUEST['id'];

if (isset($_REQUEST["addProductToBasket_submit"])) {
    $checkBasketExists = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM basket WHERE user_id = '$user_id' AND status = 2"));
    if ($checkBasketExists > 0){
        $q = mysqli_query($conn, "SELECT id FROM basket WHERE user_id = '$user_id' AND status = 2");
    }
    else {
        mysqli_query($conn, "INSERT INTO basket (user_id, status, update_date) VALUES ('$user_id', 2, NOW())");
        $q = mysqli_query($conn, "SELECT id FROM basket WHERE user_id = '$user_id' AND status = 2");
    }
    $a = mysqli_fetch_array($q);
    $basket_id = $a["id"];
    mysqli_query($conn, "INSERT INTO product_basket (basket_id, product_id, amount) VALUES ('$basket_id','$product_id', 1)");
}
