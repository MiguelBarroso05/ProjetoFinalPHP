<?php   

function getCategories()
{
    include 'Connections/config.php';
    $q = mysqli_query($conn, "SELECT * FROM category");
    while ($a = mysqli_fetch_array($q)) {
        $q2 = mysqli_query($conn, "SELECT * FROM product WHERE category_id = '$a[id]'");
        $count = mysqli_num_rows($q2);
        echo ' <th scope="row">' . $a['id'] . '</th>
            <td>' . $a['name'] . '</td>
            <td>' . $count . '</td>
            <td><a class="editIcon" href="?nav=updateCategory&id=' . $a['id'] . '" ><i class="fa-solid fa-pen-to-square"></i></a></td>
            <td><a class="editIcon" href="deleteCategory.php?id=' . $a['id'] . '" ><i class="fa-solid fa-trash"></i></a></td>     
            </tr>';
    }

}