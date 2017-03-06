<section id="contact" class="section-contact section-body clearfix">
  <div class="container">
    <div class="col-xs-12 text-center">
      <h3 class="purple-clr">Contact CarePanda and Schedule a Demo</h3>
    </div>
  	<!-- <div class="col-xs-12 col-sm-3">
  		<h3 class="purple-clr">Schedule a Demo of CarePanda</h3>
  		<a href="tel:1-888-997-2632" class="section-contact-purple-btn" title="Call CarePanda" style="margin-top: 15px;">(888) 99 Panda</a>
  		<a href="mailto:support@carepanda.com" class="section-contact-green-btn" title="Email CarePanda" style="margin-top: 15px;">support@carepanda.com</a>
  	</div> -->
  	<div class="col-xs-12">

<div class="alert alert-success hidden" id="MessageSent">
    Thanks for contacting CarePanda!  We will contact you very soon.
</div>
<div class="alert alert-danger hidden" id="MessageNotSent">
    Oops! Something went wrong please refresh the page and try again.
</div>
<?php //if ($_SERVER['REQUEST_METHOD'] == "POST" ){ var_dump($_POST); }  ?>
<form method="post" id="contact-form" class="contact-form">
  <div class="row">
      <div class="col-md-6">
          <div class="form-group">
              <label class="sr-only" for="name">Name</label>
              <input type="text" name="name" id="name" placeholder="Name" class="form-control" required>
          </div>
      </div>
      <div class="col-md-6">
          <div class="form-group">
              <label class="sr-only" for="email">Email</label>
              <input type="email" name="email" id="email" placeholder="Email" class="form-control" required>
          </div>
      </div>
  </div>
  <div class="row">
      <div class="col-md-12">
          <div class="form-group">
              <label class="sr-only" for="message">Message</label>
              <textarea name="message" id="message" rows="8" placeholder="Message" class="form-control"></textarea>
          </div>
      </div>
  </div>
  <!-- <div class="row">
    <div class="col-xs-12 col-sm-offset-4 col-sm-4"><div class="g-recaptcha" style="margin: 0 auto;" data-sitekey="6Lcl2hUUAAAAAF5hanF9nLQBuJIDg-3Uzw4vALaN"></div></div>
  </div> -->
  <div class="row">
      <div class="col-md-12">
          <input type="submit" value="Submit" class="btn btn-theme btn-block btn-contact">
      </div>
  </div>
</form><!-- end of <form method="post" -->

  	</div><!-- end of <div class="col-xs-12 col-sm-9"> -->
  </div><!-- end of <div class="container"> -->
</section><!-- end of <section id="" class="section-certification section-small-body clearfix"> -->

