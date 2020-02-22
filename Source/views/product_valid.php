<?php
// Validation file for product_info.php

if (isset($_POST["btnSaveProductInfo"]))
{
//    Create a session
    session_start();

    foreach ($_POST as $key => $value)
    {
        $$key = $value;
        $_SESSION[$key] = $value;
    }

    if (($product_name == null) || (strlen($product_name) < 3))
    {
        $product_name_error = "Product Name must be at least THREE(3) characters long.";
    }

    if ($product_code == null)
    {
        $product_code_error = "Product Code must be 4 digits.";
    }

    if (($manufacturer == null) || (strlen($manufacturer) < 4))
    {
        $manufacturer_name_error = "Manufacturer Name must be at least THREE(4) characters long.";
    }

    if ($manufacturer_date == null)
    {
        $manufacturer_date_error = "A manufacturer date is required.";
    }

    if ($product_types < 1)
    {
        $product_types_error = "Please select a product type";
    }

    if (($product_description == null) || (strlen($product_description) < 4))
    {
        $product_description_error = "Product description must be at least Four(4) characters long.";
    }
}
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
                <?php echo $product_name_error ?>
            </p>
            <p>
                <?php echo $product_code_error ?>
            </p>
            <p>
                <?php echo $manufacturer_name_error ?>
            </p>
            <p>
                <?php echo $manufacturer_date_error ?>
            </p>
            <p>
                <?php echo $product_types_error ?>
            </p>
            <p>
                <?php echo $product_description_error ?>
            </p>
        </div>
        <!--   Redirect Button  -->
        <div class="text-center">
            <a href="product_info.php" class="btn btn-lg btn-theme">Return to form</a>
        </div>
    </div>
</section>
<!-- end section contact -->

<!-- javascript -->
<?php include '../shared/javascript_template.php'?>
</body>
</html>