<?php

function getCategories()
{
    include 'Connections/config.php';
    $q = mysqli_query($conn, "SELECT * FROM category where active = 1");
    while ($a = mysqli_fetch_array($q)) {
        $q2 = mysqli_query($conn, "SELECT * FROM product WHERE category_id = '$a[id]' AND active = 1");
        $count = mysqli_num_rows($q2);
        echo ' <th scope="row">' . $a['id'] . '</th>
            <td>' . $a['name'] . '</td>
            <td>' . $count . '</td>
            <td><a class="editIcon" href="?nav=adminCategories&id=' . $a['id'] . '" ><i class="fa-solid fa-pen-to-square"></i></a></td>
            <td><a class="editIcon" href="Functions/deleteCategory.php?id=' . $a['id'] . '" ><i class="fa-solid fa-trash"></i></a></td>     
            </tr>';
    }
}

function getUnactiveCategories()
{
    include 'Connections/config.php';
    $q = mysqli_query($conn, "SELECT * FROM category where active = 0");
    if (mysqli_num_rows($q) == 0) {
        echo'<script>console.log("No Categories");</script>';
        echo ' <option disabled selected>No Categories</option>';
    } else {
        echo'<script>console.log("Exist Categories");</script>';
        echo '<option selected disabled>Select a Category</option>';
        while ($a = mysqli_fetch_array($q)) {
            echo '<option value="' . $a['id'] . '">' . $a['name'] . '</option>';
        }
    }
}
