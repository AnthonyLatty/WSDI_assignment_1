<?php
// Validation file for cost_valid.php

if (isset($_POST["btnSaveCostingInfo"]))
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

    if ($product_price == 0)
    {
        $_SESSION['$product_price_error'] = "Please enter a product price";
        $error_flag++;
    }
    else
    {
        $_SESSION['$product_price_error'] = "";
    }

    if ($sales_price == 0)
    {
        $_SESSION['$sales_price_error'] = "Please enter a valid sales price";
        $error_flag++;
    }
    else
    {
        $_SESSION['$sales_price_error'] = "";
    }

    if ($quantity_in_stock == 0)
    {
        $_SESSION['$quantity_in_stock_error'] = "Please enter quantity in stock";
        $error_flag++;
    }
    else
    {
        $_SESSION['$quantity_in_stock_error'] = "";
    }

    if ($error_flag > 0)
    {
        header("Location: costing_info_error.php");
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

