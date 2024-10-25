<?php
function createCategory($categoryName) {
    if ($categoryName == "") {
        echo '<script>setTimeout(function() { alert("Plese fill in all the fields"); }, 100);</script>';
    }
    else{
        include 'Connections/config.php';
        $categoryName = mysqli_real_escape_string($conn, $categoryName);
        $checkCategoryNameAlready = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM category WHERE name = '$categoryName'"));
        if ($checkCategoryNameAlready > 0) {
            echo '<script>setTimeout(function() { alert("Category already exist"); }, 100);</script>';

        }
        else{

            mysqli_query($conn, "INSERT INTO category (name) VALUES ('$categoryName')");
            echo '<meta http-equiv="refresh" content="0;url=index.php?nav=adminCategories">';
        }
    }
}
?>