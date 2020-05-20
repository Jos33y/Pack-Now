<?php 
$active = 'contact';
$title = 'Join Packnow';
include('head.php'); 

?>
<!--Body Tag-->
<!-- join packnow page image -->
<img src="assets/img/join.jpg" alt="" class="about-image">


<!--join packnow-->
<div class="container">
    <div class="join-form">
    <div class="col-md-8 mx-auto">
        <h1 class="about-packnow text-center"> Join Packnow </h1>
        <h3 class="join-sub text-center "> Kindly fill the form below to be a packnow designer</h3>
    </div>


    <form method="POST" action="join-thanks.php">
        <div class="row form-margin">
            <!-- Designers Name-->
           
                <div class="col-sm-4 names">
                    <div class="form-group">
                        <label for="first-name" class="label-text">Name</label>
                        <input type="text" class="form-control" name="firstname" placeholder="First Name">
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="last-name" class="label-text">Name</label>
                        <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                    </div>
                </div>
</div>
            <!-- designer contact info-->
            <div class="row form-margin">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="email" class="label-text">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="phone-number" class="label-text">Phone Number</label>
                        <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                    </div>
                </div>
</div>

        <div class="row form-margin">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="facebook" class="label-text">Facebook</label>
                        <input type="text" class="form-control" name="facebook" placeholder="Facebook Handle">
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="twitter" class="label-text">Twitter</label>
                        <input type="text" class="form-control" name="twitter" placeholder="Twitter Handle">
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="instagram" class="label-text">Instagram</label>
                        <input type="text" class="form-control" name="instagram" placeholder="Instagram Handle">
                    </div>
                </div>
            </div>

            <div class="row form-margin">
                <div class="col-md-9 mx-auto">
                    <label class="label-text">Upload three of your best box design</;>
                </div>
                <div class="col-sm-3"></div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="design-1" class="label-text">Design One</label>
                        <input type="file" class="form-control" name="designOne" placeholder="Facebook Handle">
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="design-2" class="label-text">Design Two</label>
                        <input type="file" class="form-control" name="designTwo" placeholder="Twitter Handle">
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="design-3" class="label-text">Design Three</label>
                        <input type="file" class="form-control" name="designThree" placeholder="Instagram Handle">
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="comment" class="label-text">Why do you want to join packnow?</label>
                    <textarea name="comment" id="comment" cols="20" rows="10" class="form-control"></textarea>
                </div>
            </div>
        <!--End of row-->

        <div class="col-md-4 mx-auto">
            <div class="form-group join">
                <button class="btn btn-primary btn-md" name="join">Join Now</button>
            </div>
        </div>

</form>
</div>
</div>


<!-- End of Body Tags -->


<!-- footer -->
<?php include('footer.html'); ?>