<?php 
$active = 'inspiration';
$title = 'Inspiration';
include('head.php'); 

?>
<!--Body Tag-->
<!-- contact page image -->
<img src="assets/img/inspire.png" alt="" class="about-image">


<!--inspiration packnow-->
<div class="container">
  <div class="col-md-12 mx-auto">
    <h1 class="about-packnow text-center"> Design the box of your dream</h1>
    <p class="about-text text-center">
      Then you’ve come to the right place. From bold mailer boxes to subtle shipper packaging, you’ll find a box load of
      design inspiration waiting for you below. Filter by category and click through for a deep dive into the brand and
      their custom packaging design strategy.
    </p>

</div>



    <!-- list of boxes-->
    <div class="list-boxes">
      <ul>
        <li><button id="all"> All </button></li>
        <li><button id="custombox" > Custom Box </button></li>
        <li><button id="satinbag"> Satin Bag </button></li>
        <li><button id="paperbag"> Paper Bag </button></li>
        <li><button id="giftbox"> Gift Box </button> </li>
      </ul>
      <hr class="list-line">

    

      
      <!--rows-->
      <div id="div1" class="row">
        <!--columns-->
        <div class="col-md-3">
          <div class="card">
          <img src="assets/img/list-box.jpg" class="img-fluid" alt="">
          </div>
        </div>

        <!--columns-->
        <div class="col-md-3">
          <div class="card">
          <img src="assets/img/list-box.jpg" class="img-fluid" alt="">
          </div>
        </div>

        <!--columns-->
        <div class="col-md-3">
          <div class="card">
          <img src="assets/img/list-box.jpg" class="img-fluid" alt="">
          </div>
        </div>

        <!--columns-->
        <div class="col-md-3">
          <div class="card">
          <img src="assets/img/list-box.jpg" class="img-fluid" alt="">
          </div>
        </div>
        
      </div>

       <!--rows-->
       <div id="div2" class="row">
        <!--columns-->
        <div class="col-md-3">
          <div class="card">
          <img src="assets/img/list-box.jpg" class="img-fluid" alt="">
          </div>
        </div>

        <!--columns-->
        <div class="col-md-3">
          <div class="card">
          <img src="assets/img/list-box.jpg" class="img-fluid" alt="">
          </div>
        </div>

        <!--columns-->
        <div class="col-md-3">
          <div class="card">
          <img src="assets/img/list-box.jpg" class="img-fluid" alt="">
          </div>
        </div>
        
      </div>

       <!--rows-->
       <div id="div3" class="row">
        <!--columns-->
        <div class="col-md-3">
          <div class="card">
          <img src="assets/img/list-box.jpg" class="img-fluid" alt="">
          </div>
        </div>

        <!--columns-->
        <div class="col-md-3">
          <div class="card">
          <img src="assets/img/list-box.jpg" class="img-fluid" alt="">
          </div>
        </div>

       
        
      </div>

       <!--rows-->
       <div id="div4" class="row">
        <!--columns-->
        <div class="col-md-3">
          <div class="card">
          <img src="assets/img/list-box.jpg" class="img-fluid" alt="">
          </div>
        </div>
       
        
      </div>

    </div>


    <hr >

    <!--featured artist-->
<div class="container">
    <div class="featured-artist">
      <h3> Featured Artists</h3>

      <div class="row artist">
        <!--artist column starts -->
        <div class="col-md-4">
          <div class="card">
            <div class="card-header one text-center">

              <img src="assets/img/girl.jpg" class="rounded-circle artist-img" alt="">
            </div>

            <div class="card-body">
              <h5 class="card-title">Martha Saurez</h5>
              <p class="card-text">Artist from Baja, Mexico. Color is essential in my life and my work reflects it among
                my paintings. Abstract and floral designs are my main style.</p>
            </div>
          </div>
        </div>

        <!--artist column starts -->
        <div class="col-md-4">

          <div class="card">
            <div class="card-header two text-center">

              <img src="assets/img/woman.jpg" class="rounded-circle artist-img" alt="">
            </div>

            <div class="card-body">
              <h5 class="card-title">Isabela Humphrey</h5>
              <p class="card-text">Isabela is a visual designer and illustrator currently based in Mexico City. Her work
                is
                inspired by the vibrant and colorful culture that surrounds her.</p>
            </div>
          </div>
        </div>

        <!--artist column starts -->
        <div class="col-md-4">

          <div class="card">
            <div class="card-header three text-center">

              <img src="assets/img/man.jpg" class="rounded-circle artist-img" alt="">
            </div>

            <div class="card-body">
              <h5 class="card-title">Bonnie Kate Wolf</h5>
              <p class="card-text">Illustrator and brand designer. Originally from San Francisco. <br> <br> <br></p>
            </div>
          </div>
        </div>

      </div>
    </div>




  </div>

</div>





<!-- End of Body Tags -->


<!-- footer -->
<?php include('footer.html'); ?>