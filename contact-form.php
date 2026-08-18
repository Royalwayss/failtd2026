<?php
// Success/fail message handling (works on any page that includes this form)
$contactMsgSuccess = '';
$contactMsgFail = '';
if (isset($_GET['contact'])) {
	if ($_GET['contact'] == 'success') {
		$contactMsgSuccess = 'Your Message has been sent';
	} elseif ($_GET['contact'] == 'fail') {
		$contactMsgFail = isset($_GET['msg']) && $_GET['msg'] != '' ? $_GET['msg'] : 'Something went wrong. Please try again.';
	}
}
?>
<?php if ($contactMsgSuccess != '') { ?>
<div class="alert alert-success" id="msgDiv"><?php echo $contactMsgSuccess; ?></div>
<?php } ?>
<?php if ($contactMsgFail != '') { ?>
<div class="alert alert-danger" id="msgDiv"><?php echo $contactMsgFail; ?></div>
<?php } ?>

<div class="contact-form">

  <form id="contactForm" name="contact_form" class="default-form2" action="submit-contact.php" method="post">
    <input type="hidden" name="page_url" id="contact-form-f-pageurl" value="">
    <div class="row">
      <div class="col-xl-12">
        <div class="input-box">
          <input type="text" name="txtName" value="" placeholder="Your Name*">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-xl-12">
        <div class="input-box">
          <input type="email" name="username" value="" placeholder="Email*">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-xl-12">
        <div class="input-box">
          <input type="text" name="mobile" value="" placeholder="Phone*">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-xl-12">
        <div class="input-box">
          <textarea name="message" placeholder="Your Message"></textarea>
        </div>
        <div class="input-box">
          <div class="g-recaptcha" data-sitekey="6LeME4orAAAAAAjubWCck5LqqjJ-YQ7IsX6Q6d-I" data-callback="onContactCaptchaVerified" data-expired-callback="onContactCaptchaExpired"></div>
          <input id="contact_captcha_token" name="contact_captcha_token" type="hidden" />
        </div>
        <div class="button-box text-center">
          <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
          <button class="btn-one" type="submit" name="btnContactSubmits" data-loading-text="Please wait...">
            <span class="txt">Send Message</span>
          </button>
        </div>
      </div>
    </div>
  </form>
</div>
