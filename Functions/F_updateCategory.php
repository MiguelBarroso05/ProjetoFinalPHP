<?php
function updateCategory($id, $name){

    if ($name == "" ) {
        echo "Please fill in all the fields";
    }
    else {
        include 'Connections/config.php';
        
        $categoryNameAlreadyExists = mysqli_fetch_array(mysqli_query($conn, "SELECT id, name FROM category WHERE name = '$name' AND id != '$id'"));
        if (!$categoryNameAlreadyExists) {
            $name = mysqli_real_escape_string($conn, $name);
            mysqli_query($conn, "UPDATE category SET name = '$name' WHERE id = '$id'");
            echo '<meta http-equiv="refresh" content="0;url=index.php?nav=adminCategories">';
        }
        else {
            echo 'Category name already exist';
        }

        
    }

}