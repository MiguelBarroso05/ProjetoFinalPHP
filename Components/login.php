<div class="container d-flex justify-content-center pt-5">
  <form method="post">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1">
    </div>
    <button name="login_submit" type="submit" class="btn btn-primary">Submit</button>
    <a href="?nav=register" class="btn btn-secondary">Register</a>
  </form>
</div>
<?php
if (isset($_POST["login_submit"])) {
  loginUser($_POST['email'], $_POST['password']);
}
?>