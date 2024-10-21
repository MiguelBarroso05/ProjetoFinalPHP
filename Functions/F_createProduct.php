<?php
function createProduct($name, $category_id, $price, $description, $image, $amount)
{
	if ($name == "" || $category_id == "" || $price == "" || $image == "" || $amount == "") {
		echo "Please fill in all the fields";
	} else {
		include 'Connections/config.php';
		$name = mysqli_real_escape_string($conn, $name);
		$price = mysqli_real_escape_string($conn, $price);
		$description = mysqli_real_escape_string($conn, $description);
		$image = mysqli_real_escape_string($conn, $image);
		$amount = mysqli_real_escape_string($conn, $amount);
        if ($checkProductAlreadyCreated > 0) {
            echo 'Product already registered';
        } else {
            mysqli_query($conn, "INSERT INTO product (name, category_id, price, description, image, amount) VALUES ( '$name', '$category_id', '$price', '$description', '$image', '$amount')");
            echo '<meta http-equiv="refresh" content="0;url=index.php?nav=adminProducts">';
        }
    }
}