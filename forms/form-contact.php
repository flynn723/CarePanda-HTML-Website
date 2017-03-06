<div class="alert alert-success hidden" id="MessageSent">
    We have received your message, we will contact you very soon.
</div>
<div class="alert alert-danger hidden" id="MessageNotSent">
    Oops! Something went wrong please refresh the page and try again.
</div>
<form method="post" id="contact-form" class="contact-form">
  <div class="row">
      <div class="col-md-6">
          <div class="form-group">
              <label class="sr-only" for="name">Name</label>
              <input type="text" name="name" id="name" placeholder="Name" class="form-control">
          </div>
      </div>
      <div class="col-md-6">
          <div class="form-group">
              <label class="sr-only" for="email">Email</label>
              <input type="email" name="email" id="email" placeholder="Email" class="form-control">
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
  <div class="row">
    <div class="col-xs-12 col-sm-offset-4 col-sm-4"><div class="g-recaptcha" style="margin: 0 auto;" data-sitekey="6Lcl2hUUAAAAAF5hanF9nLQBuJIDg-3Uzw4vALaN"></div></div>
  </div>
  <div class="row">
      <div class="col-md-12">
          <input type="submit" value="Submit" class="btn btn-theme btn-block btn-contact">
      </div>
  </div>
</form><!-- end of <form method="post" -->