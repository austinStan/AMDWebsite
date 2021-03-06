<?php
// $name = $email = $subject = $message = "";

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $subject = $_POST['subject'];
//     $message = $_POST['message'];

//     $to = 'austinstan24@gmail.com';
//     $subject = $subject;
//     $message = $message;
//     $name = $name;
//     $from = $email;

//     $headers = 'From: YourLogoName info@gmail.com' . "\r\n";
//     $headers .= 'Reply-To: ' . $to . "\r\n";
//     $headers .= 'X-Mailer: PHP/' . phpversion();
//     $headers .= "MIME-Version: 1.0\r\n";
//     $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

//     if (mail($to, $subject, $message, $headers)) {
//         echo 'Your mail has been sent successfully.';
//     } else {
//         echo 'Unable to send email. Please try again.';
$msg = '';
$msgClass = '';

if (isset($_POST['submit'])) {
  $name =  htmlspecialchars($_POST['name']);
  $email =  htmlspecialchars($_POST['email']);
  $subject = htmlspecialchars($_POST['subject']);
  $message = htmlspecialchars($_POST['message']);
  if (!empty($email) && !empty($name) && !empty($subject) && !empty($message)) {

    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
      $msg = 'Please provide a valid email';
      $msgClass = "alert-danger";
    } else {
      //
    }
  } else {
    $msg = 'Please fill in all the fields';
    $msgClass = "alert-danger";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>AMD - Andrew Mukuye Designs</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="World's okayest designs crafted by Andrew Mukuye">
  <meta name="keywords" content="website designing, graphics design, mockup design, illustrator,branding, social media, UI/UX design, UX research, user expirence design">
  <meta name="author" content="Andrew Mukuye">

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/ionicons.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">


  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/parsley.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html"><img src="images/AMD LOGO_.png" alt="logo for andrew mukuye design"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
          <li class="nav-item"><a href="work.html" class="nav-link">Portfolio</a></li>
          <li class="nav-item active"><a href="contact.html" class="nav-link">Contact</a></li>
          <li class="nav-item"><a href="resources.html" class="nav-link">Training</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->

  <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/contact.jpg" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end">
        <div class="col-md-9 ftco-animate pb-5">
          <h2 class="mb-3 bread">Contact & Connect</h2>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Get in Touch <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-section bg-primary">
    <div class="container">
      <h1 class="team-up">Ready to team up? Lets bring your project to life.</h1>
      <div class="row no-gutters d-flex contact-info">
        <div class="col-md-3 d-flex">
          <div class="align-self-stretch box p-4 py-md-5 text-center">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="icon-map-signs"></span>
            </div>
            <h3 class="mb-4">Address</h3>
            <p>Kampala, Uganda</p>
          </div>
        </div>
        <div class="col-md-3 d-flex">
          <div class="align-self-stretch box p-4 py-md-5 text-center">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="icon-phone2"></span>
            </div>
            <h3 class="mb-4">Contact Number</h3>
            <p><a href="tel://256752369156">+ 256 752 369 156, 782 235 801 </a></p>

          </div>
        </div>
        <div class="col-md-3 d-flex">
          <div class="align-self-stretch box p-4 py-md-5 text-center">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="icon-paper-plane"></span>
            </div>
            <h3 class="mb-4">Email Address</h3>
            <p><a href="mailto:waymakandrew@gmail.com">waymakandrew@gmail.com</a></p>

          </div>
        </div>
        <div class="col-md-3 d-flex">
          <div class="align-self-stretch box p-4 py-md-5 text-center">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="icon-globe"></span>
            </div>
            <h3 class="mb-4">Website</h3>
            <p><a href="https://amdesigns.tech">www.amdesigns.tech</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">

    <div class="container-fluid px-0">

      <div class="row no-gutters block-9">
        <div class="col-md-6 order-md-last d-flex">

          <form id="contact-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="bg-light p-5 contact-form" method="POST">
            <?php if ($msg != '') : ?>
              <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
            <?php endif; ?>
            <div class="form-group">
              <input type="text" class="form-control float-label-control" id="name" name="name" placeholder="Your Name" value="<?php echo isset($_POST['name']) ? $name : ""; ?>">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="email" placeholder="Your Email" value="<?php echo  isset($_POST['email']) ? $email : ""; ?>">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" placeholder="Subject" value="<?php echo  isset($_POST['subject']) ? $subject : ""; ?>">
            </div>
            <div class="form-group">
              <textarea id="" cols="30" rows="7" name="message" class="form-control" placeholder="Message"><?php echo isset($_POST['message']) ? $message : ""; ?></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" name="submit" class="btn btn-primary py-3 px-5">
            </div>
          </form>

        </div>

        <div class="col-md-6 d-flex">
          <div class="bg-white pt-2 pl-2">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d249.35940225627132!2d32.60192463087447!3d0.33423057416280266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177dbbbee3c656ff%3A0xccf673ab710e6ae6!2sVictoria%20Tiles!5e0!3m2!1sen!2sug!4v1622805784273!5m2!1sen!2sug" width="850" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>

        </div>
      </div>
    </div>
  </section>

  <footer class="ftco-footer ftco-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">About Us</h2>
            <p>Sharing is who I am, and learning is where I am at my best, because I've been on both sides of the
              equation, I'm passionate about design and inspired by creativity. My journey is embarking on graphics
              design and brand identity client projects.</p>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
              <p>Find me on social media</p>
              <li class="ftco-animate"><a href="https://www.behance.net/andrewmukuyedesigns"><span class="icon-behance"></span></a></li>
              <li class="ftco-animate"><a href="https://www.linkedin.com/in/makandrew3/"><span class="icon-linkedin"></span></a></li>
              <li class="ftco-animate"><a href="https://www.instagram.com/andrewmukuyedesigns/"><span class="icon-instagram"></span></a></li>
              <li class="ftco-animate"><a href="https://www.facebook.com/andrewmukuyedesigns/"><span class="icon-facebook"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4 ml-md-5">
            <h2 class="ftco-heading-2">Information</h2>
            <ul class="list-unstyled">
              <li><a href="work.html" class="py-2 d-block">Portfolio</a></li>
              <li><a href="www.rhemagift.com" class="py-2 d-block">Partners</a></li>
              <li><a href="#" class="py-2 d-block">Terms Condition</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Links</h2>
            <ul class="list-unstyled">
              <li><a href="index.html" class="py-2 d-block">Home</a></li>
              <li><a href="about.html" class="py-2 d-block">About</a></li>
              <li><a href="work.html" class="py-2 d-block">Portfolio</a></li>
              <li><a href="contact.html" class="py-2 d-block">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Ready to Team up?</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text">Plot 44. Lugogo By pass, Kampala,
                    Uganda</span></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+256 752 369 156</span></a></li>
                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">waymakandrew@gmail.com</span></a></li>

              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">

          <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;
            <script>
              document.write(new Date().getFullYear());
            </script> All rights reserved | Crafted with <i class="icon-heart color-danger" aria-hidden="true"></i> by
            <a href="https://mukuye.com" target="_blank">AMD</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
    </div>
  </footer>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
    </svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/parsley.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>


</body>

</html>