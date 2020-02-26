<!doctype html>
<html lang="en">

<!-- head -->
<?php include '../shared/head_template.php' ?>

<body>
<!-- navbar -->
<?php include '../shared/navbar_template.php' ?>

<!-- section contact -->
<section id="contact" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="heading">
                    <h3><span>Costing form</span></h3>
                </div>
                <div class="sub-heading">
                    <p>
                        Costing Details of product.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- start costing form -->
                <div class="cform" id="contact-form">
                    <form action="cost_valid.php" method="post" role="form" class="contactForm">
                        <div class="form-group">
                            <label>Product Price</label>
                            <input type="number" min="1" name="product_price" class="form-control" title="Enter Cost Price" placeholder="Product Price" required />
                        </div>
                        <div class="form-group">
                            <label>Sales Price</label>
                            <input type="number" min="1" name="sales_price" class="form-control" title="Enter Sales Price" placeholder="Sales Price" required />
                        </div>
                        <div class="form-group">
                            <label>Quantity in Stock</label>
                            <input type="number" min="1" name="quantity_in_stock" class="form-control" title="Enter Quantity in Stock" placeholder="Quantity in Stock" required />
                        </div>

                        <div class="text-center">
                            <button type="submit" name="btnSaveCostingInfo" class="btn btn-lg btn-theme">Save</button>
                        </div>
                    </form>
                </div>
                <!-- END costing form -->
            </div>
        </div>
    </div>
</section>
<!-- end section contact -->
<!-- footer -->
<?php include '../shared/footer_template.php' ?>

<!-- javascript -->
<?php include '../shared/javascript_template.php'?>
</body>
</html>

