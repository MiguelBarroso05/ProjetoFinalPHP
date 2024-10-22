<?php
function getBasket()
{
    include 'Connections/config.php';
    $user_id = $_SESSION["id"];
    $total_price = 0;
    $q = mysqli_query($conn, "SELECT p.id as product_id, p.name as product, pb.amount as amount, (p.price * pb.amount) as price
    FROM user u
    JOIN basket b ON u.id = b.user_id
    JOIN product_basket pb ON b.id = pb.basket_id
    JOIN product p ON pb.product_id = p.id
    WHERE b.status = 2 AND u.id = $user_id");
    while ($a = mysqli_fetch_array($q)) {
        echo '<td>' . $a['product'] . '</td>
            <td>' . $a['amount'] . '</td>
            <td>' . $a['price'] . '</td>
            <td><a class="editIcon" href="deleteBasketProduct.php?id=' . $a['product_id'] . '" ><i class="fa-solid fa-trash"></i></a></td>     
            </tr>';
        $total_price += $a['price'];
    }

    $_SESSION['total_price'] = $total_price;
}
?>
