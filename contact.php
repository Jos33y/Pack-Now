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
      <p><a href="mailto:info@packnow.com.ng" style="text-decoration:none;"  class="contact-links"> 
        <i class="fas fa-envelope"></i> info@packnow.com.ng</a>
</p>
      <h4 class="contact-text">
        Feel like talking
      </h4>
     <p> <a href="tel:+2349022145674" style="text-decoration:none;" class="contact-links">
      <i class="fas fa-phone-square-alt"></i> +2349022145674</a>
</p>
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
          <button class="btn btn-md" name="submit">Send message</button>
        </div>

      </form>

    </div>
  </div>
</div>




<!-- End of Body Tags -->


<!-- footer -->
<?php include('footer.html'); ?>



<?php 
                    
                    if(isset($_POST['submit'])){

                        /// Admin receives message with this ///

                        $sender_name = $_POST['name'];

                        $sender_email = $_POST['email'];

                        $sender_subject =  $_POST['subject'];

                        $sender_message = $_POST['message'];

                        $receiver_email = "info@packnow.com.ng";

                        $msg = $sender_name . " " . $sender_message;

                        // Always set content-type when sending HTML email
                        $headers = "MIME-Version: 1.0" . "\r\n";
                        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                        $headers .= 'From: < ' . $sender_email .'>' . "\r\n";


                     

                        if( mail($receiver_email, $sender_subject, $msg, $headers) ){

                          echo "<script> alert('Email Sent')</script>";
                          ;
                        }
                        else{
                          echo "<script> alert('Email Not Sent')</script>";
                          ;

                        }

                        /// Auto reply to sender with this ///

                        $email = $_POST['email'];

                        $subject = "Packnow";

                        $msg = "Thanks for sending us a message. we will reply your message ASAP";

                        $from = "info@packnow.com.ng";

                        mail($email, $subject, $msg, $from);

                    }
                    
                    ?>
