<?php
    require_once("inc/header.php");
?>

<!-- body content -->
<form class="row g-3">
  <div class="col-md-6">
    <label for="inputpsuedo" class="form-label">pseudo :</label>
    <input type="email" class="form-control" id="inputpsuedo" placeholder="enter your pseudo">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password :</label>
    <input type="password" class="form-control" id="inputPassword4" placeholder="enter your password">
  </div>
  <div class="col-md-3">
    <label for="inputfirstname" class="form-label">First name :</label>
    <input type="text" class="form-control" id="inputfirstname" placeholder="enter your first name">
  </div>
  <div class="col-md-3">
    <label for="inputlastname" class="form-label">last name :</label>
    <input type="text" class="form-control" id="inputlastname" placeholder="enter your last name">
  </div>
  <div class="col-md-3">
    <label for="inputEmail4" class="form-label">Email :</label>
    <input type="email" class="form-control" id="inputEmail4" placeholder="enter your email">
  </div>
  <div class="col-md-3">
  <label for="flexRadioDefault1" >Gender :</label>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"checked value="m">
        <label class="form-check-label" for="flexRadioDefault1">male</label>
    </div>    
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="f">
        <label class="form-check-label" for="flexRadioDefault2">female</label>
    </div>        
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="rue makness">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="cite dakhla, makness">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity" placeholder="makness">
  </div>
  <div class="col-md-6">
    <label for="inputZip" class="form-label">Postal code</label>
    <input type="text" class="form-control" id="inputZip" placeholder="55000">
  </div>
  <div class="col-12 pt-4">
    <button type="submit" class="btn btn-dark ">Creat my account</button>
  </div>
</form>

<?php
    require_once("inc/footer.php");
?>