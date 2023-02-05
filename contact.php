<?php
    require_once("inc/header.php");
?>

<!-- body content -->
<h3 class="text-center mb-5">Contact Us</h3>
<div class="col-8">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">full name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="enter your full name">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInpu2" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="enter your email">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">your message</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder=".........."></textarea>
    </div>
    <div class="mt-4">
        <button type="submit" class="btn btn-dark">send</button>
    </div>
    
</div>



<?php
    require_once("inc/footer.php");
?>