<?php
// Result page called register_product.php

session_start();


?>

<!doctype html>
<html lang="en">

<!-- head -->
<?php include '../shared/head_template.php' ?>

<body>
<section id="contact" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="heading">
                    <h3><span>Register Product</span></h3>
                </div>
                <div class="sub-heading">
                    <p>
                        Complete registration by writing to a file.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6">
                    <a href="#" class="btn btn-lg btn-theme">Write to product.txt file</a>
                </div>
                <div class="col-md-6">
                    <a href="#" class="btn btn-lg btn-theme">Write to cost.txt file</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- javascript -->
<?php include '../shared/javascript_template.php'?>
</body>
</html>
