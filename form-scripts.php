<!--
  Include this AFTER jQuery, jQuery Validate, and the reCAPTCHA API script
  have already been loaded on the page, and AFTER the two form includes.
  e.g.
    <?php include('includes/enquiry-form.php'); ?>
    <?php include('includes/contact-form.php'); ?>
    <?php include('includes/form-scripts.php'); ?>
-->
<script>
  $.validator.addMethod("custom_name", function(value, element) {
    return this.optional(element) || value === "NA" ||
      value.match(/^[a-zA-Z ]+$/);
  }, "Please use a-z, A-Z only");
  $.validator.addMethod("custom_desc", function(value, element) {
    return this.optional(element) || value === "NA" ||
      value.match(/^[a-zA-Z0-9\n ,\,&.:-]+$/);
  }, "Please use a-z, A-Z, '&' , ':' , '.' , '-' , ',' only");

  jQuery(function($) {
    "use strict";

    // Fill page_url on both forms (only runs if the form is present on this page)
    var currentPageUrl = window.location.href;
    if ($("#landing-new-forge-f-pageurl").length) {
      $("#landing-new-forge-f-pageurl").val(currentPageUrl);
    }
    if ($("#contact-form-f-pageurl").length) {
      $("#contact-form-f-pageurl").val(currentPageUrl);
    }

    if ($("#landing-new-forge-enquiry-form").length) {
      $("#landing-new-forge-enquiry-form").validate({
        ignore: [],
        rules: {
          name: {
            required: true,
            custom_name: true,
          },
          email: {
            required: true,
            email: true,
          },
          phone: {
            required: true,
            minlength: 8,
            maxlength: 15,
          },
          category: {
            required: true,
          },
          "hidden-grecaptcha": {
            required: true,
          },
        },
        messages: {
          name: {
            required: "Please enter name",
          },
          email: {
            required: "Please enter Email",
            email: "Please enter a valid email address",
          },
          phone: {
            required: "Enter your mobile no",
            minlength: "Enter 8 digits mobile number",
            maxlength: "Enter maximum 15 digits mobile number including country code",
          },
          category: {
            required: "Please select a product category",
          },
          "hidden-grecaptcha": {
            required: "Please enter captcha",
          },
        },
      });
    }

    if ($("#contactForm").length) {
      $("#contactForm").validate({
        ignore: [],
        rules: {
          txtName: {
            required: true,
            custom_name: true,
          },
          username: {
            required: true,
            email: true,
          },
          mobile: {
            required: true,
            minlength: 8,
            maxlength: 15,
          },
          message: {
            required: true,
            custom_desc: true,
          },
          "contact_captcha_token": {
            required: true,
          },
        },
        messages: {
          txtName: {
            required: "Please enter name",
          },
          username: {
            required: "Please enter Email",
            email: "Please enter a valid email address",
          },
          mobile: {
            required: "Enter your mobile no",
            minlength: "Enter 8 digits mobile number",
            maxlength: "Enter maximum 15 digits mobile number including country code",
          },
          message: {
            required: "Please enter message",
          },
          "contact_captcha_token": {
            required: "Please enter captcha",
          },
        },
      });
    }
  });

  // Google passes the verified token directly into the callback,
  // so we use that instead of grecaptcha.getResponse() (which,
  // called with no widget id, always returns widget 0's response).
  function recaptchaCallback(response) {
    jQuery("#hidden-grecaptcha").val(response);
  }

  function recaptchaExpired() {
    jQuery("#hidden-grecaptcha").val("");
  }

  function onContactCaptchaVerified(response) {
    jQuery("#contact_captcha_token").val(response);
  }

  function onContactCaptchaExpired() {
    jQuery("#contact_captcha_token").val("");
  }
</script>
