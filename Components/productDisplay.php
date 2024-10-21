<div class="container mt-5">
    <div class="row justify-content-center">
        <?php
        include 'Connections/config.php';

        $q = mysqli_query($conn, "SELECT * FROM product");
        $counter = 0;

        while ($a = mysqli_fetch_array($q)) {
            if ($counter % 6 == 0 && $counter != 0) {
                echo '</div><div class="row">';
            }

            echo '
            <div class="col-2">
                <div class="card mb-4">
                    <div class="card-body" style="border: solid; border-radius: 3px;">
                        <h5 class="card-title">' . $a['name'] . '</h5>
                        <p class="card-subtitle mb-2 text-muted">' . $a['description'] . '</p>
                        <p class="card-text">' . $a['price'] . '€</p>
                        <img src="./images/products/' . $a['image'] . '" alt="" width="140px" height="140px" style="margin-bottom: 10px;">
                        <div class="card-links" style="margin-top: 10px;">
                            <a href="#" class="card-link">Buy</a>
                        </div>
                    </div>
                </div>
            </div>';
            $counter++;
        }
        ?>
    </div>
</div>
