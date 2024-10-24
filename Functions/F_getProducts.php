<?php
include '../Connections/config.php';

if (isset($_REQUEST["category_id_list"]) && $_REQUEST["category_id_list"] != -1) {
    $category_id = $_REQUEST["category_id_list"];
    $q = mysqli_query($conn, "SELECT p.*, c.name as category FROM product p 
                             join category c on c.id = p.category_id
                             WHERE category_id = '$category_id' AND p.active = 1");
} else {
    $q = mysqli_query($conn, "SELECT p.*, c.name as category FROM product p join category c on c.id = p.category_id where c.active = 1  AND p.active = 1");
}

while ($a = mysqli_fetch_array($q)) {
    echo '<tr>
    <th scope="row">' . $a['id'] . '</th>
    <td>' . $a['name'] . '</td>
    <td>' . $a['category'] . '</td>
    <td>' . $a['price'] . '$</td>
    <td>' . $a['amount'] . '</td>
    <td><a class="editIcon" href="?nav=updateProduct&id=' . $a['id'] . '" ><i class="fa-solid fa-pen-to-square"></i></a></td>
    <td><a class="editIcon" href="Functions/deleteProduct.php?id=' . $a['id'] . '" ><i class="fa-solid fa-trash"></i></a></td>
    </tr>';
    }
