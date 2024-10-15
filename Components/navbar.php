<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="./images/logo.png" width="" height="55">
    </a>
  
    <div class="collapse navbar-collapse" id="navbarNav" >
      <ul class="navbar-nav" style="font-size: 20px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="">Home</a>
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
      </ul>
      <div class="ms-auto " style="margin-right: 2%; font-size: 20px; display: inline-flex">
        <?php 
            if(isset($_SESSION["email"])) {
                echo' <a class="nav-link" href="#" style="margin-right: 25%;"><i class="fa-regular fa-user"></i></a>
                <a class="nav-link" href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>';

            }
            else {
                echo'<a class="nav-link" href="?nav=login"><i class="fa-solid fa-arrow-right-to-bracket"></i></a>';
            }
        ?>
      </div>
    </div>
  </div>
</nav>