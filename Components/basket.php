<div style="text-align: center; margin-bottom: 2%">
    <h1>Basket</h1>
</div>

<div style="display: flex; justify-content: space-between; width: 60%; margin: 2% auto;">
    <div style="padding: 5px; width: 100%; background-color: black; border-radius: 3px;">
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
                <?php getBasket() ?>
            </tbody>
        </table>
    </div>
</div>

<div style="text-align: center;">
    <?php $total_price = $_SESSION['total_price']; ?>
    <h6><?php echo "Total price: $total_price €" ?></h6>
</div>
<div style="display: flex; justify-content: center; width: 60%; margin: 0 auto;">
  <!-- Dropdowns de pesquisa no lado esquerdo -->
  <div style="margin: 1%;">
    <a name="buyBasket_submit" type="submit" class="btn btn-primary InteractiveButton" href="index.php?nav=register">Buy Basket</a>
  </div>

  <!-- Botão de criar novo usuário no lado direito -->
  <div style="margin: 1%;">
    <a name="deleteBasket_submit" type="submit" class="btn btn-primary InteractiveButton" href="index.php?nav=register">Delete Basket</a>
  </div>
</div>

<div>

</div>