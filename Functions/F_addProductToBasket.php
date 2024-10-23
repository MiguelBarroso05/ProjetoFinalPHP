<?php

function addProductToBasket($product_id, $user_id, $amount)
{
    echo '<script>console.log("addProductToBasket called");</script>';
    if (isset($user_id) && isset($amount) && isset($product_id)) {
        include 'Connections/config.php';
        $q_amount = mysqli_query($conn, "SELECT amount FROM product WHERE id = '$product_id'");
        $a_amount = mysqli_fetch_array($q_amount);
        $product_amount = $a_amount["amount"];

        if ($amount <= $product_amount) {

            $checkBasketExists = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM basket WHERE user_id = '$user_id' AND status = 2"));

            if ($checkBasketExists > 0) {
                $q = mysqli_query($conn, "SELECT id FROM basket WHERE user_id = '$user_id' AND status = 2");
            } else {
                mysqli_query($conn, "INSERT INTO basket (user_id, status, update_date) VALUES ('$user_id', 2, NOW())");
                $q = mysqli_query($conn, "SELECT id FROM basket WHERE user_id = '$user_id' AND status = 2");
            }

            $a = mysqli_fetch_array($q);
            $basket_id = $a["id"];

            $isproductinbasket = mysqli_query($conn, "SELECT * FROM product_basket WHERE basket_id = '$basket_id' AND product_id = '$product_id'");
            $check = mysqli_num_rows($isproductinbasket);
            if ($check == 0) {
                mysqli_query($conn, "INSERT INTO product_basket (basket_id, product_id, amount) VALUES ('$basket_id','$product_id', '$amount')");
            } else {
                mysqli_query($conn, "UPDATE product_basket SET amount = amount + $amount WHERE basket_id = '$basket_id' AND product_id = '$product_id'");
                //echo '<meta http-equiv="refresh" content="0;url=index.php?error=1">';
            }
        } else {
            echo 'insufficient quantity';
        }
    }
}
