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
                    <h3><span>Product form</span></h3>
                </div>
                <div class="sub-heading">
                    <p>
                        Order from our wide range of products.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- start product form -->
                <div class="cform" id="contact-form">
                    <form action="product_valid.php" method="post" role="form" class="contactForm">
                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" name="product_name" class="form-control" title="Enter Product Name" placeholder="Product Name" required />
                        </div>
                        <div class="form-group">
                            <label>Product Code</label>
                            <input type="number" min="1" class="form-control" name="product_code" title="Enter Product Code" placeholder="Product Code" required />
                        </div>
                        <div class="form-group">
                            <label>Manufacturer</label>
                            <input type="text" class="form-control" name="manufacturer" title="Enter Manufacturer" placeholder="Manufacturer" required />
                        </div>
                        <div class="form-group">
                            <label>Manufacturer Date</label>
                            <input type="date" class="form-control" name="manufacturer_date" title="Enter Manufacturer Date" placeholder="Manufacturer Date" required />
                        </div>
                        <div class="form-group">
                            <label for="products">Product Type</label>
                            <select class="form-control" name="product_types">
                                <option value="0">Select a product</option>
                                <option value="1">MacBook Pro 2020</option>
                                <option value="2">Dell XPS 15</option>
                                <option value="3">iMac Pro 2020</option>
                                <option value="4">Dell XPS Developer Edition</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Product Description</label>
                            <textarea class="form-control" rows="3" name="product_description" title="Enter Product Description" placeholder="Product Description" required></textarea>
                        </div>
                        <div class="text-center">
                            <form action="register_product.php" method="post">
                                <button type="submit" name="btnSaveProductInfo" class="btn btn-lg btn-theme">Save</button>
                            </form>
                        </div>
                    </form>
                </div>
                <!-- END product form -->
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
