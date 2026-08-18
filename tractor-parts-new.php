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
                <span class="landing-new-forge-eyebrow" id="landing-new-forge-dyn-eyebrow">Tractor Parts</span>
                <h1 id="landing-new-forge-dyn-h1">Heavy-Duty <em>Tractor Parts</em>  Engineered for Tough Field Performance Daily</h1>
                <p class="landing-new-forge-lead" id="landing-new-forge-dyn-lead">Engineered for tough fields and heavy workloads, our tractor parts support durability, uptime and dependable performance across agricultural operations.</p>
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
                <?php $ad_category_default = 'Tractor Parts'; include('include/enquiry-form.php'); ?>
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
               <h5>Heavy-Duty Tractor Solutions</h5>
            </div>
            <h2>Tractor Parts</h2>
         </div>
         
      </div>
        <div class="row">
            <!-- Start Single Service Style3--->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-5">                       
                <div class="single-service-style3">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="assets/images/products/tractor-parts/1.jpg" alt="">
                        </div>
                    </div>
                    <div class="text-holder text-center">
                        <h2>Locking Block</h2>
                    </div>
                </div>
            </div>
            <!--End Single Service Style3--->
            <!-- Start Single Service Style3--->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-5">                       
                <div class="single-service-style3">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="assets/images/products/tractor-parts/2.jpg" alt="">
                        </div>
                    </div>
                    <div class="text-holder text-center">
                        <h2>Double Arm</h2>
                    </div>
                </div>
            </div>
            <!--End Single Service Style3--->
            <!-- Start Single Service Style3--->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-5">                       
                <div class="single-service-style3">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="assets/images/products/tractor-parts/3.jpg" alt="">
                        </div>
                    </div>
                    <div class="text-holder text-center">
                        <h2>Ring</h2>
                    </div>
                </div>
            </div>
            <!--End Single Service Style3--->
            <!-- Start Single Service Style3--->
        <!--     <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-5">                       
                <div class="single-service-style3">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="assets/images/products/tractor-parts/4.jpg" alt="">
                        </div>
                    </div>
                    <div class="text-holder text-center">
                        <h2>AI 4</h2>
                    </div>
                </div>
            </div> -->
            <!--End Single Service Style3--->
            <!-- Start Single Service Style3--->
            <!-- <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-5">                       
                <div class="single-service-style3">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="assets/images/products/tractor-parts/5.jpg" alt="">
                        </div>
                    </div>
                    <div class="text-holder text-center">
                        <h2>Gear</h2>
                    </div>
                </div>
            </div> -->
            <!--End Single Service Style3--->
            <!-- Start Single Service Style3--->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-5">                       
                <div class="single-service-style3">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="assets/images/products/tractor-parts/6.jpg" alt="">
                        </div>
                    </div>
                    <div class="text-holder text-center">
                        <h2>Blank Gear</h2>
                    </div>
                </div>
            </div>
            <!--End Single Service Style3--->
            <!-- Start Single Service Style3--->
            <!-- <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-5">                       
                <div class="single-service-style3">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="assets/images/products/tractor-parts/7.jpg" alt="">
                        </div>
                    </div>
                    <div class="text-holder text-center">
                        <h2>Blank Gear</h2>
                    </div>
                </div>
            </div> -->
            <!--End Single Service Style3--->
            <!-- Start Single Service Style3--->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-5">                       
                <div class="single-service-style3">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="assets/images/products/tractor-parts/8.jpg" alt="">
                        </div>
                    </div>
                    <div class="text-holder text-center">
                        <h2>Stub Axle Assembly</h2>
                    </div>
                </div>
            </div>
            <!--End Single Service Style3--->
            <!-- Start Single Service Style3--->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-5">                       
                <div class="single-service-style3">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="assets/images/products/tractor-parts/9.jpg" alt="">
                        </div>
                    </div>
                    <div class="text-holder text-center">
                        <h2>Sleeve</h2>
                    </div>
                </div>
            </div>
            <!--End Single Service Style3--->
            <!-- Start Single Service Style3--->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-5">                       
                <div class="single-service-style3">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="assets/images/products/tractor-parts/10.jpg" alt="">
                        </div>
                    </div>
                    <div class="text-holder text-center">
                        <h2>Lift Arm</h2>
                    </div>
                </div>
            </div>
            <!--End Single Service Style3--->
            <!-- Start Single Service Style3--->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-5">                       
                <div class="single-service-style3">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="assets/images/products/tractor-parts/11.jpg" alt="">
                        </div>
                    </div>
                    <div class="text-holder text-center">
                        <h2>Lift Arm

                        </h2>
                    </div>
                </div>
            </div>
            <!--End Single Service Style3--->
            <!-- Start Single Service Style3--->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-5">                       
                <div class="single-service-style3">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="assets/images/products/tractor-parts/12.jpg" alt="">
                        </div>
                    </div>
                    <div class="text-holder text-center">
                        <!-- <h2>AI 12 </h2> -->
                        <h2>Stub Axle</h2>
                    </div>
                </div>
            </div>
            <!--End Single Service Style3--->
            <!-- Start Single Service Style3--->
            <!-- <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-5">                       
                <div class="single-service-style3">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="assets/images/products/tractor-parts/13.jpg" alt="">
                        </div>
                    </div>
                    <div class="text-holder text-center">
                       
                        <h2>Crank</h2>
                    </div>
                </div>
            </div> -->
            <!--End Single Service Style3--->
            <!-- Start Single Service Style3--->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-5">                       
                <div class="single-service-style3">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="assets/images/products/tractor-parts/14.jpg" alt="">
                        </div>
                    </div>
                    <div class="text-holder text-center">
                        <h2>Arm</h2>
                    </div>
                </div>
            </div>
            <!--End Single Service Style3--->
            <!-- Start Single Service Style3--->
            <!-- <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-5">                       
                <div class="single-service-style3">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="assets/images/products/tractor-parts/15.jpg" alt="">
                        </div>
                    </div>
                    <div class="text-holder text-center">
                        <h2>AI 15</h2>
                    </div>
                </div>
            </div> -->
            <!--End Single Service Style3--->
            <!-- Start Single Service Style3--->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-5">                       
                <div class="single-service-style3">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="assets/images/products/tractor-parts/16.jpg" alt="">
                        </div>
                    </div>
                    <div class="text-holder text-center">
                        <h2>Crank</h2>
                    </div>
                </div>
            </div>
            <!--End Single Service Style3--->
            <!-- Start Single Service Style3--->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-5">                       
                <div class="single-service-style3">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="assets/images/products/tractor-parts/17.jpg" alt="">
                        </div>
                    </div>
                    <div class="text-holder text-center">
                        <h2>Rear Hub</h2>
                    </div>
                </div>
            </div>
            <!--End Single Service Style3--->
            <!-- Start Single Service Style3--->
            <!-- <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-5">                       
                <div class="single-service-style3">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="assets/images/products/tractor-parts/18.jpg" alt="">
                        </div>
                    </div>
                    <div class="text-holder text-center">
                        <h2>AI 18</h2>
                    </div>
                </div>
            </div> -->
            <!--End Single Service Style3--->
            <!-- Start Single Service Style3--->
            <!-- <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-5">                       
                <div class="single-service-style3">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="assets/images/products/tractor-parts/19.jpg" alt="">
                        </div>
                    </div>
                    <div class="text-holder text-center">
                        <h2>AI 19</h2>
                    </div>
                </div>
            </div> -->
            <!--End Single Service Style3---> <!-- Start Single Service Style3--->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-5">                       
                <div class="single-service-style3">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="assets/images/products/tractor-parts/20.jpg" alt="">
                        </div>
                    </div>
                    <div class="text-holder text-center">
                        <h2>Connecting Rod</h2>
                    </div>
                </div>
            </div>
            <!--End Single Service Style3---> <!-- Start Single Service Style3--->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-5">                       
                <div class="single-service-style3">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="assets/images/products/tractor-parts/21.jpg" alt="">
                        </div>
                    </div>
                    <div class="text-holder text-center">
                        <h2>Steering Arm</h2>
                    </div>
                </div>
            </div>
            <!--End Single Service Style3--->
        </div>
		 <div class="row" id="category-content">
        
         <div class="sustan-main-heading">
             <p>We manufacture heavy-duty tractor components designed to operate under extreme loads, harsh terrains and variable climates. </p>
			 <p>Our forged tractor parts include lift arms, stub axles, steering arms, gears, shafts and drivetrain elements built for strength, wear resistance and long-term durability. </p>
			 <p>Using alloy and carbon steels, controlled heat treatment and precision machining, we ensure high fatigue life and dimensional consistency. </p>
			 <p>Our solutions support agricultural OEMs seeking dependable, high-performance components that deliver consistent field performance season after season.</p>
         </div>
      </div>
    </div>
