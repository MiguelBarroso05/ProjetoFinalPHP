<div style="text-align: center; margin-bottom: 2%">
    <h1>Basket</h1>
</div>

<div style="display: flex; justify-content: space-between; width: 60%; margin: 2% auto;">
    <div class="cardTable" style="padding: 5px; width: 100%; min-height:0">
        <table class="table" style="margin-bottom: 0;">
            <thead>
                <tr>
                    <th scope="col">Product Name</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Price</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody id="tableBasket">
                <?php $total_price = getBasket() ?>
            </tbody>
        </table>
        <?php
        if (isset($_SESSION['invalidAmount']) && $_SESSION['invalidAmount'] != null) {
            echo '<script>setTimeout(function() { alert("Avalable Amount: " + ' . $_SESSION['invalidAmount'] . '); }, 100);</script>';
            $_SESSION['invalidAmount'] = null;
        }
        ?>
    </div>
</div>



<div style="text-align: center;">
    <h6><?php echo "Total price: $total_price $" ?></h6>
</div>
<div style="display: flex; justify-content: center; width: 60%; margin: 0 auto;">
    <?php buyAndDeleteBasket() ?>
</div>