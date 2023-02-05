<?php
    require_once("inc/header.php");
?>

<!-- body content -->
<div class="card col-md-4">
  <img src="/img/black_t-shirt.png" class="card-img-top" alt="black t-shirt">
  <div class="card-body">
    <h5 class="card-title">black t-shirt</h5>
    <p class="card-text">Some quick example.</p>
  </div>
</div>

<div class="col-md-4">
    
    <ul class="list-group list-group-flush">
        <li class="list-group-item">category : t-shirt</li>
        <li class="list-group-item">color : black</li>
        <li class="list-group-item">size : s</li>
        <li class="list-group-item">price : 99 $</li>
        <form action="">
        <li class="list-group-item">
            <p>quantity :</p>
            <select class="form-select" aria-label="Default select example">
                <option selected>choose quantity</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                <option value="4">four</option>
                <option value="5">five</option>
            </select>
        </li>
        <input type="submit" class="btn btn-outline-secondary mt-4 w-100" disabled value="add to card">
        </form>
    </ul>
    
</div>

<?php
    require_once("inc/footer.php");
?>