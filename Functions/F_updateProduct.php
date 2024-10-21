<?php

function updateProduct($id, $name, $category_id, $price, $description,  $image, $amount)
{
    if ($name == "" || $price == "" || $description == "" || $category_id == "" || $amount == "") {
        echo "Please fill in all the fields";
    } else {
        include 'Connections/config.php';
        $name = mysqli_real_escape_string($conn, $name);
        $description = mysqli_real_escape_string($conn, $description);
        $checkProductAlreadyRegistered = mysqli_fetch_array(mysqli_query($conn, "SELECT name FROM product WHERE name = '$name' AND category_id = '$category_id' AND id != '$id'"));
        if (!$checkProductAlreadyRegistered) {
            if ($_FILES['updateimage']['size'] > 0) {
                $imageExtension = explode(".", $_FILES['updateimage']["name"]);
                $newimage = round(microtime(true)) . '.' . end($imageExtension);
                move_uploaded_file($_FILES['updateimage']["tmp_name"], "Images/products/" . $newimage);
                mysqli_query($conn, "UPDATE product SET  name = '$name', price = '$price', description = '$description', category_id = '$category_id', image = '$newimage', amount = '$amount' WHERE id = '$id'");
            } else {
                mysqli_query($conn, "UPDATE product SET  name = '$name', price = '$price', description = '$description', category_id = '$category_id', amount = '$amount' WHERE id = '$id'");
            }
            echo '<meta http-equiv="refresh" content="0;url=index.php?nav=adminProducts">';
        } else {
            echo 'Product already registered';
        }
    }
}
