<?php 
$active = 'inspiration';
$title = 'Meet Designer';
include('head.php'); 

?>
<!--Body Tag-->
<!-- join packnow page image -->
<img src="assets/img/meetDesigner.jpg" alt="" class="about-image">

<div class="container">
    <div class="col-md-8 mx-auto">
        <h3 class="meet-head text-center"> Submit design request </h3>
        <hr width="40%" class="meet-line">
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-7">
            <div class="meet-form">
                <form method="POST" action="thanks.php">
                    <div class="form-group">
                        <label for="box-name" class="sr-only">Custom Box</label>
                        <input type="text" name="box-type" placeholder="Custom Box" class="form-control" disabled>
                    </div>

                    <div class="form-group">
                        <label for="quantity" class="label-text">Quantity</label>
                        <select name="qty" id="qty" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="15">15</option>
                            <option value="20">20</option>
                            <option value="50">50</option>
                            <option value="70">70</option>
                            <option value="100">100</option>
                            <option value="200">200</option>
                            <option value="500">500</option>
                            <option value="1000">1000</option>
                        </select>
                    </div>

                    <div class="form-group text-right">
                        <p class="price">Price: <span class="price-no">&#8358; 20,999.00</span></p>
                    </div>

                    <div class="form-group">
                        <p class="design">Graphic Design Fee: <span class="graphic-price"> 3,500.00</span></p>
                    </div>

                    <div class="form-group">
                        <label for="details" class="details">Please include all contact details and information you want in your design
                            here. Add all remarks, preferred colours, references and additional instructions
                            here</label>
                        <textarea name="note" class="form-control"></textarea>
                    </div>

                    <div class="form-group text-right">
                        <p class="price">Total: <span class="price-no">&#8358; 20,999.00</span></p>
                    </div>

                    <div class="form-group">
                        <label for="images" class="label-text">select files to upload below</label>
                        <input type="file" name="design-files" id="files" class="form-control" multiple="multiple">
                    </div>

                    <div class="form-group meet text-center">
                        <button class="btn btn-primary btn-md" name="join">Submit</button>
                    </div>

                    <div class="form-group text-center">
                        <p class="details"> If you need our team to help in editing, updating and redesigning your
                            order, please <a href="#" style="text-decoration: none;"> CLICK HERE </a> to order with
                            design request option at an additional fee.</p>
                    </div>
                </form>
           
                </div>
            <div class="risk">
                <div class="row">
                <div class="col-md-3">
                    <img src="assets/img/guarantee.png" alt="" class="img-fluid risk-img">
                </div>
                <div class="col-md-9">
                    <span class="risk-note">No Risk. You are in good hands. </span><br>
                    <span class="risk-text">Is your design/print not exactly what you expected? No problem. We will get
                        right or give you your money back. </span>
                </div>

</div>
            </div>
        </div>
        <div class="col-md-5">

            <div class="side-design">
                <img src="assets/img/customDesign.png" alt="" class="img-fluid">
                <p class="side-text">
                    To order for your custom box,simply upload your own design or choose from our collection of
                    amazing free templates. We will print and deliver to your doorstep anywhere within Nigeria.
                </p>
            </div>

        </div>
    </div>
</div>

<!-- End of Body Tags -->


<!-- footer -->
<?php include('footer.html'); ?>