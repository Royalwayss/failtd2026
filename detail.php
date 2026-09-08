<?php include ('include/header.php') ?>

<!--
    ================================================================
    DEV / REVIEW BAR - remove before this page goes live.
    Lets you jump between the category page and the product pages
    built so far while we're still building out all 64 pages.
    ================================================================
-->
<div class="mockup-views-bar">
    <div class="auto-container">
        <span class="mockup-views-label">Mockup Views</span>
        <a class="mockup-views-btn" href="category.php">Category Page &mdash; Auto Parts</a>
        <select class="mockup-views-select" onchange="if(this.value){ window.location.href = this.value; }">
            <option value="">Product pages &mdash; choose one...</option>
            <option value="detail.php" selected>Yoke Shaft Assembly</option>
            <option value="detail.php">Tie Rod End</option>
            <option value="detail.php">Gear Blank</option>
            <option value="detail.php">Wheel Hub</option>
            <option value="detail.php">Flange Yoke</option>
            <option value="detail.php">Steering Knuckle Arm</option>
            <option value="detail.php">Companion Flange</option>
        </select>
    </div>
</div>

<!--Start breadcrumb trail-->
<div class="pd-breadcrumb-trail">
    <div class="auto-container">
        <a href="index.php">Home</a> &raquo;
        <a href="category.php">Products</a> &raquo;
        <span>Auto Parts</span>
    </div>
</div>
<!--End breadcrumb trail-->

<!--Start product hero-->
<section class="pd-hero">
    <div class="auto-container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="pd-hero_badge">CLOSED-DIE FORGED COMPONENTS</div>
                <h1>Forged Auto Parts Manufacturer in India</h1>
                <p class="pd-hero_lead">Precision hot forgings for 2-wheelers, 3-wheelers, passenger cars and commercial vehicles &mdash; carbon &amp; alloy steel, 0.5 kg to 20 kg, forged, heat treated and CNC machined under one roof.</p>

                <div class="pd-hero_actions">
                    <a class="btn-get-quote" href="#send-enquiry">Get a Quote</a>
                    <a class="btn-whatsapp" href="https://wa.me/918999999195" target="_blank">WhatsApp Us</a>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="pd-hero_image">
                    <img src="https://www.failtd.com/assets/images/products/auto-parts/1.jpg" alt="Yoke Shaft Assembly">
                </div>
            </div>
        </div>
    </div>
</section>
<!--End product hero-->


<!--Start single-source supplier section-->
<section class="pd-supplier">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-9">
                <h2>Single-Source Supplier of Forged Automotive Components</h2>
                <p>Forge Auto International Limited (FAI) supplies forged automotive components to leading Indian and international OEMs. From driveline yokes and tie rod ends to gear blanks, hubs and steering components, every part is produced through customised closed-die hot forging, controlled heat treatment and precision CNC machining at our 1,30,500 sq. ft. facility.</p>
                <p>Forging gives automotive parts what casting cannot: continuous grain flow, superior fatigue resistance and dependable impact strength &mdash; critical for components that steer, transmit power and carry load. Our in-house die shop, QFORM forging simulation and testing laboratory ensure every component meets your drawing, tolerance and delivery schedule.</p>
                <p><strong>Share your drawing or sample &mdash; our engineering team reverts with feasibility, tooling plan and quotation within 48 hours.</strong></p>
            </div>
        </div>
    </div>
</section>
<!--End single-source supplier section-->