</section>

<?php include ('include/footer.php') ?>
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
            eyebrow: "Forged 5th Wheel Assembly B7 India",
            h1: 'Forged <em>5th Wheel Assembly</em> Components',
            lead: "Precision forged and machined 5th wheel assembly components for heavy-duty commercial vehicles.",
            select: "5th Wheel Assembly"
        },
        "oil-links": {
            eyebrow: "Oil & Gas Forgings B7 India",
            h1: 'Forged <em>Oil & Gas</em> Components',
            lead: "High-integrity forged parts for the oil and gas industry, designed for extreme pressure and durability.",
            select: "Oil & Gas"
        },
        "ring-rolling": {
            eyebrow: "Ring Rolling Manufacturer B7 India",
            h1: 'Forged <em>Ring Rolling</em> Components',
            lead: "Seamless rolled rings and forged rings for gears, bearings, and heavy industrial machinery.",
            select: "Ring Rolling"
        },
        "tie-rods": {
            eyebrow: "Tie Rod Manufacturer B7 India",
            h1: 'Forged <em>Tie Rods</em> &amp; Wheel Assembly Components',
            lead: "OEM-approved forged tie rods and wheel assembly components for automotive and tractor applications.",
            select: "Tie Rods"
        }
    };

    function updateBannerContent(catKey) {
        var c = CATS[catKey];
        if (!c) return false;

        document.getElementById("landing-new-forge-dyn-eyebrow").textContent = c.eyebrow;
        document.getElementById("landing-new-forge-dyn-h1").innerHTML = c.h1;
        document.getElementById("landing-new-forge-dyn-lead").textContent = c.lead;
        
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

    var cat = new URLSearchParams(location.search).get("cat");
    if (cat) {
        updateBannerContent(cat);
    }
})();
</script> -->