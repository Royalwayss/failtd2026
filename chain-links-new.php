<?php include ('include/header.php') ?>
<meta name="robots" content="noindex, nofollow">
<style>
    /* Hero Banner Styles */
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
        transition: background .2s;
        width: 100%;
        margin-top: 20px;
    }

    .landing-new-forge-btn:hover {
        background: #8E161D
    }

    .landing-new-forge-resp {
        text-align: center;
        font-size: 13px;
        font-weight: 600;
        color: #ec7f47;
        margin-top: 10px
    }

    .landing-new-forge-privacy {
        font-size: 12px;
        color: #6E7681;
        margin-top: 12px;
        text-align: center
    }
</style>

<!--Start Dynamic Hero Banner-->
<section class="landing-new-forge-hero" id="landing-new-forge-hero-section">
    <div class="container-fluid">
        <div class="row align-items-center px-5">
            <!-- Left Content -->
            <div class="col-lg-6 landing-new-forge-hero-content">
                <span class="landing-new-forge-eyebrow" id="landing-new-forge-dyn-eyebrow">Chain Links</span>
                <h1 id="landing-new-forge-dyn-h1">High-Strength  <em>Chain Links</em> Built for Load-Bearing Industrial Applications Daily</h1>
                <p class="landing-new-forge-lead" id="landing-new-forge-dyn-lead">Forged for reliable load transfer, our chain links provide strength, durability and consistent performance across pulling, lifting and industrial uses.</p>
                <ul class="landing-new-forge-ticks">
                    <li>4.5 million+ parts manufactured every year</li>
                    <li>Forging, machining and heat treatment under one ecosystem</li>
                    <li>Carbon and alloy steel expertise</li>
                    <li>Quality-focused production with complete traceability</li>
                    <li>Reliable supplier for Indian and global OEMs</li>
                </ul>
                <div class="landing-new-forge-cert-strip">
                    <span>ISO 9001</span><span>IATF 16949</span><span>ISO 14001</span><span>ISO 45001</span><span>ZED GOLD</span>
                </div>
            </div>

            <!-- Right Form -->
            <div class="col-lg-6">
                <div class="landing-new-forge-form-card" id="landing-new-forge-enquiry">
                    <h2>Request a Quote</h2>
                    <p class="landing-new-forge-sub">Share your drawing or requirement b our engineering team replies within 24 hours.</p>
                    <form class="row" action="submit-enquiry.php" method="post">
                        <input type="hidden" name="lead_source" value="google-ads">
                        <input type="hidden" name="ad_category" id="landing-new-forge-f-adcat" value="Tractor Parts">
                        <div class="col-12 col-md-6">
                            <label for="landing-new-forge-f-name">Full name *</label>
                            <input id="landing-new-forge-f-name" name="name" type="text" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="landing-new-forge-f-company">Company</label>
                            <input id="landing-new-forge-f-company" name="company" type="text">
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="landing-new-forge-f-phone">Phone / WhatsApp *</label>
                            <input id="landing-new-forge-f-phone" name="phone" type="tel" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="landing-new-forge-f-email">Email *</label>
                            <input id="landing-new-forge-f-email" name="email" type="email" required>
                        </div>
                        <div class="col-12 col-md-12">
                            <label for="landing-new-forge-f-cat">Product category *</label>
                            <select id="landing-new-forge-f-cat" name="category" required>
                                <option value="">Select a category</option>
                                <option>Auto Parts</option>
                                <option >Tractor Parts</option>
                                <option>Railway Parts</option>
                                <option>Hydraulic Parts</option>
                                <option>Agriculture Parts</option>
                                <option>Striking Tools</option>
                                <option selected>Chain Links</option>
                                <option>Tie Rods</option>
                                <option>5th Wheel Assembly</option>
                                <option>Oil & Gas</option>
                                <!-- <option>Ring Rolling</option>
                                <option>Custom Forging / Other</option> -->
                            </select>
                        </div>
                        <div class="col-12 col-md-12">
                            <label for="landing-new-forge-f-msg">Requirement (part, quantity, material)</label>
                            <textarea id="landing-new-forge-f-msg" name="message" rows="3" placeholder=" "></textarea>
                        </div>
                        <button class="landing-new-forge-btn" type="submit">Send Enquiry</button>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="service-style3-area service-page3 products-parts">
    <div class="container-fluid">
        <div class="row" id="category-content">
         <div class="sec-title">
            <div class="sub-title">
               <span class="border-box"></span>
               <h5>Industrial-Grade Chain Systems</h5>
            </div>
            <h2>Chain Links</h2>
         </div>
        
      </div>
        <div class="row">
            <!-- Start Single Service Style3--->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-5">                       
                <div class="single-service-style3">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="assets/images/products/chain-links/1.jpg" alt="">
                        </div>
                    </div>
                    <div class="text-holder text-center">
                        <h2>Hook</h2>
                    </div>
                </div>
            </div>
            <!--End Single Service Style3--->
            <!-- Start Single Service Style3--->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-5">                       
                <div class="single-service-style3">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="assets/images/products/chain-links/2.jpg" alt="">
                        </div>
                    </div>
                    <div class="text-holder text-center">
                        <h2>Coveyer - Chain Link</h2>
                    </div>
                </div>
            </div>
            <!--End Single Service Style3--->
            <!-- Start Single Service Style3--->
            <!-- <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-5">                       
                <div class="single-service-style3">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="assets/images/products/chain-links/3.jpg" alt="">
                        </div>
                    </div>
                    <div class="text-holder text-center">
                        <h2>Coveyer - Chain Link</h2>
                    </div>
                </div>
            </div> -->
            <!--End Single Service Style3--->
            <!-- Start Single Service Style3--->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-5">                       
                <div class="single-service-style3">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="assets/images/products/chain-links/4.jpg" alt="">
                        </div>
                    </div>
                    <div class="text-holder text-center">
                        <h2>Coveyer - Chain Link</h2>
                    </div>
                </div>
            </div>
            <!--End Single Service Style3--->
        </div>
    
	    <div class="row" id="category-content">
         
         <div class="sustan-main-heading">
             <p>Our forged chain links are engineered for tensile strength, shock absorption and wear resistance. Designed for lifting systems, industrial conveyors, mining equipment and heavy-duty assemblies, these components undergo controlled forging and heat treatment to achieve optimal load-bearing capacity.</p> 
			 <p>Precision machining and surface finishing ensure dimensional accuracy and consistent performance under cyclic loads. With metallurgical integrity and batch traceability, our chain links meet demanding industrial standards for safety, reliability and operational continuity.</p>
         </div>
      </div>
	</div>
</section>

<?php include ('include/footer.php') ?>