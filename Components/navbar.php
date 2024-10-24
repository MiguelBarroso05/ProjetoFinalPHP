
<nav class="navbar navbar-expand-lg " style="background-color: rgba(21, 54, 50, 1);">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <img src="./images/HerdadeSol.png" width="" height="55" style="border-radius: 100px;">
    </a>

    <div class="collapse navbar-collapse" id="navbarNav">
      <?php

      //ADMIN NAV BAR
      if (isset($_SESSION["role"]) && $_SESSION["role"] == 1) {
        echo ' <ul class="navbar-nav" style="font-size: 20px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?nav=adminUsers">Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?nav=adminCategories">Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?nav=adminProducts">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?nav=adminSales">Sales</a>
        </li>
      </ul>';
      } elseif (isset($_SESSION["role"]) && $_SESSION["role"] == 2) {
        echo ' <ul class="navbar-nav" style="font-size: 20px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>';
      }
      ?>
      <div class="ms-auto " style="margin-right: 2%; font-size: 20px; display: inline-flex">
        <?php
        if (isset($_SESSION["email"])) {
          echo ' <a class="nav-link" href="?nav=updateUser&id=' . $_SESSION["id"] . '" style="margin-right: 20px;"><i class="fa-regular fa-user"></i></a>';
          if (isset($_SESSION["role"]) && $_SESSION["role"] != 1) {
            echo '<a class="nav-link" href="?nav=basket&id=' . $_SESSION["id"] . '" style="margin-right: 20px;"><i class="fa-solid fa-basket-shopping"></i></a>';
          }
          echo ' <a class="nav-link" href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>';
        } else {
          echo '<a class="nav-link" href="?nav=login"><i class="fa-solid fa-arrow-right-to-bracket"></i></a>';
        }
        ?>
      </div>
    </div>
  </div>
</nav>