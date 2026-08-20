<?php
$enqMsgSuccess = '';
$enqMsgFail = '';
if (isset($_GET['enq'])) {
	if ($_GET['enq'] == 'success') {
		$enqMsgSuccess = 'Your enquiry has been sent. Our team will contact you within 24 hours.';
	} elseif ($_GET['enq'] == 'fail') {
		$enqMsgFail = isset($_GET['msg']) && $_GET['msg'] != '' ? $_GET['msg'] : 'Something went wrong. Please try again.';
	}
}

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
<!DOCTYPE html>
<html lang="en">

  <head>
  <?php if($_SERVER['HTTP_HOST'] != 'localhost'){  ?>
   <!-- Google tag (gtag.js) -->

<script async src="https://www.googletagmanager.com/gtag/js?id=AW-17844390114"></script>

<script>

  window.dataLayer = window.dataLayer || [];

  function gtag(){dataLayer.push(arguments);}

  gtag('js', new Date());

 

  gtag('config', 'AW-17844390114');

</script>

  <?php  } ?>
    <meta charset="UTF-8">
    <title>Forged Components Manufacturer in India - Forge Auto International </title>
<meta name="robots" content="noindex, nofollow">
    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/imp.css">
    <link rel="stylesheet" href="assets/css/custom-animate.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/scrollbar.css">
    <link rel="stylesheet" href="assets/css/hiddenbar.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">

    <link rel="stylesheet" href="assets/css/color.css">
    <link href="assets/css/color/theme-color.css" id="jssDefault" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/rtl.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="assets/images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="assets/images/favicon/favicon-16x16.png" sizes="16x16">

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="assets/js/html5shiv.js"></script>
    <![endif]-->
    <style>
      .header-top-style4_left::before {
        content: "";
        position: absolute;
        top: 0;
        left: -1000000px;
        bottom: 0;
        right: -50px;
        background: unset !important;
        z-index: -1;
      }

      .header-contact-info3 ul li {
        font-size: 15px;
      }

      .header-social-link-1 .social-link ul li a {
        position: relative;
        display: block;
        height: 30px;
        width: 30px;
        background: #fbfbfd;
        border-radius: 50%;
        color: #222222;
        font-size: 14px;
        line-height: 30px;
        text-align: center;
        transition: all 200ms linear;
        transition-delay: 0.1s;
        z-index: 1;
      }

      .header-top-style4_left {
        position: relative;
        display: block;
        padding: 10px 0;
        z-index: 1;
      }

      .header-top-style4 {
        background-color: #000;
      }

      /* new css banner start */
      /* b b  Hero b b  */
      .landing-new-forge-hero {
        background: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url('https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        color: #fff;
        position: relative;
        overflow: hidden;
        padding-top: 64px;
        padding-bottom: 72px;
      }

      .landing-new-forge-hero::after {
        content: "";
        position: absolute;
        right: -120px;
        top: -80px;
        width: 520px;
        height: 520px;
        background: radial-gradient(circle, rgba(232, 132, 44, .15), rgba(183, 34, 42, .05) 55%, transparent 70%);
        pointer-events: none;
      }

      .landing-new-forge-hero .landing-new-forge-hero-content {
        position: relative;
        z-index: 1;
      }

      .landing-new-forge-eyebrow {
        display: inline-block;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .14em;
        text-transform: uppercase;
        color: #E8842C;
        border: 1px solid rgba(232, 132, 44, .45);
        padding: 5px 12px;
        border-radius: 3px;
        margin-bottom: 20px;
      }

      .landing-new-forge-hero h1 {
        font-size: clamp(32px, 4.4vw, 52px);
        font-weight: 800;
        margin-bottom: 18px;
        color: #fff !important;
      }

      .landing-new-forge-hero h1 em {
        font-style: normal;
        color: #E8842C;
      }

      .landing-new-forge-lead {
        font-size: 18px;
        color: #c8cdd4;
        margin-bottom: 26px;
      }

      .landing-new-forge-ticks {
        list-style: none;
        padding: 0;
        margin-bottom: 30px;
      }

      .landing-new-forge-ticks li {
        padding-left: 30px;
        position: relative;
        color: #e6e9ec;
        font-size: 15px;
        margin-bottom: 10px;
      }

      .landing-new-forge-ticks li::before {
        content: "✓";
        position: absolute;
        left: 0;
        top: 0;
        width: 20px;
        height: 20px;
        background: #ec7f47;
        color: #fff;
        border-radius: 3px;
        display: grid;
        place-items: center;
        font-size: 12px;
        font-weight: 700;
      }

      .landing-new-forge-cert-strip {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
      }

      .landing-new-forge-cert-strip span {
        font-size: 12px;
        font-weight: 600;
        color: #fff;
        background: rgba(255, 255, 255, .08);
        border: 1px solid rgba(255, 255, 255, .18);
        padding: 6px 12px;
        border-radius: 3px;
        letter-spacing: .04em;
      }

      /* b b  Form card b b  */
      .landing-new-forge-form-card {
        background: #FFFFFF;
        color: #181B20;
        border-radius: 8px;
        padding: 30px 28px;
        box-shadow: 0 18px 50px rgba(0, 0, 0, .35);
      }

      .landing-new-forge-form-card h2 {
        font-size: 22px;
        font-weight: 800;
        margin-bottom: 4px;
      }

      .landing-new-forge-form-card .landing-new-forge-sub {
        font-size: 14px;
        color: #6E7681;
        margin-bottom: 20px
      }

      .landing-new-forge-form-card label {
        display: block;
        font-size: 13px;
        font-weight: 600;
        margin: 14px 0 5px
      }

      .landing-new-forge-form-card input,
      .landing-new-forge-form-card select,
      .landing-new-forge-form-card textarea {
        width: 100%;
        padding: 11px 12px;
        border: 1px solid #E2E0DB;
        border-radius: 4px;
        font: inherit;
        font-size: 15px;
        background: #fbfaf8
      }

      .landing-new-forge-form-card input:focus,
      .landing-new-forge-form-card select:focus,
      .landing-new-forge-form-card textarea:focus {
        outline: 2px solid #ec7f47;
        border-color: #ec7f47
      }

      .landing-new-forge-form-card .landing-new-forge-btn {
        width: 100%;
        margin-top: 20px;
        padding: 15px
      }

      .landing-new-forge-form-card .landing-new-forge-privacy {
        font-size: 12px;
        color: #6E7681;
        margin-top: 12px;
        text-align: center
      }

      .landing-new-forge-form-card .landing-new-forge-resp {
        text-align: center;
        font-size: 13px;
        font-weight: 600;
        color: #ec7f47;
        margin-top: 10px
      }

      .landing-new-forge-form-card label.error {
        display: block;
        color: #e02424;
        font-size: 12px;
        font-weight: 600;
        margin: 4px 0 0;
      }

      .landing-new-forge-form-card input.error,
      .landing-new-forge-form-card select.error,
      .landing-new-forge-form-card textarea.error {
        border-color: #e02424;
      }

      #contactForm label.error {
        display: block;
        color: #e02424;
        font-size: 12px;
        font-weight: 600;
        margin-top: 4px;
      }

      #contactForm input.error,
      #contactForm textarea.error {
        border-color: #e02424;
      }

      .landing-new-forge-btn {
        display: inline-block;
        background: #ec7f47;
        color: #fff;
        font-family: 'Archivo';
        font-weight: 700;
        font-size: 15px;
        letter-spacing: .02em;
        padding: 13px 26px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        text-decoration: none;
        text-transform: uppercase;
        transition: background .2s
      }

      .landing-new-forge-btn:hover {
        background: #8E161D
      }

      /* b b  Sections b b  */
      .landing-new-forge-pad {
        padding: 72px 0;
        background-color: #f5f5f5;
      }

      .landing-new-forge-sec-head {
        max-width: 640px;
        margin: 0 auto 44px;
        text-align: center
      }

      .landing-new-forge-sec-head h2 {
        font-size: clamp(26px, 3.2vw, 38px);
        font-weight: 800;
        margin-bottom: 12px
      }

      .landing-new-forge-sec-head p {
        color: #6E7681
      }

      .landing-new-forge-rule {
        width: 56px;
        height: 4px;
        background: #ec7f47;
        margin: 0 auto 18px
      }

      /* Category grid */
      .landing-new-forge-cat {
        background: #FFFFFF;
        border: 1px solid #E2E0DB;
        border-radius: 6px;
        padding: 24px 20px;
        position: relative;
        transition: transform .2s, box-shadow .2s;
        cursor: pointer;
        margin-bottom: 18px;
        text-align: center;
      }

      .landing-new-forge-cat:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 28px rgba(24, 27, 32, .12)
      }

      .landing-new-forge-cat::before {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 4px;
        background: linear-gradient(180deg, #E8842C, #ec7f47);
        border-radius: 6px 0 0 6px
      }

      .landing-new-forge-cat h3 {
        font-size: 17px;
        font-weight: 700;
        margin-bottom: 8px
      }

      .landing-new-forge-cat p {
        font-size: 15px;
        color: #6E7681
      }

      .landing-new-forge-cat a {
        display: inline-block;
        margin-top: 12px;
        font-size: 13px;
        font-weight: 700;
        color: #ec7f47;
        text-decoration: none;
        text-transform: uppercase;
        letter-spacing: .05em
      }

      /*  new css banner end  */
      .landingpage-about .icon {
        position: absolute;
        display: flex;
        align-items: center;
        justify-content: center;
        top: 70px;
        left: -70px;
        width: 140px;
        height: 115px;
        z-index: 1;
        overflow: hidden;
      }

      .landingpage-about .icon span::before {
        position: relative;
        left: 15px;
        color: #fff;
        font-size: 100px !important;
        line-height: 100px !important;
      }

      .single-service-style3 .text-holder {
        position: relative;
        display: block;
        background: #ffffff;
        padding: 20px 1px 20px;
      }

      .landing-page-margin {
        margin: 10px auto;
        padding: 0px !important;
      }

      .video-gallery_box_2 .inner {
        position: absolute;
        bottom: 0px;
        right: 0;
        width: 140px;
        height: 140px;
        overflow: hidden;
        padding: 30px 0;
        z-index: 2;
      }

      .video-gallery_box_2 .inner::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0px;
        bottom: 0;
        right: 0px;
        background: #ec7d1b !important;
        z-index: -1;
        -moz-transform: unset !important;
        -webkit-transform: unset !important;
        -o-transform: unset !important;
        -ms-transform: unset !important;
        transform: unset !important;
        border-radius: 50%;
      }

      .video-gallery_box_2 .inner h3 {
        color: #222222;
        font-size: 12px;
        line-height: 20px;
        font-weight: 600;
        text-transform: capitalize;
        margin: 7px 0 0;
      }

      .sec-title.style3 .sub-title h5 {
        color: #ec7d1b !important;
      }

      .counter-img img {
        width: 80px;
      }

      .mission-vision-content-box ul li .icon span::before {
        color: #ec7d1b;
        font-size: 100px;
        line-height: 0;
      }

      .mission-vision-content-box h2 {
        color: #ec7d1b;
        font-size: 40px;
        line-height: 1.2em;
        font-weight: 500;
      }

      .fact-counter-style2-area {
        background-color: #f5f5f5;
      }

      @media(prefers-reduced-motion:reduce) {
        * {
          transition: none !important;
          animation: none !important
        }

        html {
          scroll-behavior: auto
        }
      }

      @media(max-width:768px) {
        .landing-new-forge-hero {
          padding-top: 40px;
          padding-bottom: 40px
        }

        .landing-new-forge-form-card {
          margin-top: 30px
        }

        #landing-new-forge-hero-section .container-fluid,
        #landing-new-forge-hero-section .row.px-5 {
          padding-left: 0;
          padding-right: 0;
        }

        #landing-new-forge-hero-section .landing-new-forge-hero-content {
          padding-left: 20px;
          padding-right: 20px;
        }

        .landing-new-forge-form-card {
          border-radius: 0;
        }
      }
    </style>
  </head>

  <body>
    <div class="boxed_wrapper ltr">
      <header class="main-header header-style-four">
        <div class="header-top-style4">
          <div class="container-fluid">
            <div class="outer-box clearfix">

              <div class="header-top-style4_left pull-left">
                <div class="header-contact-info3">
                  <ul>
                    <li><span class="flaticon-incoming-call"></span><a href="tel:+91 8999999195">+91
                        89999-99195</a></li>
                    <li><span class="flaticon-envelope-1"></span><a href="mailto:siddharthmittal@faipl.com">siddharthmittal@faipl.com</a></li>
                  </ul>
                </div>
              </div>

              <div class="header-top-style4_right pull-right">
                <div class="header-social-link-1 header-social-link-4">
                  <div class="social-link">
                    <ul class="clearfix">
                      <li><a href="https://www.facebook.com/forgeautointernationallimited" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                      <li><a href="https://www.linkedin.com/company/forgeautointernational/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                      <li><a href="https://www.instagram.com/forgeautointernational.ltd?igsh=aGFhMng4cjJ0a3J6" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!--End Header Top-->
        <!--Start Header-->
        <div class="header-style4">
          <div class="container-fluid">
            <div class="outer-box clearfix">
              <!--<div id="google_translate_element" class="text-right mg-top20"></div>-->
              <div class="header-style4_left pull-left">
                <div class="logo">
                  <a href="index.php"><img src="assets/images/resources/logo-1.png" alt="Tractor, Auto, Agriculture, Combine & Railway Parts Manufacturer - Forge Auto International Limited - Forging Parts Manufacturer in India" title="Tractor, Auto, Agriculture, Combine & Railway Parts Manufacturer - Forge Auto International Limited - Forging Parts Manufacturer in India"></a>
                </div>
              </div>
              <div class="header-style4_right pull-right">
                <div class="nav-outer clearfix">
                  <!--Mobile Navigation Toggler-->
                  <div class="mobile-nav-toggler">
                    <div class="inner">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </div>
                  </div>
                  <!-- Main Menu -->
                  <nav class="main-menu style4 navbar-expand-md navbar-light">
                    <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                      <ul class="navigation clearfix">
                        <!-- <li class="dropdown current">
                                    <a class="home" href="#">
                                        <span class="home_text">Home</span>
                                        <span class="flaticon-home home_icon"></span>
                                    </a>
                                    <ul>
                                        <li><a href="index-4.html">Home Factory</a></li>
                                        <li><a href="index-2.html">Home Industry</a></li>
                                        <li><a href="index-3.html">Home Construction</a></li>
                                        <li><a href="index-4.html">Home Renewable Energy</a></li>
                                        <li><a href="index-5.html">Home OilGas</a></li>
                                        <li><a href="index-onepage.html">Home OnePage</a></li>
                                        <li class="dropdown"><a href="#">Header Styles</a>
                                            <ul>
                                                <li><a href="index-4.html">Header Style One</a></li>
                                                <li><a href="index-2.html">Header Style Two</a></li>
                                                <li><a href="index-3.html">Header Style Three</a></li>
                                                <li><a href="index-4.html">Header Style Four</a></li>
                                                <li><a href="index-5.html">Header Style Five</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    </li> -->
                        <li><a href="index.php">Home</a></li>
                        <li class="dropdown">
                          <a href="#">About us</a>
                          <ul>
                            <li>
                              <a href="about.php">Overview</a>
                            </li>
                            <!-- <li>
                                          <a href="directors-message.php">Directors Message</a>
                                          </li> -->
                            <li>
                              <a href="milestone.php">Milestone</a>
                            </li>
                            <li>
                              <a href="mission-vision-and-future-plans.php">Mission, Vision &
                                Future
                                Plans</a>
                            </li>
                            <li>
                              <a href="management.php">Management</a>
                            </li>
                            <li>
                              <a href="quality-policy.php">Quality Policy</a>
                            </li>
                          </ul>
                        </li>
                        <!-- <li class="dropdown"><a href="#">Services</a>
                                    <ul>
                                        <li><a href="services-v1.html">Services Style One</a></li>
                                        <li><a href="services-v2.html">Services Style Two</a></li>
                                        <li><a href="services-v3.html">Services Style Three</a></li>
                                        <li><a href="services-detail-v1.html">Oil & Gas Engineering</a></li>
                                        <li><a href="services-detail-v2.html">Power & Energy</a></li>
                                        <li><a href="services-detail-v3.html">Industrial Exploration</a>
                                        </li>
                                        <li><a href="services-detail-v4.html">Automation Industry</a></li>
                                        <li><a href="services-detail-v5.html">Manufacturing Plants</a></li>
                                        <li><a href="services-detail-v6.html">Chemical Research</a></li>
                                    </ul>
                                    </li> -->
                        <!-- <li class="dropdown"><a href="#">Pages</a>
                                    <ul>
                                        <li><a href="team.html">Our Team</a></li>
                                        <li><a href="testimonials.html">Testimonials</a></li>
                                        <li><a href="faq.html">Faq</a></li>
                                        <li><a href="error.html">404 Error page</a></li>
                                    </ul>
                                    </li> -->
                        <!-- <li class="dropdown"><a href="#">News</a>
                                    <ul>
                                        <li><a href="blog.html">News Grid View</a></li>
                                        <li><a href="blog-v2.html">News List View</a></li>
                                        <li><a href="blog-single.html">News Details</a></li>
                                    </ul>
                                    </li> -->
                        <!-- <li><a href="infrastructure.php">Infrastructure</a></li> -->
                        <li class="dropdown">
                          <a href="infrastructure.php">Infrastructure</a>
                          <ul>
                            <li>
                              <a href="design-engineering.php">Design & Engineering
                                Department</a>
                            </li>
                            <li>
                              <a href="forge-shop.php">Forge Shop</a>
                            </li>
                            <li>
                              <a href="press-shop.php">Press Shop</a>
                            </li>
                            <li>
                              <a href="ring-rollings.php">Ring Rolling</a>
                            </li>
                            <li>
                              <a href="heat-treatment.php">Heat Treatment</a>
                            </li>
                            <li>
                              <a href="machine-shop.php">Machine Shop</a>
                            </li>
                            <li>
                              <a href="quality-checking.php">Quality Checking Instruments</a>
                            </li>
                            <li>
                              <a href="capabilities.php">Capabilities</a>
                            </li>
                          </ul>
                        </li>
                        <li class="dropdown">
                          <a href="#">Products</a>
                          <ul>
                            <li>
                              <a href="auto-parts.php">Auto Parts</a>
                            </li>
                            <li>
                              <a href="tractor-parts.php">Tractor Parts</a>
                            </li>
                            <li>
                              <a href="striking-tools.php">Striking Tools</a>
                            </li>
                            <li>
                              <a href="hydraulic-parts.php">Hydraulic Parts</a>
                            </li>
                            <li>
                              <a href="agriculture-parts.php">Agriculture Parts</a>
                            </li>
                            <li>
                              <a href="railway-parts.php">Railway Parts</a>
                            </li>
                            <li>
                              <a href="chain-links.php">Chain Links</a>
                            </li>
                            <li>
                              <a href="wheel-assembly.php">5th Wheel Assembly</a>
                            </li>
                            <li>
                              <a href="tie-rods.php">Tie Rods</a>
                            </li>
                            <li>
                              <a href=" oil-gas-industry.php">Oil & Gas Industry</a>
                            </li>
                            <li>
                              <a href=" ring-rolling.php">Ring Rolling</a>
                            </li>
                          </ul>
                        </li>
                        <!-- <li><a href="events.php">Events</a></li> -->
                        <!-- <li><a href="sustainability.php">Sustainability</a></li> -->
                        <!-- <li><a href="exhibitions.php"></a></li>
                                    <li><a href="awards.php"></a></li> -->
                        <li class="dropdown">
                          <a href="#">Investor Relation</a>
                          <ul class="dropdown">
                            <li class="dropdown">
                              <a href="javascript::void()">Corporate Governance</a>
                              <ul>
                                <li><a href="bod.php">BOD and Committee</a></li>
                                <li><a href="directorProfile.php">Director Profile</a></li>
                                <li><a href="javascript::void()">Corporate Profile</a></li>
                                <li><a href="corporatePolicies.php">Corporate Policies</a>
                                </li>
                                <li><a href="prospectus.php">Prospectus</a></li>
                              </ul>
                            </li>
                            <li class="dropdown">
                              <a href="">Financials and Reports</a>
                              <ul>
                                <li><a href="financialResults.php">Financial Results</a>
                                </li>
                                <li><a href="annual-reports.php">Annual Reports</a></li>
                                <li><a href="">Annual Returns</a></li>
                                <li><a href="">Investors Presentation</a>
                                </li>
                                <li><a href="group-company.php">Group Company</a></li>
                              </ul>
                            </li>
                            <li><a href="javascript::void()">Shareholding Pattern</a>
                            </li>
                            <li class="dropdown">
                              <a href="javascript::void()">Stock Exchange</a>
                              <ul>
                                <li><a href="javascript::void()">Other Disclosures /
                                    Announcements</a>
                                </li>
                              </ul>
                            </li>
                            <li><a href="javascript::void()">Board Meeting</a></li>
                            <li class="dropdown">
                              <a href="javascript::void()">General Meeting</a>
                              <ul>
                                <li><a href="javascript::void()">Annual General Meeting</a>
                                </li>
                                <li><a href="javascript::void()">Extra-ordinary General
                                    Meeting</a>
                                </li>
                                <li><a href="javascript::void()">Postal Ballot</a></li>
                              </ul>
                            </li>
                            <li><a href="javascript::void()">Archives</a>
                            </li>
                            <li><a href="javascript::void()">Help Desk</a>
                            </li>
                          </ul>
                        </li>
                        <li><a href="sustainability.php">Sustainability</a></li>
                        <li class="dropdown">
                          <a>Media</a>
                          <ul>
                            <li>
                              <a href="exhibitions.php">Exhibitions</a>
                            </li>
                            <li>
                              <a href="awards.php">Awards</a>
                            </li>
                          </ul>
                        </li>
                        <!-- <li><a href="clients.php">Clients</a></li> -->
                        <li><a href="contact.php">Contact</a></li>
                        <!-- <li><a href="#">Enquiry</a></li> -->
                      </ul>
                    </div>
                  </nav>
                  <!-- Main Menu End-->
                </div>
                <!-- <div class="outer-search-box-style1 outer-search-box-style4">
                        <div class="seach-toggle"><span class="flaticon-magnifiying-glass"></span></div>
                        <ul class="search-box">
                            <li>
                                <form method="post" action="index-4.html">
                                    <div class="form-group">
                                        <input type="search" name="search" placeholder="Search Here"
                                            required="">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                </form>
                            </li>
                        </ul>
                        </div> -->
                <!-- <div class="header-style4_right__btn">
                        <a class="btn-one" href="#"><span class="txt"><i class="left flaticon-login"></i>Get a
                                quote</span></a>
                        </div> -->
              </div>
            </div>
          </div>
        </div>
        <!--End header-->
        <!--Sticky Header-->
        <div class="sticky-header">
          <div class="container-fluid">
            <div class="clearfix">
              <!--Logo-->
              <div class="logo float-left">
                <a href="index.php" class="img-responsive"><img src="assets/images/resources/logo-1.png" alt="Tractor, Auto, Agriculture, Combine & Railway Parts Manufacturer - Forge Auto International Limited - Forging Parts Manufacturer in India" title="Tractor, Auto, Agriculture, Combine & Railway Parts Manufacturer - Forge Auto International Limited - Forging Parts Manufacturer in India"></a>
              </div>
              <!--Right Col-->
              <div class="right-col float-right">
                <!-- Main Menu -->
                <nav class="main-menu style4 clearfix">
                  <!--Keep This Empty / Menu will come through Javascript-->
                </nav>
              </div>
            </div>
          </div>
        </div>
        <!--End Sticky Header-->
        <!-- Mobile Menu  -->
        <div class="mobile-menu">
          <div class="menu-backdrop"></div>
          <div class="close-btn"><span class="icon fa fa-times-circle"></span></div>
          <nav class="menu-box">
            <div class="nav-logo"><a href="index.php"><img src="assets/images/resources/logo.png" alt="" title=""></a></div>
            <div class="menu-outer">
              <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
            <!--Social Links-->
            <!--  <div class="social-links">
                  <ul class="clearfix">
                      <li><a href="#"><span class="fab fa fa-facebook-square"></span></a></li>
                      <li><a href="#"><span class="fab fa fa-twitter-square"></span></a></li>
                      <li><a href="#"><span class="fab fa fa-pinterest-square"></span></a></li>
                      <li><a href="#"><span class="fab fa fa-google-plus-square"></span></a></li>
                      <li><a href="#"><span class="fab fa fa-youtube-square"></span></a></li>
                  </ul>
                  </div> -->
          </nav>
        </div>
        <!-- End Mobile Menu -->
      </header>
      <!-- Hero + Form -->
      <section class="landing-new-forge-hero" id="landing-new-forge-hero-section">
        <div class="container-fluid">
          <div class="row align-items-center px-5">
            <!-- Left Content -->
            <div class="col-lg-6 landing-new-forge-hero-content">
              <span class="landing-new-forge-eyebrow" id="landing-new-forge-dyn-eyebrow">Forged Components
                Manufacturer in India</span>
              <h1 id="landing-new-forge-dyn-h1">Precision <em>Hot Forged Components</em> for Auto, Tractor,
                Railway &amp; Industry</h1>
              <p class="landing-new-forge-lead" id="landing-new-forge-dyn-lead">Customised closed-die hot forgings in carbon & alloy steel, from 500 g to 20 kg trusted by leading OEMs and industrial manufacturers across the globe.</p>
              <ul class="landing-new-forge-ticks">
                <li>4.5 million+ parts manufactured every year</li>
                    <li>Forging, machining and heat treatment under one ecosystem</li>
                    <li>Carbon and alloy steel expertise</li>
                    <li>Quality-focused production with complete traceability</li>
                    <li>Reliable supplier for Indian and global OEMs</li>
              </ul>
              <div class="landing-new-forge-cert-strip">
                <span>ISO 9001</span><span>IATF 16949</span><span>ISO 14001</span><span>ISO
                  45001</span><span>ZED GOLD</span>
              </div>
            </div>

            <!-- Right Form -->
            <div class="col-lg-6">
              <?php include('include/enquiry-form.php'); ?>
            </div>
          </div>
        </div>
      </section>

      <!-- <section id="banner" class="main-slider style3">
            <div class="slider-box">
           
                <div class="banner-carousel owl-theme owl-carousel">
                 
                    <div class="slide">
                        <div class="image-layer" style="background-image:url(assets-landing/images/banner-1.jpg)"></div>
                        <div class="top_shadow"></div>
                        <div class="shadow_box"></div>
                        <div class="auto-container">
                            <div class="content">
                                <div class="sub_title">
                                    <h4>High precision in part dimensions</h4>
                                </div>
                                <div class="big-title">
                                    <h2>Carbon & Alloy Steel Ranging</h2>
                                </div>
                              
                                <div class="btns-box">
                                    <div class="left">
                                        <a class="btn-one " href="about.php"><span class="txt text-white"><i
                                                    class="left flaticon-login"></i>Read More</span></a>
                                    </div>
                                
                                </div>

                            </div>
                        </div>
                    </div>
             
                    <div class="slide">
                        <div class="image-layer" style="background-image:url(assets-landing/images/banner-2.jpg)"></div>
                        <div class="top_shadow"></div>
                        <div class="shadow_box"></div>
                        <div class="auto-container">
                            <div class="content">
                                <div class="sub_title">
                                    <h4>Forging Excellence</h4>
                                </div>
                                <div class="big-title">
                                    <h2>Shaping Futures, Delivering Quality</h2>
                                </div>
                             
                                <div class="btns-box">
                                    <div class="left">
                                        <a class="btn-one " href="about.php"><span class="txt text-white"><i
                                                    class="left flaticon-login"></i>Read More</span></a>
                                    </div>
                                   
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section> -->
      <!--Start Fact Counter Style2 Area-->
      <section class="fact-counter-style2-area pb-5">
        <div class="container-box">
          <div class="sec-title style3 with_text text-center">
            <div class="sub-title">
              <span class="border-box"></span>
              <h5>Key Points</h5>
            </div>
            <h2>From Local Roots to Global Heights <br>
              Our Journey in Numbers</h2>

          </div>
          <div class="row">
            <div class="col-xl-12">
              <ul class="fact-counter-style2_box">
                <!--Start Single Fact Counter Style2-->
                <li class="single-fact-counter-style2 wow fadeInUp counter-img" data-wow-delay="100ms" data-wow-duration="1500ms">
                  <div class="top">
                    <div class="icon ">
                      <img src="assets-landing/images/calendar-1.png" alt="Factory Icon">
                    </div>
                    <div class="count-box">
                      <h2>
                        <span class="timer" data-from="1" data-to="25" data-speed="5000" data-refresh-interval="50">25</span>
                        <span class="fa fa-plus plus_icon"></span>
                      </h2>
                      <h5>Years Experience</h5>
                    </div>
                  </div>
                  <div class="text-box">

                  </div>
                </li>
                <!--End Single Fact Counter Style2-->
                <!--Start Single Fact Counter Style2-->
                <li class="single-fact-counter-style2 wow fadeInUp counter-img" data-wow-delay="100ms" data-wow-duration="1500ms">
                  <div class="top">
                    <div class="icon">
                      <img src="assets-landing/images/trophy-1.png" alt="Factory Icon">
                    </div>
                    <div class="count-box">
                      <h2>
                        <span class="timer" data-from="1" data-to="5" data-speed="5000" data-refresh-interval="50">5</span>
                        <span class="fa fa-plus plus_icon"></span>
                      </h2>
                      <h5>Awards</h5>
                    </div>
                  </div>
                  <div class="text-box">

                  </div>
                </li>
                <!--End Single Fact Counter Style2-->
                <!--Start Single Fact Counter Style2-->
                <li class="single-fact-counter-style2 wow fadeInUp counter-img" data-wow-delay="100ms" data-wow-duration="1500ms">
                  <div class="top">
                    <div class="icon ">
                      <img src="assets-landing/images/piston-1.png" alt="Factory Icon">
                    </div>
                    <div class="count-box">
                      <h2>
                        <span class="timer" data-from="1" data-to="100" data-speed="5000" data-refresh-interval="50">100</span>
                        <span class="fa fa-plus plus_icon"></span>
                      </h2>
                      <h5>Products</h5>
                    </div>
                  </div>
                  <div class="text-box">

                  </div>
                </li>
                <!--End Single Fact Counter Style2-->
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!--End Fact Counter Style2 Area-->
      <section id="about" class="about-style3-area">
        <div class="container">
          <div class="row">

            <div class="col-xl-6">
              <div class="about-style3_image_box landingpage-about">
                <div class="inner">
                  <img src="assets-landing/images/about-landing.jpg" alt="">
                </div>
                <div class="icon-Outer"></div>
                <div class="icon clr3">
                  <span class="icon-icon-7"></span>
                </div>
              </div>
            </div>

            <div class="col-xl-6 justify-content-center d-flex align-items-center">
              <div class="about-style3_text_box">
                <div class="sec-title style3 with_text">
                  <div class="sub-title">
                    <span class="border-box"></span>
                    <h5>Our Company</h5>
                  </div>
                  <h2>Since its inception in
                    2001, over a span of 25 years,</span></h2>
                  <!-- <p>Sharing State-of-the-Art Facilities & Equipments For Building Refine Energy Units.</p> -->
                </div>
                <div class="inner-content">
                  <div class="text">
                    <p>Formerly known as Auto International, our small unit has developed into
                      well-equipped and professionally managed company. Today we are reputed
                      manufacturer for customized closed die Hot Forging in Carbon and Alloy Steel
                      ranging from 1kg to 20 kg...</p>
                  </div>
                </div>
                <div class="readmore-button">
                  <a class="btn-one" href="about.php"><span class="txt"><i class="left flaticon-login"></i>Read More</span></a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>
      <!--End About Style3 Area-->
      <!-- End About Style4 Area-->
       <!--Start Team Style3 Area-->