<!--Start Auto Parts Range grid-->
<section class="products-range-section">
    <div class="auto-container">
        <div class="row" id="category-content">
            <div class="sec-title">
                <h2>Related Products</h2>
                <div class="text">
                    <p>Every product links to a dedicated detail page with full specifications, materials and MOQ.</p>
                </div>
            </div>
        </div>

        <div class="custom-slider owl-carousel pd-carousel-nav-fix">

            <div class="item">
                <div class="product-card is-active">
                    <div class="product-card_img">
                        <img src="https://www.failtd.com/assets/images/products/auto-parts/1.jpg" alt="Yoke Shaft Assembly">
                    </div>
                    <div class="product-card_body">
                        <h3>Yoke Shaft Assembly</h3>
                        <p class="product-card_spec">EN19 / 42CrMo4 &middot; 0.8-12 kg &middot; Forged + CNC machined</p>
                        <div class="product-card_actions">
                            <a class="btn-view-details" href="detail.php">View Details</a>
                            <a class="btn-get-quote" href="#send-enquiry">Get Quote</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="product-card">
                    <div class="product-card_img">
                        <img src="assets/images/products/auto-parts/2.jpg" alt="Tie Rod End">
                    </div>
                    <div class="product-card_body">
                        <h3>Tie Rod End</h3>
                        <p class="product-card_spec">C45 / EN8 &middot; 0.5-4 kg &middot; Forged + machined + assembled</p>
                        <div class="product-card_actions">
                            <a class="btn-view-details" href="detail.php">View Details</a>
                            <a class="btn-get-quote" href="#send-enquiry">Get Quote</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="product-card">
                    <div class="product-card_img">
                        <img src="assets/images/products/auto-parts/3.jpg" alt="Gear Blank">
                    </div>
                    <div class="product-card_body">
                        <h3>Gear Blank</h3>
                        <p class="product-card_spec">20MnCr5 / SAE 8620 &middot; 1-15 kg &middot; Iso-annealed, proof machined</p>
                        <div class="product-card_actions">
                            <a class="btn-view-details" href="detail.php">View Details</a>
                            <a class="btn-get-quote" href="#send-enquiry">Get Quote</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="product-card">
                    <div class="product-card_img">
                        <img src="assets/images/products/auto-parts/4.jpg" alt="Wheel Hub">
                    </div>
                    <div class="product-card_body">
                        <h3>Wheel Hub</h3>
                        <p class="product-card_spec">EN9 / EN19 &middot; 2-18 kg &middot; Forged + fully machined</p>
                        <div class="product-card_actions">
                            <a class="btn-view-details" href="detail.php">View Details</a>
                            <a class="btn-get-quote" href="#send-enquiry">Get Quote</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="product-card">
                    <div class="product-card_img">
                        <img src="assets/images/products/auto-parts/5.jpg" alt="Flange Yoke">
                    </div>
                    <div class="product-card_body">
                        <h3>Flange Yoke</h3>
                        <p class="product-card_spec">EN19 / SAE 4140 &middot; 1-10 kg &middot; Forged &amp; tempered</p>
                        <div class="product-card_actions">
                            <a class="btn-view-details" href="detail.php">View Details</a>
                            <a class="btn-get-quote" href="#send-enquiry">Get Quote</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="product-card">
                    <div class="product-card_img">
                        <img src="assets/images/products/auto-parts/6.jpg" alt="Steering Knuckle Arm">
                    </div>
                    <div class="product-card_body">
                        <h3>Steering Knuckle Arm</h3>
                        <p class="product-card_spec">EN24 / 42CrMo4 &middot; 1-8 kg &middot; Coach tested (MPI) 100%</p>
                        <div class="product-card_actions">
                            <a class="btn-view-details" href="detail.php">View Details</a>
                            <a class="btn-get-quote" href="#send-enquiry">Get Quote</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="product-card">
                    <div class="product-card_img">
                        <img src="assets/images/products/auto-parts/7.jpg" alt="Companion Flange">
                    </div>
                    <div class="product-card_body">
                        <h3>Companion Flange</h3>
                        <p class="product-card_spec">C45 / EN19 &middot; 1-12 kg &middot; Forged + CNC turned</p>
                        <div class="product-card_actions">
                            <a class="btn-view-details" href="detail.php">View Details</a>
                            <a class="btn-get-quote" href="#send-enquiry">Get Quote</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Custom Forgings (CTA card, no fixed spec / no View Details) -->
            <div class="item">
                <div class="product-card">
                    <div class="product-card_img product-card_img--placeholder">
                        <span>Product photo</span>
                    </div>
                    <div class="product-card_body">
                        <h3>Custom Forgings</h3>
                        <p class="product-card_spec">Per your drawing &middot; 0.5-20 kg &middot; Development in 4-6 weeks</p>
                        <div class="product-card_actions product-card_actions--single">
                            <a class="btn-get-quote" href="#send-enquiry">Get Quote</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--End Auto Parts Range grid-->





