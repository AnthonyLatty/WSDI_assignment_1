<!doctype html>
<html lang="en">

<!-- head -->
<?php include '../shared/head_template.php' ?>

<body>
<!-- navbar -->
<?php include '../shared/navbar_template.php' ?>
<br><br><br>

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
                <!-- start contact form -->
                <div class="cform" id="contact-form">
                    <form action="" method="post" role="form" class="contactForm">
                        <div class="form-group">
                            <input type="text" name="product_name" class="form-control" title="Enter Product Name" placeholder="Product Name" required />
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" name="product_code" title="Enter Product Code" placeholder="Product Code" required/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="manufacturer" title="Enter Manufacturer" placeholder="Manufacturer" required/>
                        </div>
                        <div class="form-group">
                            <input type="date" class="form-control" name="manufacturer_date" title="Enter Manufacturer Date" placeholder="Manufacturer Date" required/>
                        </div>
                        <div class="form-group">

                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="3" name="product_description" title="Enter Product Description" placeholder="Product Description" required></textarea>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-lg btn-theme">Send Message</button>
                        </div>
                    </form>
                </div>
                <!-- END contact form -->
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