<section class="team-style3-area pt-0">
    <div class="container">
        <div class="sec-title style2 with_text text-center">
            <div class="sub-title">
                <span class="border-box"></span>
                <h5>Empowering Clients, Building Success</h5>
            </div>
            <h2>Our Precious Clients</h2>
            <h6>*In Tier 1 & Tier 2 </h6>
        </div>
        <div class="row text-right-rtl">
            <div class="col-xl-12">
                <div class="team-style1-content">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="team-carousel owl-carousel owl-theme owl-nav-style-one">
                                <!--Start Single Team Item-->
                                <div class="single-team-item v2">
                                    <div class="img-holder">
                                        <div class="inner">
                                            <img src="assets/images/brand/brand-logo-1.jpg" alt="img" title="img">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Team Item-->
                                <!--Start Single Team Item-->
                                <div class="single-team-item v2">
                                    <div class="img-holder">
                                        <div class="inner">
                                            <img src="assets/images/brand/brand-logo-2.jpg" alt="img" title="img">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Team Item-->
                                <!--Start Single Team Item-->
                                <div class="single-team-item v2">
                                    <div class="img-holder">
                                        <div class="inner">
                                            <img src="assets/images/brand/brand-logo-3.jpg" alt="img" title="img">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Team Item-->
                                <!--Start Single Team Item-->
                                <div class="single-team-item v2">
                                    <div class="img-holder">
                                        <div class="inner">
                                            <img src="assets/images/brand/brand-logo-4.jpg" alt="img" title="img">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Team Item-->

                                <!--Start Single Team Item-->
                                <div class="single-team-item v2">
                                    <div class="img-holder">
                                        <div class="inner">
                                            <img src="assets/images/brand/brand-logo-5.jpg" alt="img" title="img">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Team Item-->

                                <!--Start Single Team Item-->
                                <div class="single-team-item v2">
                                    <div class="img-holder">
                                        <div class="inner">
                                            <img src="assets/images/brand/brand-logo-6.jpg" alt="img" title="img">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Team Item-->


                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Team Style3 Area-->

      <!-- Categories -->
      <section class="landing-new-forge-pad" id="landing-new-forge-categories-section">
        <div class="container-fluid">
          <div class="landing-new-forge-sec-head">

            <h2>Forged Products We Manufacture</h2>
            <div class="landing-new-forge-rule"></div>
            <p>Closed-die hot forgings in carbon and alloy steel, fully machined and supplied to OEM
              specification.</p>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <div class="landing-new-forge-cat" data-category="auto-parts">
                <img src="assets-landing/images/p1.jpg" alt="Awesome Image">
                <h3>Auto Parts</h3>
                <p>Built for demanding road performance, our forged auto parts deliver strength, dimensional accuracy and reliability for OEM and commercial vehicle applications.</p>
                <!-- <a href="#landing-new-forge-enquiry" class="landing-new-forge-cat-link">Enquire Now</a> -->
                <a href="#" class="landing-new-forge-cat-link" onclick="window.open('auto-parts-new.php','_blank'); window.location.href='#landing-new-forge-enquiry'; return false;">
                  Enquire Now
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="landing-new-forge-cat" data-category="tractor-parts">
                <img src="assets-landing/images/p2.jpg" alt="Awesome Image">
                <h3>Tractor Parts</h3>
                <p>Engineered for tough fields and heavy workloads, our tractor parts support durability, uptime and dependable performance across agricultural operations.</p>
                <!-- <a href="#landing-new-forge-enquiry" class="landing-new-forge-cat-link">Enquire Now</a> -->
                <a href="#" class="landing-new-forge-cat-link" onclick="window.open('tractor-parts-new.php','_blank'); window.location.href='#landing-new-forge-enquiry'; return false;">
                  Enquire Now
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="landing-new-forge-cat" data-category="striking-tools">
                <img src="assets-landing/images/p3.jpg" alt="Awesome Image">
                <h3>Striking Tools</h3>
                <p>Designed for repeated impact, our forged striking tools offer superior toughness, grip confidence and long-lasting performance in demanding work environments.</p>
                <!-- <a href="#landing-new-forge-enquiry" class="landing-new-forge-cat-link">Enquire Now</a> -->
                <a href="#" class="landing-new-forge-cat-link" onclick="window.open('striking-tools-new.php','_blank'); window.location.href='#landing-new-forge-enquiry'; return false;">
                  Enquire Now
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="landing-new-forge-cat" data-category="hydraulic-parts">
                <img src="assets-landing/images/p4.jpg" alt="Awesome Image">
                <h3>Hydraulic Parts</h3>
                <p>Manufactured for pressure-critical systems, our hydraulic components combine forged strength, precision machining and reliable performance for industrial applications.</p>
                <!-- <a href="#landing-new-forge-enquiry" class="landing-new-forge-cat-link">Enquire Now</a> -->
                <a href="#" class="landing-new-forge-cat-link" onclick="window.open('hydraulic-parts-new.php','_blank'); window.location.href='#landing-new-forge-enquiry'; return false;">
                  Enquire Now
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="landing-new-forge-cat" data-category="agriculture-parts">
                <img src="assets-landing/images/p5.jpg" alt="Awesome Image">
                <h3>Agriculture Parts</h3>
                <p>Made for dust, load, moisture and impact, our agriculture parts keep farm machinery working smoothly through peak seasonal demands.</p>
                <!-- <a href="#landing-new-forge-enquiry" class="landing-new-forge-cat-link">Enquire Now</a> -->
                <a href="#" class="landing-new-forge-cat-link" onclick="window.open('agriculture-parts-new.php','_blank'); window.location.href='#landing-new-forge-enquiry'; return false;">
                  Enquire Now
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="landing-new-forge-cat" data-category="railway-parts">
                <img src="assets-landing/images/p6.jpg" alt="Awesome Image">
                <h3>Railway Parts</h3>
                <p>Engineered for safety-critical motion, our railway parts deliver strength, vibration resistance and long service life for demanding rail applications.</p>
                <!-- <a href="#landing-new-forge-enquiry" class="landing-new-forge-cat-link">Enquire Now</a> -->
                <a href="#" class="landing-new-forge-cat-link" onclick="window.open('railway-parts-new.php','_blank'); window.location.href='#landing-new-forge-enquiry'; return false;">
                  Enquire Now
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="landing-new-forge-cat" data-category="chain-links">
                <img src="assets-landing/images/p7.jpg" alt="Awesome Image">
                <h3>Chain Links</h3>
                <p>Forged for reliable load transfer, our chain links provide strength, durability and consistent performance across pulling, lifting and industrial uses.</p>
                <!-- <a href="#landing-new-forge-enquiry" class="landing-new-forge-cat-link">Enquire Now</a> -->
                <a href="#" class="landing-new-forge-cat-link" onclick="window.open('chain-links-new.php','_blank'); window.location.href='#landing-new-forge-enquiry'; return false;">
                  Enquire Now
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="landing-new-forge-cat" data-category="wheel-links">
                <img src="assets-landing/images/p8.jpg" alt="Awesome Image">
                <h3>5th Wheel Assembly</h3>
                <p>Built for heavy transport safety, our fifth wheel assembly components ensure dependable coupling performance, load stability and long-term road reliability.</p>
                <!-- <a href="#landing-new-forge-enquiry" class="landing-new-forge-cat-link">Enquire Now</a> -->
                <a href="#" class="landing-new-forge-cat-link" onclick="window.open('wheel-assembly-new.php','_blank'); window.location.href='#landing-new-forge-enquiry'; return false;">
                  Enquire Now
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="landing-new-forge-cat" data-category="tie-rods">
                <img src="assets-landing/images/p9.jpg" alt="Awesome Image">
                <h3>Tie Rods</h3>
                <p>Precision forged for steering confidence, our tie rods deliver strength, alignment stability and reliable performance across demanding vehicle applications.
                </p>
                <!-- <a href="#landing-new-forge-enquiry" class="landing-new-forge-cat-link">Enquire Now</a> -->
                <a href="#" class="landing-new-forge-cat-link" onclick="window.open('tie-rods-new.php','_blank'); window.location.href='#landing-new-forge-enquiry'; return false;">
                  Enquire Now
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="landing-new-forge-cat" data-category="oil-links">
                <img src="assets-landing/images/p10.jpg" alt="Awesome Image">
                <h3>
                  Oil & Gas</h3>
                <p>Developed for critical-duty environments, our oil and gas components offer forged strength, machining accuracy and reliability under pressure.
                </p>
                <!-- <a href="#landing-new-forge-enquiry" class="landing-new-forge-cat-link">Enquire Now</a> -->
                <a href="#" class="landing-new-forge-cat-link" onclick="window.open('oil-gas-industry-new.php','_blank'); window.location.href='#landing-new-forge-enquiry'; return false;">
                  Enquire Now
                </a>
              </div>
            </div>

          </div>
        </div>
      </section>

      <!--Start Project Style4 Area-->
      <!-- <section class="project-style4-area pb-5 Product-range">
            <div class="layer-outer" style="background-image: url(assets/images/shape/product-bg.jpg);"></div>
            <div class="container-fluid">
                <div class="container">
                    <div class="project-style4_top">
                        <div class="sec-title style2 with_text">
                            <div class="sub-title">
                                <span class="border-box"></span>
                                <h5>Area of Focus</h5>
                            </div>
                            <h2>Our Product Range</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12">
                        <div class="project-menu-box text-center wow fadeInUp" data-wow-delay="100ms"
                            data-wow-duration="1500ms">
                            <ul class="project-filter style2 clearfix post-filter has-dynamic-filters-counter">
                                <li data-filter=".filter-item" class="active"><span class="filter-text">All</span></li>
                                <li data-filter=".auto"><span class="filter-text">Auto Parts</span></li>
                                <li data-filter=".tractor"><span class="filter-text">Tractor Parts</span></li>
                                <li data-filter=".striking"><span class="filter-text">Striking Tools</span></li>
                                <li data-filter=".hydraulic"><span class="filter-text">Hydraulic Parts</span></li>
                                <li data-filter=".agriculture"><span class="filter-text">Agriculture Parts</span></li>
                                <li data-filter=".rialway"><span class="filter-text">Railway Parts</span></li>
                                <li data-filter=".chain"><span class="filter-text">Chain Links</span></li>
                                <li data-filter=".wheel"><span class="filter-text">5th Wheel Assembly</span></li>
                                <li data-filter=".tie"><span class="filter-text">Tie Rods</span></li>
                                <li data-filter=".oil"><span class="filter-text">Oil & Gas</span></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="project-style4_items filter-layout masonary-layout">
                 
                    <div class="single-project-style4 filter-item manufac auto">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="assets/images/project/project-v1-1.jpg" alt="Awesome Image">
                            </div>
                            <div class="zoom-button">
                                <a href="auto-parts.php">
                                    <i class="flaticon-plus"></i>
                                </a>
                            </div>
                            <div class="overlay-content-box">
                                <p>Product</p>
                                <h3><a href="auto-parts.php">Auto Parts</a></h3>
                            </div>
                        </div>
                    </div>
                
                    <div class="single-project-style4 filter-item renewable tractor">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="assets/images/project/project-v1-2.jpg" alt="Awesome Image">
                            </div>
                            <div class="zoom-button">
                                <a href="tractor-parts.php">
                                    <i class="flaticon-plus"></i>
                                </a>
                            </div>
                            <div class="overlay-content-box">
                                <p>Product</p>
                                <h3><a href="tractor-parts.php">Tractor Parts</a></h3>
                            </div>
                        </div>
                    </div>
                  
                    <div class="single-project-style4 filter-item renewable striking">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="assets/images/project/project-v1-3.jpg" alt="Awesome Image">
                            </div>
                            <div class="zoom-button">
                                <a href="striking-tools.php">
                                    <i class="flaticon-plus"></i>
                                </a>
                            </div>
                            <div class="overlay-content-box">
                                <p>Product</p>
                                <h3><a href="striking-tools.php">Striking Tools</a></h3>
                            </div>
                        </div>
                    </div>
                   
                    <div class="single-project-style4 filter-item renewable hydraulic">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="assets/images/project/project-v1-4.jpg" alt="Awesome Image">
                            </div>
                            <div class="zoom-button">
                                <a href="hydraulic-parts.php">
                                    <i class="flaticon-plus"></i>
                                </a>
                            </div>
                            <div class="overlay-content-box">
                                <p>Product</p>
                                <h3><a href="hydraulic-parts.php">Hydraulic Parts</a></h3>
                            </div>
                        </div>
                    </div>
                  
                    <div class="single-project-style4 filter-item renewable agriculture">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="assets/images/project/project-v1-5.jpg" alt="Awesome Image">
                            </div>
                            <div class="zoom-button">
                                <a href="agriculture-parts.php">
                                    <i class="flaticon-plus"></i>
                                </a>
                            </div>
                            <div class="overlay-content-box">
                                <p>Product</p>
                                <h3><a href="agriculture-parts.php">Agriculture Parts</a></h3>
                            </div>
                        </div>
                    </div>
                  
                    <div class="single-project-style4 filter-item renewable rialway">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="assets/images/project/project-v1-6.jpg" alt="Awesome Image">
                            </div>
                            <div class="zoom-button">
                                <a href="railway-parts.php">
                                    <i class="flaticon-plus"></i>
                                </a>
                            </div>
                            <div class="overlay-content-box">
                                <p>Product</p>
                                <h3><a href="railway-parts.php">Railway Parts</a></h3>
                            </div>
                        </div>
                    </div>
                  
                    <div class="single-project-style4 filter-item renewable chain">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="assets/images/project/project-v1-7.jpg" alt="Awesome Image">
                            </div>
                            <div class="zoom-button">
                                <a href="chain-links.php">
                                    <i class="flaticon-plus"></i>
                                </a>
                            </div>
                            <div class="overlay-content-box">
                                <p>Product</p>
                                <h3><a href="chain-links.php">Chain Links</a></h3>
                            </div>
                        </div>
                    </div>
                  
                    <div class="single-project-style4 filter-item renewable wheel">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="assets/images/project/project-v1-8.jpg" alt="Awesome Image">
                            </div>
                            <div class="zoom-button">
                                <a href="wheel-assembly.php">
                                    <i class="flaticon-plus"></i>
                                </a>
                            </div>
                            <div class="overlay-content-box">
                                <p>Product</p>
                                <h3><a href="wheel-assembly.php">5th Wheel Assembly</a></h3>
                            </div>
                        </div>
                    </div>
                  
                    <div class="single-project-style4 filter-item renewable tie">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="assets/images/project/project-v1-9.jpg" alt="Awesome Image">
                            </div>
                            <div class="zoom-button">
                                <a href="tie-rods.php">
                                    <i class="flaticon-plus"></i>
                                </a>
                            </div>
                            <div class="overlay-content-box">
                                <p>Product</p>
                                <h3><a href="tie-rods.php">Tie Rods</a></h3>
                            </div>
                        </div>
                    </div>
                 
                    <div class="single-project-style4 filter-item renewable oil">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="assets/images/project/project-v1-11.jpg" alt="Awesome Image">
                            </div>
                            <div class="zoom-button">
                                <a href="oil-gas-industry.php">
                                    <i class="flaticon-plus"></i>
                                </a>
                            </div>
                            <div class="overlay-content-box">
                                <p>Product</p>
                                <h3><a href="oil-gas-industry.php">Oil & Gas</a></h3>
                            </div>
                        </div>
                    </div>
                

                </div>
            </div>
        </section>
        -->
      <div class="container graph">
        <div class="sec-title text-center pb-0">
          <div class="sub-title">
            <span class="border-box"></span>
            <h5>Since 2001</h5>
          </div>
          <h2>Our Target</h2>
        </div>
        <div class="row">
          <img src="assets/images/resources/graph-2.jpg" class="img-fluid">
        </div>
      </div>
      <!-- Start Service Style3 Area -->
      <section id="services" class="service-style3-area">
        <div class="service-style3-area_bg" style="background-color: #f5f5f5;"></div>
        <div class="container">
          <div class="sec-title style3 with_text text-center">
            <div class="sub-title">
              <span class="border-box"></span>
              <h5>Where Recognition Meets Excellence</h5>
            </div>
            <h2>Awards & Exhibitions</h2>

          </div>
          <div class="row">
            <div class="col-xl-12">
              <div class="service-style3_content">
                <div class="service-style3_carousel owl-carousel owl-theme owl-nav-style-one">
                  <!-- Start Single Service Style3--->
                  <div class="single-service-style3 mr-2 w-100">
                    <div class="img-holder">
                      <div class="inner">
                        <img src="assets-landing/images/awards/2019.jpg" alt="" />
                      </div>
                    </div>
                    <!-- <div class="text-holder text-center">
                                        <h2>Hannover-Messe 2019</h2>

                                    </div> -->
                  </div>
                  <!--End Single Service Style3--->
                  <!-- Start Single Service Style3--->
                  <div class="single-service-style3 mr-2 w-100">
                    <div class="img-holder">
                      <div class="inner">
                        <img src="assets-landing/images/awards/2023.jpg" alt="" />
                      </div>
                    </div>
                    <!-- <div class="text-holder text-center">
                                        <h2>BAUMA Conexpo-Greater Noida 2023</h2>
                                       
                                    </div> -->
                  </div>
                  <!--End Single Service Style3--->
                  <!-- Start Single Service Style3--->
                  <div class="single-service-style3 mr-2 w-100">
                    <div class="img-holder">
                      <div class="inner">
                        <img src="assets-landing/images/awards/2024.jpg" alt="" />
                      </div>
                    </div>
                    <!-- <div class="text-holder text-center">
                                        <h2>Bauma Conexpo India 2024</h2>
                                     
                                    </div> -->
                  </div>
                  <div class="single-service-style3 mr-2 w-100">
                    <div class="img-holder">
                      <div class="inner">
                        <img src="assets-landing/images/awards/2025-farm.jpg" alt="" />
                      </div>
                    </div>
                    <!-- <div class="text-holder text-center">
                                        <h2>Farm Machinery Expo 2025</h2>
                                     
                                    </div> -->
                  </div>
                  <div class="single-service-style3 mr-2 w-100">
                    <div class="img-holder">
                      <div class="inner">
                        <img src="assets-landing/images/awards/2025-offshore.jpg" alt="" />
                      </div>
                    </div>
                    <!-- <div class="text-holder text-center">
                                        <h2>Offshore Technology Conference 2025</h2>
                                     
                                    </div> -->
                  </div>
                  <div class="single-service-style3 mr-2 w-100">
                    <div class="img-holder">
                      <div class="inner">
                        <img src="assets-landing/images/awards/awards-2.jpg" alt="" />
                      </div>
                    </div>
                    <!-- <div class="text-holder text-center">
                                        <h2>State level Energy Conservation Aawrds</h2>
                                     
                                    </div> -->
                  </div>
                  <div class="single-service-style3 mr-2 w-100">
                    <div class="img-holder">
                      <div class="inner">
                        <img src="assets-landing/images/awards/awards-4.jpg" alt="" />
                      </div>
                    </div>
                    <!-- <div class="text-holder text-center">
                                        <h2>Golden Award for Kaizen in Automation Category</h2>
                                     
                                    </div> -->
                  </div>
                  <div class="single-service-style3 mr-2 w-100">
                    <div class="img-holder">
                      <div class="inner">
                        <img src="assets-landing/images/awards/awards-5.jpg" alt="" />
                      </div>
                    </div>
                    <!-- <div class="text-holder text-center">
                                        <h2>Symphony - Thinkers of Tomorrow </h2>
                                     
                                    </div> -->
                  </div>
                  <div class="single-service-style3 mr-2 w-100">
                    <div class="img-holder">
                      <div class="inner">
                        <img src="assets-landing/images/awards/awards-8.jpg" alt="" />
                      </div>
                    </div>
                    <!-- <div class="text-holder text-center">
                                        <h2>Industrial Manufacturing</h2>
                                     
                                    </div> -->
                  </div>

                </div>
              </div>
            </div>

          </div>
        </div>
      </section>
      <!-- End Service Style3 Area -->
      <!--Start Mission Vision Area-->
      <section class="mission-vision-area">
        <div class="mission-vision-area-bg" style="background-image: url(assets-landing/images/mission-bg.jpg);">
        </div>
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="mission-vision-content-box bgclr3" style="background-color: #f5f5f5;">
                <!-- <div class="logo-box"><span class="icon-logo"></span></div> -->
                <h2>FAI is relentlessly striving for a sustainable tomorrow by bettering today
                </h2>
                <ul>
                  <li>
                    <div class="icon">
                      <span class="icon-icon-16"></span>
                    </div>
                    <div class="title">
                      <div class="border-box"></div>
                      <h3>Our Mission</h3>
                    </div>
                    <div class="text">
                      <p>To develop market driven products and to achieve long term customer loyalty
                        through timely delivery of quality products</p>
                    </div>
                  </li>

                  <li>
                    <div class="icon">
                      <span class="icon-icon-17"></span>
                    </div>
                    <div class="title">
                      <div class="border-box"></div>
                      <h3>Our Vision</h3>
                    </div>
                    <div class="text">
                      <p>A world-class organization where people team up to produce consistent quality
                        forged components and innovative solutions for customers.</p>
                    </div>
                  </li>
                </ul>

                <div class="video-gallery_box_2 clearfix text-center landing-forge">
                  <!-- <div class="icon-Outer"></div> -->
                  <div class="inner">
                    <div class="icon">
                      <a class="video-popup thm-bgclr" title="Erdunt Video Gallery" href="https://www.youtube.com/watch?v=15qbEPQGg0g">
                        <span class="flaticon-play-button"></span>
                      </a>
                    </div>
                    <h3>Watch Corporate Video</h3>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </section>
      <!--End Mission Vision Area-->
      <!--Start Slogan Area-->
      <!-- <section class="slogan-area">
            <div class="layer-outer" style="background-image: url(assets/images/resources/slogan-area-bg.jpg);"></div>
            <div class="container">
                <div class="slogan-content-box text-right-rtl">
                    <div class="left-box">
                        <div class="icon">
                            <span class="icon-icon-18"></span>
                        </div>
                        <div class="title-box">
                            <h2>We Finished $15 billion of Different<br> Construction Projects Yearly</h2>
                        </div>
                    </div>
                    <div class="button-box">
                        <a class="btn-one" href="blog.html"><span class="txt"><i class="left flaticon-login"></i>get
                                start today</span></a>
                    </div>
                </div>
            </div>
        </section> -->
      <!--End Slogan Area-->
      <!--Start Contact Style1 Area-->
      <section id="contact" class="contact-style1-area contact-page  one-page-scrool-layout">
        <div class="container">
          <div class="row">
            <div class="col-xl-6 col-md-6 contact-bg" style="background:url(assets/images/breadcrumb/contact-bg.jpg);">
              <div class="contact-style1_map">
                <div class="sec-title">
                  <div class="sub-title">
                    <span class="border-box"></span>
                    <h5>Contact Us</h5>
                  </div>
                  <h2>Corporate Office </h2>
                </div>
                <ul>
                  <li><span><i class="fa fa-user" aria-hidden="true"></i></span> Mr. Rajan Mittal, Mr.
                    Rohit Gupta & Mr. Siddharth Mittal</li>
                  <li><span><i class="fa fa-location-arrow" aria-hidden="true"></i></span> Near Indian Oil
                    Jasbir Petrol Pump, Village Mangarh, Kohara – Machhiwara Road, Ludhiana, Punjab -
                    141112, India</li>
                  <!-- <li><span><i class="fa fa-phone" aria-hidden="true"></i></span> <a href="tel:+91 89999-99195">+91 89999-99195</a>,&nbsp; <a href="tel:+91-76269-98999"> +91-76269-98999</a></li> -->
                  <!-- <li><span><i class="fa fa-phone" aria-hidden="true"></i></span> <a href="tel:+91 89999-99195">+91 89999-99195</a>,<a href="tel:+91-76269-98999">+91-76269-98999</a></li> -->
                  <li><span><i class="fa fa-phone" aria-hidden="true"></i></span><a href="tel:+91-8999999195">+91 89999-99195</a>, <a href="tel:+91-7626998999">+91-76269-98999</a></li>
                  <!-- <li><span><i class="fa fa-envelope" aria-hidden="true"></i></span> <a href="mailto:info@aint.in">info@aint.in</a>,&nbsp; <a href="mailto:siddharthmittal@faipl.com"> siddharthmittal@faipl.com</a></li> -->
                  <!-- <li><span><i class="fa fa-envelope" aria-hidden="true"></i></span> <a href="mailto:siddharthmittal@faipl.com">siddharthmittal@faipl.com</a>,&nbsp; <a href="mailto:siddharthmittal@faipl.com"> siddharthmittal@faipl.com</a></li> -->

                  <li><span><i class="fa fa-envelope" aria-hidden="true"></i></span> <a href="mailto:siddharthmittal@faipl.com">siddharthmittal@faipl.com</a></li>
                  <li><span><i class="fa fa-envelope" aria-hidden="true"></i></span> <a href="mailto:rajanmittal@faipl.com">rajanmittal@faipl.com</a></li>
                  <li><span><i class="fa fa-envelope" aria-hidden="true"></i></span> <a href="mailto:rohitguptaa@faipl.com">rohitguptaa@faipl.com</a></li>

                </ul>
              </div>
            </div>

            <div class="col-xl-6 col-md-6" id="landing-new-forge-contact">
              <div class="contact-style1_form contact-style2_form">
                <div class="sec-title">
                  <div class="sub-title">
                    <span class="border-box"></span>
                    <h5>For Any Query</h5>
                  </div>
                  <h2>Fill The Form Below</h2>
                </div>
                <?php include('include/contact-form.php'); ?>
              </div>
            </div>

          </div>
        </div>
      </section>
      <!--End Contact Style1 Area-->

      <section class="breadcrumb-area contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6848.97373418452!2d76.00764349357911!3d30.873038400000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a9e1daaaaaaab%3A0x8efae90682f76319!2sForge%20Auto%20International%20Ltd!5e0!3m2!1sen!2sin!4v1734503856836!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </section>
      <section class="team-style3-area pt-5 ">
        <div class="container">
          <div class="sec-title style2 with_text text-center">
            <div class="sub-title">
              <span class="border-box"></span>
              <h5>
                Certification</h5>
            </div>
            <h2>Certified. Endorsed. Ready To Lead</h2>

          </div>
          <div class="row">
            <div class="col-6 col-sm-4 col-md-4 col-lg-2 m-auto pb-4">
              <div class="certi-border">
                <a href="quality-policy.php#certi-id"><img src="assets/images/resources/1-logo.jpg"></a>
              </div>
            </div>
            <div class="col-6 col-sm-4 col-md-4 col-lg-2 m-auto pb-4">
              <div class=" certi-border">
                <a href="quality-policy.php#certi-id"><img src="assets/images/resources/2-logo.jpg"></a>
              </div>
            </div>
            <div class="col-6 col-sm-4 col-md-4 col-lg-2 m-auto pb-4">
              <div class=" certi-border">
                <a href="quality-policy.php#certi-id"><img src="assets/images/resources/3-logo.jpg"></a>
              </div>
            </div>
            <div class="col-6 col-sm-4 col-md-4 col-lg-2 m-auto pb-4">
              <div class=" certi-border">
                <a href="quality-policy.php#certi-id"><img src="assets/images/resources/4-logo.png"></a>
              </div>
            </div>
            <div class="col-6 col-sm-4 col-md-4 col-lg-2 m-auto pb-4">
              <div class=" certi-border">
                <a href="quality-policy.php#certi-id"><img src="assets/images/resources/5-logo.jpg"></a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Start footer area -->
      <footer class="footer-style4-area">
        <div class="footer-style4">
          <div class="container">
            <div class="row text-right-rtl">
              <!--Start single footer widget-->
              <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-3 mb-lg-0 wow animated fadeInUp" data-wow-delay="0.1s">
                <div class="single-footer-widget single-footer-widget-2 marbtm">
                  <div class="our-company-info">
                    <!--  <div class="footer-logo">
                                        <a href="index-4.html"><img src="assets/images/resources/logo-1.png"
                                                alt="Footer Logo" title="Logo"></a>
                                    </div>
                                    <div class="text-box">
                                        <p>Significantly pushed und the frugal lemur one and meretricious lucrative
                                            inside before swept magnificently expand our Industries via. Lorem ipsum
                                            dolor sit amet adipscing.</p>
                                    </div> -->

                    <div class="footer-bottom_right_box footer-bottom_right_box_style4">
                      <div class="single-footer-widget single-footer-widget-2 margin_left_30 width250 marbtm">
                        <div class="title">
                          <h3>Follow Us</h3>
                        </div>
                      </div>

                      <div class="footer-social-links">
                        <ul class="social-links-style1 social-links-style2">
                          <li>
                            <a rel="nofollow" href="https://www.facebook.com/forgeautointernationallimited" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                          </li>
                          <li>
                            <a rel="nofollow" href="https://www.instagram.com/forgeautointernational.ltd?igsh=aGFhMng4cjJ0a3J6" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                          </li>
                          <li>
                            <a rel="nofollow" href="https://www.linkedin.com/company/forgeautointernational/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                          </li>

                        </ul>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
              <!--End single footer widget-->
              <!--Start single footer widget-->
              <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-3 mb-lg-0 wow animated fadeInUp" data-wow-delay="0.3s">
                <div class="single-footer-widget single-footer-widget-2 margin_left_30 width250 marbtm">
                  <div class="title">
                    <h3>Explore More</h3>
                  </div>
                  <ul class="footer-widget-links2">
                    <li><a href="about.php">About </a></li>
                    <li><a href="quality-policy.php">Quality Policy</a></li>
                    <li><a href="infrastructure.php">Infrastructure</a></li>
                    <li><a href="exhibitions.php">Exhibitions</a></li>
                    <li><a href="sustainability.php">Sustainability</a></li>
                    <li><a href="awards.php">Awards</a></li>
                    <li><a href="get-enquiry.php">Enquiry</a></li>
                    <li><a href="clients.php">Clients</a></li>
                    <li><a href="blog">Blog</a></li>
                    <li><a href="contact.php">Contact</a></li>
                  </ul>
                </div>
              </div>
              <!--End single footer widget-->
              <!--Start single footer widget-->
              <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-3 mb-lg-0 wow animated fadeInUp" data-wow-delay="0.5s">
                <div class="single-footer-widget single-footer-widget-2 margin_left_80 width180">
                  <div class="title">
                    <h3>Products</h3>
                  </div>
                  <ul class="footer-widget-links2">
                    <li><a href="auto-parts.php">Auto Parts</a></li>
                    <li><a href="tractor-parts.php">Tractor Parts</a></li>
                    <li><a href="striking-tools.php">Striking Tools</a></li>
                    <li><a href="hydraulic-parts.php">Hydraulic Parts</a></li>
                    <li><a href="agriculture-parts.php">Agriculture Parts</a></li>
                    <li><a href="railway-parts.php">Railway Parts</a></li>
                    <li><a href="chain-links.php">Chain Links</a></li>
                    <li><a href="wheel-assembly.php">5th Wheel Assembly</a></li>
                    <li><a href="tie-rods.php">Tie Rods</a></li>
                    <li><a href=" oil-gas-industry.php">Oil & Gas Industry</a></li>
                    <!-- <li><a href=" ring-rolling.php">Ring Rolling</a></li> -->
                  </ul>
                </div>
              </div>
              <!--End single footer widget-->
              <!--Start single footer widget-->
              <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-3 mb-lg-0 wow animated fadeInUp" data-wow-delay="0.7s">

                <div class="single-footer-widget single-footer-widget-2 address margin_left_80 width180">
                  <div class="title">
                    <h3>Contact us</h3>
                  </div>
                  <ul>
                    <li> <a class="text-white" href="tel:+91 89999-99195">+91 89999-99195</a></li>
                    <li><a class="text-white" href="mailto:siddharthmittal@faipl.com">
                        siddharthmittal@faipl.com</a></li>
                    <li class="text-white">Near Indian Oil Jasbir Petrol Pump, Village Mangarh, Kohara –
                      Machhiwara Road,
                      Ludhiana, Punjab - 141112, India</li>
                  </ul>
                </div>
              </div>
              <!--End single footer widget-->

            </div>
          </div>
        </div>

        <!--Start Footer Bottom-->
        <div class="footer-bottom-style4">
          <div class="container">
            <div class="outer_box">
              <div class="footer-bottom_left_box">
                <div class="copyright-text copyright-text-style4">
                  <p>Copyright © 2025 <a href="#">Forge Auto.</a> All rights reserved.</p>
                </div>
                <!--  <div class="footer-menu-style1 footer-menu-style4">
                                <ul>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Sitemap</a></li>
                                </ul>
                            </div> -->
              </div>
              <!--  <div class="footer-bottom_right_box footer-bottom_right_box_style4">
                            <div class="footer-social-links">
                                <div class="inner_title">
                                    <h3>Connect With Us</h3>
                                </div>
                                <ul class="social-links-style1 social-links-style2">
                                    <li>
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div> -->
            </div>
          </div>
        </div>
        <!--Start Footer Bottom-->

      </footer>
      <!--End footer area-->
      <button class="scroll-top scroll-to-target bgclr3" data-target="html">
        <span class="fa fa-angle-up"></span>
      </button>

    </div>
    <script src="assets/js/jquery.js"></script>
    <script src="js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/jquery.bxslider.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/jquery.countTo.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/jquery.enllax.min.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.paroller.min.js"></script>
    <script src="assets/js/jquery.polyglot.language.switcher.js"></script>
    <script src="assets/js/jQuery.style.switcher.min.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/knob.js"></script>
    <script src="assets/js/map-script.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/pagenav.js"></script>
    <script src="assets/js/parallax.min.js"></script>
    <script src="assets/js/scrollbar.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/timePicker.js"></script>
    <script src="assets/js/validation.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/TweenMax.min.js"></script>

    <script src="assets/js/map-script.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATY4Rxc8jNvDpsK8ZetC7JyN4PFVYGCGM&callback=initMap">
    </script>

    <!-- thm custom script -->
    <script src="assets/js/custom.js"></script>

    <?php include('include/form-scripts.php'); ?>

    <!-- <script>
   
    (function() {
        var CATS = {
            "auto-parts": {
                eyebrow: "Forged Auto Parts Manufacturer B7 India",
                h1: 'Forged <em>Auto Parts</em> Manufacturer b  Ball Studs, Gear Blanks &amp; Stub Axles',
                lead: "IATF 16949 certified closed-die hot forgings for 2W, 3W & 4W vehicles b  safety-critical components trusted by Tata Motors, Mahindra and global OEMs.",
                select: "Auto Parts"
            },
            "tractor-parts": {
                eyebrow: "Forged Tractor Parts Manufacturer B7 India",
                h1: 'Forged <em>Tractor Parts</em> Manufacturer for OEMs &amp; Exporters',
                lead: "High-load closed-die forged tractor components in carbon & alloy steel b  supplied to Sonalika, TAFE, Mahindra and OEMs worldwide.",
                select: "Tractor Parts"
            },
            "railway-parts": {
                eyebrow: "Railway Forging Manufacturer B7 India",
                h1: 'Forged <em>Railway Parts</em> Manufacturer b  Precision &amp; Reliability',
                lead: "Precision hot forgings meeting the reliability demands of Indian and global railway systems, with full material traceability.",
                select: "Railway Parts"
            },
            "hydraulic-parts": {
                eyebrow: "Hydraulic Forgings Manufacturer B7 India",
                h1: 'Forged <em>Hydraulic Parts</em> for Steering, Braking &amp; Suspension',
                lead: "Closed-die forged hydraulic components machined in-house to tight tolerance b  500 g to 20 kg in carbon & alloy steel.",
                select: "Hydraulic Parts"
            },
            "agriculture-parts": {
                eyebrow: "Forged Agriculture Parts Manufacturer B7 India",
                h1: 'Forged <em>Agriculture Parts</em> b  Harvester Fingers &amp; Combine Components',
                lead: "Field-proven forged agri components built to survive tough conditions b  trusted by leading farm-equipment OEMs.",
                select: "Agriculture Parts"
            },
            "striking-tools": {
                eyebrow: "Drop Forged Striking Tools B7 India",
                h1: 'Drop Forged <em>Striking Tools</em> Manufacturer &amp; Exporter',
                lead: "Drop-forged hammers and striking tools with consistent hardness, finish and OEM-grade quality control.",
                select: "Striking Tools"
            },
            "chain-links": {
                eyebrow: "Forged Chain Links Manufacturer B7 India",
                h1: 'Heavy-Duty Forged <em>Chain Links</em> Manufacturer',
                lead: "Heavy-duty forged chain links manufactured to strict dimensional tolerance in carbon & alloy steel.",
                select: "Chain Links"
            },
            "wheel-links": {
                eyebrow: "wheel",
                h1: 'Heavy-Duty Forged <em>wheel</em> Manufacturer',
                lead: "Heavy-duty forged chain links manufactured to strict dimensional tolerance in carbon & alloy steel.",
                select: "Chain Links"
            },
            "oil-links": {
                eyebrow: "OIL",
                h1: 'Heavy-Duty Forged <em>OIL</em> Manufacturer',
                lead: "Heavy-duty forged chain links manufactured to strict dimensional tolerance in carbon & alloy steel.",
                select: "Chain Links"
            },
            "tie-rods": {
                eyebrow: "Tie Rod Manufacturer B7 India",
                h1: 'Forged <em>Tie Rods</em> &amp; Wheel Assembly Components',
                lead: "OEM-approved forged tie rods and wheel assembly components for automotive and tractor applications.",
                select: "Tie Rods"
            }
        };

        // Function to update banner content
        function updateBannerContent(catKey) {
            var c = CATS[catKey];
            if (!c) return false;

            document.getElementById("landing-new-forge-dyn-eyebrow").textContent = c.eyebrow;
            document.getElementById("landing-new-forge-dyn-h1").innerHTML = c.h1;
            document.getElementById("landing-new-forge-dyn-lead").textContent = c.lead;
            document.title = c.eyebrow.replace(" B7 India", " in India") +
                " | Get a Quote b  Forge Auto International Ltd.";

            var sel = document.getElementById("landing-new-forge-f-cat");
            for (var i = 0; i < sel.options.length; i++) {
                if (sel.options[i].text === c.select) {
                    sel.selectedIndex = i;
                    break;
                }
            }
            document.getElementById("landing-new-forge-f-adcat").value = c.select;
            return true;
        }

        // Check URL parameter on page load
        var cat = new URLSearchParams(location.search).get("cat");
        if (cat) {
            updateBannerContent(cat);
        }

        // Add click handlers to category cards
        var categoryCards = document.querySelectorAll('.landing-new-forge-cat');
        categoryCards.forEach(function(card) {
            card.addEventListener('click', function(e) {
                // Prevent default link behavior if clicking on the card itself
                if (e.target.tagName !== 'A') {
                    e.preventDefault();
                }
                var catKey = this.getAttribute('data-category');
                if (updateBannerContent(catKey)) {
                    // Update URL without page reload
                    window.history.pushState({
                        category: catKey
                    }, '', '?cat=' + catKey);
                    // Scroll to hero section
                    document.getElementById('landing-new-forge-hero-section').scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Add click handlers to category links
        var categoryLinks = document.querySelectorAll('.landing-new-forge-cat-link');
        categoryLinks.forEach(function(link) {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                var catKey = this.closest('.landing-new-forge-cat').getAttribute('data-category');
                if (updateBannerContent(catKey)) {
                    // Update URL without page reload
                    window.history.pushState({
                        category: catKey
                    }, '', '?cat=' + catKey);
                    // Scroll to hero section
                    document.getElementById('landing-new-forge-hero-section').scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
    })();
    </script> -->

  </body>

</html>