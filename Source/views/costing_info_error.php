<?php

session_start();

?>

<!doctype html>
<html lang="en">

<!-- head -->
<?php include '../shared/head_template.php' ?>

<body>
<!-- Error section -->
<section id="contact" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="heading">
                    <h3 style="color: red;"><span>Errors</span></h3>
                </div>
                <div class="sub-heading">
                    <p>
                        Please fix these errors before submitting.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <p>
                <?php echo $_SESSION['$product_price_error'] ?>
            </p>
            <p>
                <?php echo $_SESSION['$sales_price_error'] ?>
            </p>
            <p>
                <?php echo $_SESSION['$quantity_in_stock_error'] ?>
            </p>
        </div>
        <!--   Redirect Button  -->
        <div class="text-center">
            <a href="costing_info.php" class="btn btn-lg btn-theme">Return to form</a>
        </div>
    </div>
</section>
<!-- end section contact -->

<!-- javascript -->
<?php include '../shared/javascript_template.php'?>
</body>
</html>