<?php 
$active = 'contact';
$title = 'Contact US';
include('head.php'); 

?>
<!--Body Tag-->
<!-- contact page image -->
<img src="assets/img/contact.jpg" alt="" class="about-image">

<!--contact packnow-->
<div class="container">
  <div class="col-md-8 mx-auto">
    <h1 class="about-packnow text-center"> Contact Us</h1>
  </div>

  <div class="row">
    <div class="col-md-6">
      <p class="contact-head">
        <span class="red-text">Don't be a stranger</span> <br> just say hello.
      </p>
      <p class="sub-contact">
        Feel free to get in touch with us. we are always open to discussing new project, creative ideas or opportunities
        to be part of your visions.
      </p>

      <h4 class="contact-text">
        Need help?
      </h4>
      <p class="contact-links"><i class="fas fa-envelope"></i> info@packnow.com</p>

      <h4 class="contact-text">
        Feel like talking
      </h4>
      <p class="contact-links"> <i class="fas fa-phone-square-alt"></i> +2347037344408</p>

      <ul class="contact-social">
        <li> <a href="#" style="text-decoration: none;"><i class="fab fa-twitter-square"></i></a></li>
        <li> <a href="#" style="text-decoration: none;"> <i class="fab fa-facebook-square"></i></a></li>
        <li> <a href="#" style="text-decoration: none;"><i class="fab fa-pinterest-square"></i></a></li>
        <li> <a href="#" style="text-decoration: none;"><i class="fab fa-instagram-square"></i></a></li>
        <li> <a href="#" style="text-decoration: none;"> <i class="fas fa-envelope"></i></a></li>

      </ul>

    </div>
    <div class="col-md-6">

      <form method="POST" class="contact-form">
        <div class="form-group">
          <label for="name" class="sr-only">Name</label>
          <input type="text" class="form-control" name="name" placeholder="Name">
        </div>

        <div class="form-group">
          <label for="email" class="sr-only">E-mail</label>
          <input type="email" class="form-control" name="email" placeholder="Email">
        </div>

        <div class="form-group">
          <label for="subject" class="sr-only">subject</label>
          <input type="text" class="form-control" name="subject" placeholder="Subject">
        </div>

        <div class="form-group">
          <label for="message" class="sr-only">Message</label>
          <textarea name="message" id="" cols="30" rows="10" class="form-control" placeholder="Message"></textarea>
        </div>

        <div class="form-group">
          <button class="btn btn-md" type="submit">Send message</button>
        </div>

      </form>

    </div>
  </div>
</div>




<!-- End of Body Tags -->


<!-- footer -->
<?php include('footer.html'); ?>