<!--Start Featured Products slider-->
<section class="products-range-section pd-featured">
    <div class="auto-container">
        <div class="row" id="category-content">
            <div class="sec-title">
                <h2>Featured Products</h2>
            </div>
        </div>

        <div class="custom-slider owl-carousel pd-carousel-nav-fix">

            <div class="item">
                <div class="product-card is-active">
                    <div class="product-card_img">
                        <img src="https://www.failtd.com/assets/images/products/auto-parts/1.jpg" alt="Yoke Shaft Assembly">
                    </div>
                    <div class="product-card_body">
                        <h3>Yoke Shaft Assembly</h3>
                        <p class="product-card_spec">EN19 / 42CrMo4 &middot; 0.8-12 kg &middot; Forged + CNC machined</p>
                        <div class="product-card_actions">
                            <a class="btn-view-details" href="detail.php">View Details</a>
                            <a class="btn-get-quote" href="#send-enquiry?product=Yoke%20Shaft%20Assembly">Get Quote</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="product-card">
                    <div class="product-card_img">
                        <img src="assets/images/products/auto-parts/2.jpg" alt="Tie Rod End">
                    </div>
                    <div class="product-card_body">
                        <h3>Tie Rod End</h3>
                        <p class="product-card_spec">C45 / EN8 &middot; 0.5-4 kg &middot; Forged + machined + assembled</p>
                        <div class="product-card_actions">
                            <a class="btn-view-details" href="detail.php">View Details</a>
                            <a class="btn-get-quote" href="#send-enquiry">Get Quote</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="product-card">
                    <div class="product-card_img">
                        <img src="assets/images/products/auto-parts/3.jpg" alt="Gear Blank">
                    </div>
                    <div class="product-card_body">
                        <h3>Gear Blank</h3>
                        <p class="product-card_spec">20MnCr5 / SAE 8620 &middot; 1-15 kg &middot; Iso-annealed, proof machined</p>
                        <div class="product-card_actions">
                            <a class="btn-view-details" href="detail.php">View Details</a>
                            <a class="btn-get-quote" href="#send-enquiry">Get Quote</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="product-card">
                    <div class="product-card_img">
                        <img src="assets/images/products/auto-parts/4.jpg" alt="Wheel Hub">
                    </div>
                    <div class="product-card_body">
                        <h3>Wheel Hub</h3>
                        <p class="product-card_spec">EN9 / EN19 &middot; 2-18 kg &middot; Forged + fully machined</p>
                        <div class="product-card_actions">
                            <a class="btn-view-details" href="detail.php">View Details</a>
                            <a class="btn-get-quote" href="#send-enquiry">Get Quote</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="product-card">
                    <div class="product-card_img">
                        <img src="assets/images/products/auto-parts/5.jpg" alt="Flange Yoke">
                    </div>
                    <div class="product-card_body">
                        <h3>Flange Yoke</h3>
                        <p class="product-card_spec">EN19 / SAE 4140 &middot; 1-10 kg &middot; Forged &amp; tempered</p>
                        <div class="product-card_actions">
                            <a class="btn-view-details" href="detail.php">View Details</a>
                            <a class="btn-get-quote" href="#send-enquiry">Get Quote</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="product-card">
                    <div class="product-card_img">
                        <img src="assets/images/products/auto-parts/6.jpg" alt="Steering Knuckle Arm">
                    </div>
                    <div class="product-card_body">
                        <h3>Steering Knuckle Arm</h3>
                        <p class="product-card_spec">EN24 / 42CrMo4 &middot; 1-8 kg &middot; Coach tested (MPI) 100%</p>
                        <div class="product-card_actions">
                            <a class="btn-view-details" href="detail.php">View Details</a>
                            <a class="btn-get-quote" href="#send-enquiry">Get Quote</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--End Featured Products slider-->


