<?php
    require_once("inc/header.php");
?>

<!-- body content -->
<div class="col-md-12">
    <h3 class="text-center mb-5">get connected to access your profile</h3>
</div>
<div class="col-md-6">
    <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="enter your email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="enter your password">
  </div>
  <button type="submit" class="btn btn-dark w-100">Connection</button>
</form>
</div>


<?php
    require_once("inc/footer.php");
?>