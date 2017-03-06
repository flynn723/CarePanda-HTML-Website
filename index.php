<!DOCTYPE html>
<html lang="en_US" prefix="og: http://ogp.me/ns#">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CarePanda | Telehealth Messaging</title>
  <meta property="og:locale" content="en_US" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="CarePanda" />
  <meta property="og:url" content="http://carepanda.com/" />
  <meta property="og:site_name" content="CarePanda" />
  <meta name="description" content="Telehealth Messaging">
  <meta name="keywords" content="">
  <meta name="author" content="CarePanda">
  <meta name="robot" content="index, follow">

  <link rel="favicon icon" href="img/ico/favicon.png" type="image/ico" sizes="16x16"/>

  <link rel='stylesheet' id='bootstrap-css-css'  href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' type='text/css' media='all' />
  <link rel='stylesheet' href='css/font-awesome.min.css' type='text/css' media='all' />

  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

  <link rel='stylesheet' id='slick-css'  href='css/slick.css' type='text/css' media='all' />
  <link rel="stylesheet" id='justinestrada-style-css' href="css/style.css" type='text/css' media='all' />

  <script type='text/javascript' src='//code.jquery.com/jquery-2.1.4.min.js?ver=4.4'></script>

  <!-- Google - ReCaptcha -->
  <!-- <script src='https://www.google.com/recaptcha/api.js'></script> -->
</head>
<body class="main-page ">
<div class="container-fluid">

  <!-- Header - Top Navbar -->
  <?php include( 'header-parts/header-top-navbar.php' ); ?>
  <!-- Header - Navbar -->
  <?php include( 'header-parts/header-navbar.php' ); ?>
  <div class="header-dropdown-menu-container container padding-0">
      <div class="header-dropdown-menu-fixed-row row grey-bg">
        <!-- Header - Dropdown -->
        <?php include( 'header-parts/header-dropdown.php' ); ?>
      </div>
  </div><!-- end of <div class="container"> -->    

  <div class="outer-row row clearfix">
    <div class="home-wrapper wrapper clearfix">

      <!-- Section - Intro Header -->
      <?php include( 'page-parts/section-intro-header.php' ); ?>

      <!-- Section - Certification -->
      <?php include( 'page-parts/section-certification.php' ); ?>

      <!-- Section - About -->
      <?php include( 'page-parts/section-about.php' ); ?>

      <!-- Section - Free Trial -->
      <?php include( 'page-parts/section-request-demo.php' ); ?>

      <!-- Section - Customers -->
      <?php include( 'page-parts/section-customers.php' ); ?>

      <!-- Section - Features -->
      <?php include( 'page-parts/section-features.php' ); ?>

      <!-- Section - Pricing -->
      <?php include( 'page-parts/section-pricing.php' ); ?>

      <!-- Section - Contact -->
      <?php //include( 'page-parts/section-contact.php' ); ?>
<section id="contact" class="section-contact section-body clearfix">
  <div class="container">
    <div class="col-xs-12 text-center">
      <h3 class="purple-clr">Contact CarePanda and Schedule a Demo</h3>
    </div>
    <div class="col-xs-12">

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    ?>
    <script>
    jQuery(document).ready(function(){
      window.location = (""+window.location).replace(/#[A-Za-z0-9_]*$/,'')+"#contact";
    });
    </script>
    <?php
    $name = trim(filter_input(INPUT_POST,"name",FILTER_SANITIZE_STRING));
    $email = trim(filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL));
    $message = trim(filter_input(INPUT_POST,"message",FILTER_SANITIZE_SPECIAL_CHARS));
    
    if ($name == "" || $email == "" || $message == "") {
        $error_message = "<li>Please fill in the required fields: Name, Email and Message</li>";
    }
    if (!isset($error_message) && $_POST["address"] != "") {
        $error_message = "<li>Bad form input</li>";
    }

    require("inc/phpmailer/class.phpmailer.php");
    
    $mail = new PHPMailer;
    
    if (!isset($error_message) && !$mail->ValidateAddress($email)) {
        $error_message =  "<li>Invalid Email Address</li>";
    }

    if (!isset($error_message)){  

        $email_body = "";
        $email_body .= "Name " . $name . "\n";
        $email_body .= "Email " . $email . "\n";
        $email_body .= "Message " . $message . "\n";
        
        $mail->setFrom($email, $name);
        $mail->addAddress('support@carepanda.com', 'CarePanda');     // Add a recipient
        
        $mail->isHTML(false);                                  // Set email format to HTML
        
        $mail->Subject = 'CarePanda Contact Form Submission';
        $mail->Body    = $email_body;
        
        if($mail->send()) {
            $sent = true;
        } else {
            $error_message = '<li>Message could not be sent.</li>';
            $error_message .= '<li>Mailer Error: ' . $mail->ErrorInfo.'</li>';            
        }
    }  // end if (!isset($error_message))
  
}
//echo '<pre>';
//var_dump($_POST);
//echo '</pre>';
?>