<?php /*
<!--Start FAQ-->
<section class="pd-faq">
    <div class="auto-container">
        <h2>Frequently Asked Questions</h2>
        <div class="pd-faq_list">
            <div class="pd-faq_item is-open">
                <div class="pd-faq_question">
                    <span>What auto parts does FAI manufacture?</span>
                    <i class="pd-faq_icon"></i>
                </div>
                <div class="pd-faq_answer">
                    <p>Forged driveline yokes, tie rod ends, gear blanks, wheel hubs, steering knuckle components, flanges and custom forgings per customer drawing &mdash; for 2-wheelers, 3-wheelers, passenger cars and commercial vehicles.</p>
                </div>
            </div>
            <div class="pd-faq_item">
                <div class="pd-faq_question">
                    <span>What is your minimum order quantity?</span>
                    <i class="pd-faq_icon"></i>
                </div>
                <div class="pd-faq_answer">
                    <p>MOQ varies by part complexity and tooling &mdash; typically 250 to 1,000 pieces per drawing. Share your annual volume and we will confirm MOQ, tooling cost and price break-up.</p>
                </div>
            </div>
            <div class="pd-faq_item">
                <div class="pd-faq_question">
                    <span>Can you develop a part from our drawing or sample?</span>
                    <i class="pd-faq_icon"></i>
                </div>
                <div class="pd-faq_answer">
                    <p>Yes. Send your 2D drawing, 3D model or a physical sample &mdash; our engineering team will confirm feasibility, forging design and a development timeline within 48 hours.</p>
                </div>
            </div>
            <div class="pd-faq_item">
                <div class="pd-faq_question">
                    <span>Do you supply machined or raw forgings?</span>
                    <i class="pd-faq_icon"></i>
                </div>
                <div class="pd-faq_answer">
                    <p>Both. We supply as-forged, proof-machined or fully CNC-machined components depending on your requirement.</p>
                </div>
            </div>
            <div class="pd-faq_item">
                <div class="pd-faq_question">
                    <span>Do you export?</span>
                    <i class="pd-faq_icon"></i>
                </div>
                <div class="pd-faq_answer">
                    <p>Yes, FAI exports forged automotive components globally and can support export documentation, packaging and logistics.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End FAQ-->
*/ ?>
<!--Start quote CTA banner-->
<section class="pd-cta" id="send-enquiry">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-5">
                <h2>Get a Quotation in 48 Hours</h2>
                <p>Share your drawing, sample details or annual volumes. Our engineering team reverts with feasibility, tooling plan and pricing within two working days.</p>
                <ul class="pd-cta_contact">
                    <li>&#9993; <a href="mailto:info@failtd.com">info@failtd.com</a></li>
                    <li>&#9742; +91-XXXXX-XXXXX &middot; WhatsApp available</li>
                </ul>
            </div>
            <div class="col-lg-7">
                <form action="#send-enquiry" method="post" class="pd-cta_form">
                    <input type="hidden" name="product" value="Yoke Shaft Assembly">
                    <div class="row">
                        <div class="col-md-6"><input type="text" name="name" placeholder="Your name" required></div>
                        <div class="col-md-6"><input type="text" name="company" placeholder="Company"></div>
                        <div class="col-md-6"><input type="email" name="email" placeholder="Email" required></div>
                        <div class="col-md-6"><input type="text" name="phone" placeholder="Phone / WhatsApp"></div>
                        <div class="col-md-12">
                            <select name="product_of_interest">
                                <option value="">Product of interest...</option>
                                <option value="Yoke Shaft Assembly" selected>Yoke Shaft Assembly</option>
                                <option value="Tie Rod End">Tie Rod End</option>
                                <option value="Gear Blank">Gear Blank</option>
                                <option value="Wheel Hub">Wheel Hub</option>
                                <option value="Flange Yoke">Flange Yoke</option>
                                <option value="Steering Knuckle Arm">Steering Knuckle Arm</option>
                                <option value="Companion Flange">Companion Flange</option>
                                <option value="Custom Forgings">Custom Forgings</option>
                            </select>
                        </div>
                        <div class="col-md-12"><textarea name="message" rows="3" placeholder="Quantity, material, drawing available? Tell us about your requirement."></textarea></div>
                        <div class="col-md-12"><button type="submit" class="btn-cta-submit">Send Enquiry &rarr;</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--End quote CTA banner-->

