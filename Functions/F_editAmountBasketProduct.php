<?php
if(isset($_POST['updateAmount_submit'])){
    if (isset($_POST['newAmount']) && isset($_POST['product_id']) && isset($_POST['user_id']) && isset($_POST['basket_id'])) {

        include '../Connections/config.php';

        $newAmount = $_POST['newAmount'];
        $product_id = $_POST['product_id'];
        $user_id = $_POST['user_id'];
        $basket_id = $_POST['basket_id'];

        $ProductAmount = mysqli_query($conn, "SELECT amount FROM product_basket WHERE product_id = $product_id AND basket_id = $basket_id");

        if ($newAmount <= $ProductAmount || $newAmount > 0) {
            mysqli_query($conn, "UPDATE product_basket SET amount = $newAmount WHERE product_id = $product_id AND basket_id = $basket_id");
            //echo '<meta http-equiv="refresh" content="0;url=index.php?nav=productDisplay">';
        }
    }
    else{
        echo ''.var_dump($_POST).'';
    }
}


