<?php
// Result page called register_product.php

// Continue previous session
session_start();

// preview whats in the session
//var_dump($_SESSION);

if (isset($_POST['btnWriteProductFile']))
{
    foreach($_SESSION as $key => $value)
    {
        $$key = $value;
    }

    if (($_SESSION['product_name'] == null || $_SESSION['product_code'] == null || $_SESSION['manufacturer'] == null || $_SESSION['manufacturer_date'] == null || $_SESSION['product_types'] == 0 || $_SESSION['product_description'] == null))
    {
        $session_expired_or_not_exist = "Please Fill out the Product info form to write to product.txt file!";
    }
    else
    {
        // File handling
        $product_file = fopen("product.txt", "a") or die("Could not open file");

        // message to add
        $output = $product_name."\n
        Product Code: ".$product_code."\n
        Manufacturer: ".$manufacturer."\n
        Manufacturer Date: ".$manufacturer_date."\n
        Product Type: ".$product_types."\n
        Product Description: ".$product_description."\n
        =============================\n\n ";

        // write to fie
        fwrite($product_file, $output);

        // close file
        $result = "File Created!";
        fclose($product_file);
    }
}

if (isset($_POST['btnWriteCostFile']))
{
    foreach($_SESSION as $key => $value)
    {
        $$key = $value;
    }

    if (($_SESSION['product_name'] == null || $_SESSION['product_code'] == null || $_SESSION['manufacturer'] == null || $_SESSION['manufacturer_date'] == null || $_SESSION['product_types'] == 0 || $_SESSION['product_description'] == null || $_SESSION['product_price'] == 0 || $_SESSION['sales_price'] == 0 || $_SESSION['quantity_in_stock'] == 0))
    {
        $session_expired_or_not_exist = "Please Fill out the Product info form to write to cost.txt file!";
    }
    else
    {
        // File handling
        $cost_file = fopen("cost.txt", "a") or die("Could not open file");

        // message to add
        $output = $_SESSION['product_name']."\n
        Product Code: ".$_SESSION['product_code']."\n
        Product Price: ".$product_price."\n
        Sales Price: ".$sales_price."\n
        Quantity in Stock: ".$quantity_in_stock."\n
        =============================\n\n ";

        // write to fie
        fwrite($cost_file, $output);

        // close file
        $result = "File Created!";
        fclose($cost_file);

        // destroy session
        session_destroy();
    }
}

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
                    <p style="color: green;" class="text-success"><?php echo $result ?></p>
                    <p style="color: red;" class="text-danger"><?php echo $session_expired_or_not_exist ?></p>
                </div>
            </div>
            <div class="col-md-12 text-center" style="padding-top: 50px;">
                <div class="col-md-6">
                    <form action="register_product.php" method="post">
                        <input type="submit" class="btn btn-lg btn-theme" name="btnWriteProductFile" value="Write to product.txt file">
                    </form>
                </div>
                <div class="col-md-6">
                    <form action="register_product.php" method="post">
                        <input type="submit" class="btn btn-lg btn-theme" name="btnWriteCostFile" value="Write to cost.txt file">
                    </form>
                </div>
                <div class="text-center" style="padding-top: 200px;">
                    <a href="index.php">Back to Index page</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- javascript -->
<?php include '../shared/javascript_template.php'?>
</body>
</html>
