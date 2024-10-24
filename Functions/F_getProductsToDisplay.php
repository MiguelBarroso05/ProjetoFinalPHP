<?php
include '../Connections/config.php';

if (isset($_REQUEST["category_id_list"]) && $_REQUEST["category_id_list"] != -1) {
    $category_id = $_REQUEST["category_id_list"];
    $q = mysqli_query($conn, "SELECT p.*, c.name as category FROM product p 
                             JOIN category c on c.id = p.category_id
                             WHERE category_id = '$category_id' AND p.amount > 0");
} else {
    $q = mysqli_query($conn, "SELECT * FROM product WHERE amount > 0");
}

$counter = 0;

echo'<div class="row justify-content-left">';

while ($a = mysqli_fetch_array($q)) {
    if ($counter % 6 == 0 && $counter != 0) {
        echo '</div><div class="row">';
    }

    echo '
            <div class="col-2">
                <div class="card mb-4">
                    <div class="card-body" style="border: solid; border-radius: 3px;     min-height: 326px !important;">
                        <h5 class="card-title">' . $a['name'] . '</h5>
                        <p class="card-subtitle mb-2 text-muted">' . $a['description'] . '</p>
                        <p class="card-text">' . $a['price'] . '€</p>
                        <div>
                            <img src="./images/products/' . $a['image'] . '" alt="" width="140px" height="140px" style="margin-bottom: 10px;">
                        </div>
                        <div>
                            <form method="post" style="justify-content: space-between; display: flex;">
                                <input type="hidden" name="id" value="' . $a['id'] . '">
                                <button name="addProductToBasket_submit" type="submit" class="btn btn-primary InteractiveButton">Buy</button>
                                <div style="justify-content: end; display: flex;">
                                    <label style="align-content: center;">Qt:</label>
                                    <input name="amount" value="1" type="text" class="form-control " id="productSaleAmount" style="width: 40%";>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            ';
    $counter++;
}


