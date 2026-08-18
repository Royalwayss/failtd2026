<?php
// Success/fail message handling (works on any page that includes this form)
$enqMsgSuccess = '';
$enqMsgFail = '';
if (isset($_GET['enq'])) {
	if ($_GET['enq'] == 'success') {
		$enqMsgSuccess = 'Your enquiry has been sent. Our team will contact you within 24 hours.';
	} elseif ($_GET['enq'] == 'fail') {
		$enqMsgFail = isset($_GET['msg']) && $_GET['msg'] != '' ? $_GET['msg'] : 'Something went wrong. Please try again.';
	}
}

// Optional: set $ad_category_default before including this file to
// pre-select a category on a specific page, e.g.:
// $ad_category_default = 'Tractor Parts';
$ad_category_default = isset($ad_category_default) ? $ad_category_default : '';
?>
<div class="landing-new-forge-form-card" id="landing-new-forge-enquiry">
  <h2>Request a Quote</h2>
  <p class="landing-new-forge-sub">Share your drawing or requirement b our engineering team
    replies within 24 hours.</p>
  <?php if ($enqMsgSuccess != '') { ?>
  <div class="alert alert-success" id="msgDiv"><?php echo $enqMsgSuccess; ?></div>
  <?php } ?>
  <?php if ($enqMsgFail != '') { ?>
  <div class="alert alert-danger" id="msgDiv"><?php echo $enqMsgFail; ?></div>
  <?php } ?>
  <form class="row" id="landing-new-forge-enquiry-form" action="submit-enquiry.php" method="post">
    <input type="hidden" name="lead_source" value="google-ads">
    <input type="hidden" name="ad_category" id="landing-new-forge-f-adcat" value="<?php echo htmlspecialchars($ad_category_default); ?>">
    <input type="hidden" name="page_url" id="landing-new-forge-f-pageurl" value="">
    <div class="col-12 col-md-6">
      <label for="landing-new-forge-f-name">Full name *</label>
      <input id="landing-new-forge-f-name" name="name" type="text" required autocomplete="name">
    </div>
    <div class="col-12 col-md-6">
      <label for="landing-new-forge-f-company">Company</label>
      <input id="landing-new-forge-f-company" name="company" type="text" autocomplete="organization">
    </div>
    <div class="col-12 col-md-6">
      <label for="landing-new-forge-f-phone">Phone / WhatsApp *</label>
      <input id="landing-new-forge-f-phone" name="phone" type="tel" required autocomplete="tel">
    </div>
    <div class="col-12 col-md-6">
      <label for="landing-new-forge-f-email">Email *</label>
      <input id="landing-new-forge-f-email" name="email" type="email" required autocomplete="email">
    </div>
    <div class="col-12 col-md-12">
      <label for="landing-new-forge-f-cat">Product category *</label>
      <select id="landing-new-forge-f-cat" name="category" required>
        <option value="">Select a category</option>
        <option>Auto Parts</option>
        <option>Tractor Parts</option>
        <option>Railway Parts</option>
        <option>Hydraulic Parts</option>
        <option>Agriculture Parts</option>
        <option>Striking Tools</option>
        <option>Chain Links</option>
        <option>Tie Rods</option>
        <!-- <option>Custom Forging / Other</option> -->
      </select>
    </div>
    <div class="col-12 col-md-12">
      <label for="landing-new-forge-f-msg">Requirement (part, quantity, material)</label>
      <textarea id="landing-new-forge-f-msg" name="message" rows="3" placeholder=" "></textarea>
    </div>

    <div class="col-12 col-md-12">
      <div class="g-recaptcha" data-sitekey="6LeME4orAAAAAAjubWCck5LqqjJ-YQ7IsX6Q6d-I" data-callback="recaptchaCallback" data-expired-callback="recaptchaExpired"></div>
      <input id="hidden-grecaptcha" name="hidden-grecaptcha" type="hidden" />
    </div>

    <button class="landing-new-forge-btn" type="submit">Send Enquiry</button>

  </form>
</div>
