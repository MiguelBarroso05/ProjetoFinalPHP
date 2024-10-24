<?php
function getUnactiveProducts(){

include 'Connections/config.php';

$q = mysqli_query($conn, "SELECT p.*, c.name as category FROM product p join category c on c.id = p.category_id where c.active = 1 AND p.active = 0");
if (mysqli_num_rows($q) == 0) {
echo '<option disabled selected>No Products</option>';
}
else {
    echo '<option disabled selected>Select Product</option>';
    while ($a = mysqli_fetch_array($q)) {
        echo '<option value="' . $a['id'] . '">' . $a['name'] . '</option>';
    }
}
}