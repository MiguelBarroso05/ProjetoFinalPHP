<?php
function createCategory($categoryName) {
    if ($categoryName == "") {
        echo "Please fill the field";
    }
    else{
        include 'Connections/config.php';
        $categoryName = mysqli_real_escape_string($conn, $categoryName);
        $checkCategoryNameAlready = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM category WHERE name = '$categoryName'"));
        if ($checkCategoryNameAlready > 0) {
            echo 'Category already exists';
        }
        else{

            mysqli_query($conn, "INSERT INTO category (name) VALUES ('$categoryName')");
            echo '<meta http-equiv="refresh" content="0;url=index.php?nav=adminCategories">';
        }
    }
}
?>