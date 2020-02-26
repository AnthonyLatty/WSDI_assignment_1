<?php
// Validation file for product_info.php

if (isset($_POST["btnSaveProductInfo"]))
{
//    Create a session
    session_start();

    $error_flag = 0;

    foreach ($_POST as $key => $value)
    {
        $$key = $value;

        // store form value in session
        $_SESSION[$key] = $value;
    }

    if (($product_name == null) || (strlen($product_name) < 3))
    {
        $_SESSION['$product_name_error'] = "Product Name must be at least THREE(3) characters long.";
        $error_flag++;
    }
    else
    {
        $_SESSION['$product_name_error'] = "";
    }

    if ($product_code == null)
    {
        $_SESSION['$product_code_error'] = "Product Code must be 4 digits.";
        $error_flag++;
    }
    else
    {
        $_SESSION['$product_code_error'] = "";
    }

    if (($manufacturer == null) || (strlen($manufacturer) < 4))
    {
        $_SESSION['$manufacturer_name_error'] = "Manufacturer Name must be at least THREE(4) characters long.";
        $error_flag++;
    }
    else
    {
        $_SESSION['$manufacturer_name_error'] = "";
    }

    if ($manufacturer_date == null)
    {
        $_SESSION['$manufacturer_date_error'] = "A manufacturer date is required.";
        $error_flag++;
    }
    else
    {
        $_SESSION['$manufacturer_date_error'] = "";
    }

    if ($product_types < 1)
    {
        $_SESSION['$product_types_error'] = "Please select a product type";
        $error_flag++;
    }
    else
    {
        $_SESSION['$product_types_error'] = "";
    }

    if (($product_description == null) || (strlen($product_description) < 4))
    {
        $_SESSION['$product_description_error'] = "Product description must be at least Four(4) characters long.";
        $error_flag++;
    }
    else
    {
        $_SESSION['$product_description_error'] = "";
    }


    // Check error flag to know where to go
    if ($error_flag > 0)
    {
        header("Location: products_info_error.php");
    }
    else
    {
        // Redirects to register_product.php
        header("Location: register_product.php");
    }
}
else
{
    header("Location: ../shared/error_404_template.php");
}