<?php
if (isset($error_message)) {
    echo '<div class="alert alert-danger" id="MessageNotSent">There was an Error:<ul>'.$error_message.'</ul></div>';
} elseif($sent) {
    echo '<div class="alert alert-success" id="MessageSent">We have received your message, we will contact you very soon.</div>';
}  
?>

<form method="post" action="index.php" id="contact-form" class="contact-form">
  <div class="row">
      <div class="col-md-6">
          <div class="form-group">
              <label class="sr-only" for="name">Name</label>
              <input type="text" name="name" id="name" placeholder="Name" value="<?php if(isset($name)){ echo $name; } ?>" class="form-control" required>
          </div>
      </div>
      <div class="col-md-6">
          <div class="form-group">
              <label class="sr-only" for="email">Email</label>
              <input type="email" name="email" id="email" placeholder="Email" value="<?php if(isset($email)){ echo $email; } ?>" class="form-control" required>
          </div>
      </div>
  </div>
  <div class="row">
      <div class="col-md-12">
          <div class="form-group">
              <label class="sr-only" for="message">Message</label>
              <textarea name="message" id="message" rows="8" class="form-control" placeholder="Message:"><?php if(isset($message)){ echo $message; } ?></textarea>
          </div>
      </div>
  </div>
  <!-- Start of Honey POT Field -->
  <div class="row" style="display: none;">
      <div class="col-md-12">
          <div class="form-group">
              <label for="address">Address</label>
              <input type="text" id="address" name="address" /><p>Please leave this field blank</p>
          </div>
      </div>
  </div>
  <!-- End of Honey POT Field -->
  <div class="row">
      <div class="col-md-12">
          <input type="submit" value="Submit" class="btn btn-theme btn-block btn-contact">
      </div>
  </div>
</form><!-- end of <form method="post" -->

    </div><!-- end of <div class="col-xs-12 col-sm-9"> -->
  </div><!-- end of <div class="container"> -->
</section><!-- end of <section id="contact" class="section-certification section-small-body clearfix"> -->

    </div><!-- end of .wrapper -->
  </div><!-- end of .outer-row -->

  <footer class="footer-row row clearfix grey-bg">
    <div class="footer-wrapper wrapper footer-small-body clearfix">

      <!-- Footer - First Row -->
      <?php include( 'footer-parts/footer-first-row.php' ); ?>

      <!-- Footer - Second Row -->
      <?php include( 'footer-parts/footer-second-row.php' ); ?>

    </div><!-- end of <div class="footer-wrapper wrapper clearfix"> -->
  </footer><!-- end of <footer class="footer-row -->

  <!-- Modal - App Store Buttons -->
  <?php // include( 'modal-parts/modal-app-btns.php' ); ?>

  <!-- Modal - Contact -->
  <?php // include( 'modal-parts/modal-contact.php' ); ?>

</div><!-- end of <div class="container-fluid"> -->

  <script type='text/javascript' src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js?ver=4.4'></script>
  <script type='text/javascript' src='js/slick.js'></script>
  <script type='text/javascript' src='js/script.js'></script>
  <script type="text/javascript" src="js/jquery.validate.js"></script>
  <!--<script type='text/javascript' src='js/email-sender.js'></script>-->

<script type="text/javascript">
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-81470313-1', 'auto');
ga('send', 'pageview');
</script>
  
</body>
</html>