<style>
/* Dev/review bar */
.mockup-views-bar{ background:#1b1f2a; padding:12px 0; }
.mockup-views-bar .auto-container{ display:flex; align-items:center; gap:14px; flex-wrap:wrap; }
.mockup-views-label{ color:#8a8fa0; font-size:11px; letter-spacing:1px; text-transform:uppercase; }
.mockup-views-btn{ background:#e2691c; color:#fff !important; font-weight:700; font-size:13px; padding:9px 16px; border-radius:4px; border:1px solid #e2691c; }
.mockup-views-btn:hover{ background:#c9560f; }
.mockup-views-select{ background:#1b1f2a; color:#fff; border:1px solid #e2691c; border-radius:4px; padding:9px 12px; font-size:13px; font-weight:600; max-width:260px; }
.mockup-views-select option{ background:#1b1f2a; color:#fff; }

/* Product detail page */
.pd-breadcrumb-trail{ background:#f5f5f7; padding:10px 0; font-size:13px; color:#888; }
.pd-breadcrumb-trail a{ color:#888; }
.pd-breadcrumb-trail a:hover{ color:#e2691c; }

.pd-hero{ background:#f5f5f7; padding:50px 0; }
.pd-hero_badge{ display:inline-block; color:#e2691c; font-size:12px; font-weight:700; letter-spacing:1px; text-transform:uppercase; margin-bottom:12px; }
.pd-hero h1{ font-size:40px; font-weight:800; line-height:1.15em; margin-bottom:18px; }
.pd-hero p{ color:#555; margin-bottom:14px; }
.pd-hero_lead{ font-size:16px; }
.pd-hero_actions{ display:flex; flex-wrap:wrap; gap:12px; margin-top:22px; }
.pd-hero_actions a{ display:inline-block; padding:12px 22px; border-radius:4px; font-weight:600; font-size:14px; }
.pd-hero_image{ background:#fff; border:1px solid #e5e5e7; border-radius:6px; padding:25px; text-align:center; }
.pd-hero_image img{ max-height:280px; width:auto; }

.btn-get-quote{ background:#e2691c; border:1px solid #e2691c; color:#fff !important; }
.btn-get-quote:hover{ background:#c9560f; border-color:#c9560f; }
.btn-view-details{ background:#fff; border:1px solid #222222; color:#222222 !important; }
.btn-view-details:hover{ background:#222222; color:#fff !important; }
.btn-whatsapp{ background:#25D366; border:1px solid #25D366; color:#fff !important; }
.btn-whatsapp:hover{ background:#1ebd5a; border-color:#1ebd5a; }

.pd-supplier{ padding:60px 0 20px; }
.pd-supplier h2{ font-size:28px; font-weight:700; margin-bottom:18px; }
.pd-supplier p{ color:#555; margin-bottom:14px; }

.products-range-section{ padding:20px 0 60px; }
.pd-featured .custom-slider .item{ padding:4px 4px 20px; }
.products-range-section .custom-slider .item{ padding:4px 4px 20px; }
.custom-slider .product-card{ height:auto; }

/* Keep the < > arrows off the product cards - move them below the slider */
.pd-carousel-nav-fix{ position:relative; padding-bottom:56px; }
.pd-carousel-nav-fix .owl-stage-outer{ overflow:hidden; }
.pd-carousel-nav-fix .owl-nav{
    position:static !important;
    display:flex !important;
    justify-content:center;
    gap:14px;
    margin-top:22px !important;
}
.pd-carousel-nav-fix .owl-nav [class*="owl-"]{
    position:static !important;
    top:auto !important;
    left:auto !important;
    right:auto !important;
    transform:none !important;
    width:42px;
    height:42px;
    line-height:40px !important;
    text-align:center;
    background:#ffffff !important;
    border:1px solid #222222 !important;
    color:#222222 !important;
    border-radius:50%;
    font-size:18px;
    margin:0 !important;
    padding:0 !important;
}
.pd-carousel-nav-fix .owl-nav [class*="owl-"]:hover{
    background:#e2691c !important;
    border-color:#e2691c !important;
    color:#ffffff !important;
}
.pd-carousel-nav-fix .owl-dots{ position:static; text-align:center; margin-top:14px; }

/* On wide screens there's empty margin outside the boxed content -
   float the arrows out there, left/right of the section, instead of
   below the cards. Narrower screens keep the below-slider row above,
   since there's no outside margin to place them in without overlap. */
@media (min-width: 1350px){
    .pd-carousel-nav-fix{ padding-bottom:0; }
    .pd-carousel-nav-fix .owl-nav{
        position:absolute !important;
        top:50% !important;
        left:0;
        right:0;
        margin-top:0 !important;
        transform:translateY(-50%);
        justify-content:space-between;
        pointer-events:none;
        z-index:5;
    }
    .pd-carousel-nav-fix .owl-nav [class*="owl-"]{
        position:absolute !important;
        top:auto !important;
        pointer-events:auto;
    }
    .pd-carousel-nav-fix .owl-nav .owl-prev{ left:-60px !important; right:auto !important; }
    .pd-carousel-nav-fix .owl-nav .owl-next{ right:-60px !important; left:auto !important; }
}
.products-range-section .sec-title h2{ font-size: 32px; font-weight: 700; margin-bottom: 8px; }
.products-range-section .sec-title .text p{ color: #666666; font-size: 15px; margin: 0 0 30px; }

.product-card{
    position: relative; display: flex; flex-direction: column; height: 100%;
    background: #ffffff; border: 1px solid #e5e5e7; border-radius: 6px;
    overflow: hidden; transition: box-shadow 300ms ease, transform 300ms ease;
}
.product-card:hover{ box-shadow: 0 10px 25px rgba(0,0,0,0.08); transform: translateY(-3px); }
.product-card.is-active{ border-color:#e2691c; box-shadow:0 0 0 1px #e2691c; }
.product-card_img{
    display: flex; align-items: center; justify-content: center; height: 180px;
    padding: 20px; background: #fafafa; border-bottom: 1px solid #e5e5e7;
}
.product-card_img img{ max-height: 140px; width: auto; object-fit: contain; }
.product-card_img--placeholder{
    color:#bbb; font-size:13px;
    background:repeating-linear-gradient(45deg,#f5f5f5,#f5f5f5 10px,#efefef 10px,#efefef 20px);
}
.product-card_body{ padding: 18px 20px 20px; display: flex; flex-direction: column; flex-grow: 1; }
.product-card_body h3{ font-size: 18px; font-weight: 700; margin-bottom: 8px; }
.product-card_spec{ font-size: 13px; line-height: 1.5em; color: #6b6b6b; margin-bottom: 18px; flex-grow: 1; }
.product-card_actions{ display: flex; gap: 10px; }
.product-card_actions a{
    flex: 1; text-align: center; font-size: 14px; font-weight: 600;
    padding: 9px 10px; border-radius: 4px; transition: all 250ms ease; white-space: nowrap;
}
.product-card_actions--single a{ flex: none; width:100%; }

.pd-faq{ padding:60px 0; }
.pd-faq h2{ font-size:28px; font-weight:700; margin-bottom:24px; }
.pd-faq_list{ max-width:900px; }
.pd-faq_item{ border:1px solid #e5e5e7; border-radius:4px; margin-bottom:10px; overflow:hidden; }
.pd-faq_question{ display:flex; justify-content:space-between; align-items:center; padding:16px 20px; cursor:pointer; font-weight:600; font-size:15px; }
.pd-faq_icon{ position:relative; width:14px; height:14px; flex-shrink:0; margin-left:12px; }
.pd-faq_icon:before, .pd-faq_icon:after{ content:''; position:absolute; background:#e2691c; transition:transform 200ms ease; }
.pd-faq_icon:before{ top:6px; left:0; width:14px; height:2px; }
.pd-faq_icon:after{ top:0; left:6px; width:2px; height:14px; }
.pd-faq_item.is-open .pd-faq_icon:after{ transform:scaleY(0); }
.pd-faq_answer{ display:none; padding:0 20px 18px; }
.pd-faq_answer p{ margin:0; font-size:14px; color:#666; }
.pd-faq_item.is-open .pd-faq_answer{ display:block; }

.pd-cta{ background:#1b1f2a; color:#fff; padding:60px 0; }
.pd-cta h2{ font-size:26px; font-weight:700; margin-bottom:14px; }
.pd-cta p{ color:#c7c9d1; margin-bottom:20px; }
.pd-cta_contact{ list-style:none; padding:0; margin:0; font-size:14px; color:#c7c9d1; }
.pd-cta_contact li{ margin-bottom:8px; }
.pd-cta_contact a{ color:#fff; }
.pd-cta_form input, .pd-cta_form select, .pd-cta_form textarea{
    width:100%; margin-bottom:14px; padding:11px 14px; border-radius:4px;
    border:1px solid #3a3f4d; background:#242938; color:#fff; font-size:14px;
}
.pd-cta_form input::placeholder, .pd-cta_form textarea::placeholder{ color:#8a8fa0; }
.btn-cta-submit{ background:#e2691c; border:1px solid #e2691c; color:#fff; padding:12px 26px; border-radius:4px; font-weight:600; font-size:14px; }
.btn-cta-submit:hover{ background:#c9560f; border-color:#c9560f; }

@media(max-width:991px){
    .pd-hero h1{ font-size:30px; }
    .pd-hero_image{ margin-top:24px; }
}
</style>

<script>
$(document).ready(function () {
    $('.pd-faq_question').on('click', function () {
        var $item = $(this).closest('.pd-faq_item');
        $item.toggleClass('is-open');
        $item.find('.pd-faq_answer').slideToggle(200);
    });
});
</script>

<?php include ('include/footer.php') ?>