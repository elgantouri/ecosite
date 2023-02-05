<?php
    require_once("inc/header.php");
?>

<!-- body content -->
<div class="col-md-12">
    <a href="#" class="badge text-bg-danger">Empty shopping card</a>
</div>
<table class="table my-5">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Photo</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>black t-shirt</td>
      <td>
      <form action="">               
            <select class="form-select" aria-label="Default select example">
                <option value="1" selected >1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </form>
      </td>
      <td>99$</td>
      <td><img style="width: 50px;" src="/img/black_t-shirt.png" alt=""></td>
      <td><a href="#">Delete</a></td>
    </tr>
    <tr>
        <td colspan="5" class="text-end"><strong>total amount :</strong>  99$</td>
    </tr>
  </tbody>
</table>
<div class="col-md-12">
<a href="index.php" class="badge text-bg-dark">go back to t-shirt category</a>
</div>
<div class="d-flex justify-content-end col-md-12">
    <form action="">
        <input type="submit" value="pay" class="btn btn-outline-secondary">
    </form>
</div>

<?php
    require_once("inc/footer.php");
?>