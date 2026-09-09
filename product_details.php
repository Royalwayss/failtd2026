<?php

require_once('include/config.php');

// --- Fetch product by slug (routed here via .htaccess as product_details.php?slug=category-slug/product-slug) ---
$slug = isset($_GET['slug']) ? trim($_GET['slug'], '/') : '';

$stmt = $conn->prepare("SELECT * FROM products WHERE url = ? AND status = 1 LIMIT 1");
$stmt->bind_param('s', $slug);
$stmt->execute();
$product = $stmt->get_result()->fetch_assoc();
$stmt->close();

if (!$product) {
    //header('Location: ' . BASEURL . '404.php');
    //exit;
}
include ('include/header.php');
// --- Fetch parent category (for breadcrumb) ---
$cat_stmt = $conn->prepare("SELECT * FROM categories WHERE id = ? LIMIT 1");
$cat_stmt->bind_param('i', $product['category_id']);
$cat_stmt->execute();
$category = $cat_stmt->get_result()->fetch_assoc();
$cat_stmt->close();

// --- Fetch related products (same category, excluding current product) ---
$related_stmt = $conn->prepare("SELECT * FROM products WHERE category_id = ? AND id != ? AND status = 1 ORDER BY pro_no ASC LIMIT 6");
$related_stmt->bind_param('ii', $product['category_id'], $product['id']);
$related_stmt->execute();
$related_products = $related_stmt->get_result()->fetch_all(MYSQLI_ASSOC);
$related_stmt->close();

// --- Helper: render a stored block of paragraphs (separated by blank lines) as <p> tags ---
function render_paragraphs($text) {
    if (!$text) return '';
    $parts = preg_split("/\n\s*\n/", trim($text));
    $html = '';
    foreach ($parts as $p) {
        $html .= '<p>' . nl2br(htmlspecialchars(trim($p))) . '</p>' . "\n";
    }
    return $html;
}
?>
<div class="crumbs"><div class="wrap">
  <a href="<?php echo BASEURL; ?>">Home</a> &rsaquo; <a href="#">Products</a> &rsaquo; <a href="<?php echo BASEURL . htmlspecialchars($category['slug']); ?>"><?php echo htmlspecialchars($category['name']); ?></a> &rsaquo; <span><?php echo htmlspecialchars($product['name']); ?></span>
</div></div>

<!-- ================== PRODUCT TOP ================== -->
<div class="ptop"><div class="wrap">
 <div class="ptop-grid">
  <div class="gallery">
   <img src="<?php echo BASEURL; ?>assets/images/product/<?php echo (int)$product['pro_no']; ?>.png" alt="<?php echo htmlspecialchars($product['name']); ?> manufactured by Forge Auto International" width="600" height="600">
  </div>
  <div>
    <h1><?php echo htmlspecialchars($product['name']); ?></h1>
    <!-- No 'lede' column in products table yet - using meta_description as the short intro. Add a dedicated 'lede' column if you want different copy here. -->
    <p class="lede"><?php echo htmlspecialchars($product['meta_description']); ?></p>
    <h3>Product Specifications</h3>
    <table class="quickspec">
      <tr><th>Material / Grade</th><td><?php echo htmlspecialchars($product['material_grade']); ?></td></tr>
      <tr><th>Manufacturing Process</th><td><?php echo htmlspecialchars($product['manufacturing_process']); ?></td></tr>
      <tr><th>Primary Application</th><td><?php echo htmlspecialchars($product['primary_application']); ?></td></tr>
      <tr><th>Product Category</th><td><?php echo htmlspecialchars($product['product_category']); ?></td></tr>
      <!-- No 'customisation' column in products table yet - left as static copy. Add a 'customisation' column to make this per-product. -->
     <!-- <tr><th>Customisation</th><td>Customer drawings, dimensional tolerances, material specifications and application-specific requirements</td></tr> --->
    </table>

    <div class="ctas">
      <a class="btn btn-primary" href="#enquiry">Send your drawing</a>
      <a class="btn btn-line" href="https://wa.me/918999999195">WhatsApp us</a>
    </div>

    <!-- No dedicated 'assure' column - left as static copy. -->
    <p class="assure">Supplied to automotive OEMs, Tier 1 and Tier 2 suppliers and component distributors in India and international markets.</p>
  </div>
 </div>
</div></div>

<!-- ================== DESCRIPTION ================== -->
<div class="sec"><div class="wrap prose">
  <h2><?php echo htmlspecialchars($product['name']); ?></h2>
  <?php echo render_paragraphs($product['bottom_description1']); ?>
  <?php echo render_paragraphs($product['bottom_description2']); ?>
</div></div>

<!-- End About Style4 Area-->
<section class="team-style3-area pt-lg-0">
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
                    <a href="<?php echo BASEURL; ?>quality-policy.php#certi-id"><img src="<?php echo BASEURL; ?>assets/images/resources/1-logo.jpg" alt="img"
                            title="img"></a>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-4 col-lg-2 m-auto pb-4">
                <div class=" certi-border">
                    <a href="<?php echo BASEURL; ?>quality-policy.php#certi-id"><img src="<?php echo BASEURL; ?>assets/images/resources/2-logo.jpg" alt="img"
                            title="img"></a>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-4 col-lg-2 m-auto pb-4">
                <div class=" certi-border">
                    <a href="<?php echo BASEURL; ?>quality-policy.php#certi-id"><img src="<?php echo BASEURL; ?>assets/images/resources/3-logo.jpg" alt="img"
                            title="img"></a>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-4 col-lg-2 m-auto pb-4">
                <div class=" certi-border">
                    <a href="<?php echo BASEURL; ?>quality-policy.php#certi-id"><img src="<?php echo BASEURL; ?>assets/images/resources/4-logo.png" alt="img"
                            title="img"></a>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-4 col-lg-2 m-auto pb-4">
                <div class=" certi-border">
                    <a href="<?php echo BASEURL; ?>quality-policy.php#certi-id"><img src="<?php echo BASEURL; ?>assets/images/resources/5-logo.jpg" alt="img"
                            title="img"></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Start Project Style4 Area-->

<!-- Start Service Style4 Area -->
<section class="service-style4-area awards">

    <div class="container">
        <div class="sec-title style2 with_text text-center">
            <div class="sub-title">
                <span class="border-box"></span>
                <h5>Where Recognition Meets Excellence</h5>
            </div>
            <h2>AWARDS</h2>
            <!--  <div class="text">
                        <p>These honors inspire individuals and organizations to strive for greatness, fostering a culture of innovation, leadership, and progress. </p>
                    </div> -->
        </div>
        <div class="row">
            <div class="col-xl-4 col-sm-6 col-12">
                <!-- Start Single Service Style4--->
                <div class="single-service-style4">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="<?php echo BASEURL; ?>assets/images/resources/aw1.jpg" alt="img" title="img" />
                        </div>
                    </div>
                    <div class="text-holder">
                        <h3>Risk Management & Insurance Awards</h3>
                    </div>
                </div>
                <!--End Single Service Style4--->
            </div>
            <div class="col-xl-4 col-sm-6 col-12">
                <!-- Start Single Service Style4--->
                <div class="single-service-style4">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="<?php echo BASEURL; ?>assets/images/resources/aw2.jpg" alt="img" title="img" />
                        </div>
                    </div>
                    <div class="text-holder">
                        <h3>State Level Energy Conservation Awards</h3>
                    </div>
                </div>
                <!--End Single Service Style4--->
            </div>
            <div class="col-xl-4 col-sm-6 col-12">
                <!-- Start Single Service Style4--->
                <div class="single-service-style4">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="<?php echo BASEURL; ?>assets/images/resources/aw3.jpg" alt="img" title="img" />
                        </div>
                    </div>
                    <div class="text-holder">
                        <h3>Thinkers of Tomorrow by News 18 network</h3>
                    </div>
                </div>
                <!--End Single Service Style4--->
            </div>

        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="service-style4_more_service_button text-center">
                    <a class="btn-one" href="<?php echo BASEURL; ?>awards.php"><span class="txt">View More</span></a>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- End Service Style4 Area -->



<!-- ================== ENQUIRY ================== -->
<div class="sec enq" id="enquiry"><div class="wrap">
 <div class="enq-grid">
  <div>
    <h2>Request a quotation</h2>
    <p>Share your drawing or 3D model, material specification and annual volume. Our engineering team reviews feasibility and responds with tooling requirement, lead time and piece price.</p>
    <div class="contact">
      Phone: <a href="tel:+918999999195">+91 89999 99195</a><br>
      Email: <a href="mailto:info@failtd.com">info@failtd.com</a><br>
      Village Mangarh, Kohara-Machhiwara Road,<br>Ludhiana, Punjab 141001, India
    </div>
  </div>
  <div class="form">
    <form action="<?php echo BASEURL; ?>enquiry.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="product" value="<?php echo htmlspecialchars($product['name']); ?>">
      <div class="f2">
        <div class="field"><label for="n">Name</label><input id="n" name="name" required></div>
        <div class="field"><label for="c">Company</label><input id="c" name="company" required></div>
      </div>
      <div class="f2">
        <div class="field"><label for="e">Email</label><input id="e" type="email" name="email" required></div>
        <div class="field"><label for="p">Phone / WhatsApp</label><input id="p" name="phone"></div>
      </div>
      <div class="f2">
        <div class="field"><label for="co">Country</label><input id="co" name="country"></div>
        <div class="field"><label for="v">Annual volume</label><input id="v" name="volume" placeholder="e.g. 25,000 pcs"></div>
      </div>
      <div class="field"><label for="d">Drawing / 3D model (PDF, DWG, STEP)</label><input id="d" type="file" name="drawing"></div>
      <div class="field"><label for="m">Requirement details</label><textarea id="m" name="message" rows="3"></textarea></div>
      <button class="btn btn-primary" type="submit">Submit enquiry</button>
      <p class="fnote">Drawings are treated as confidential. We respond within one working day.</p>
    </form>
  </div>
 </div>
</div></div>

<!-- ================== RELATED PRODUCTS ================== -->
<div class="sec sec-alt"><div class="wrap">
  <h2>Related Products</h2>
  <p class="sec-lead">Every product links to a dedicated detail page with full specifications, materials and MOQ.</p>
  <div class="pcarousel">
    <button class="parrow prev" type="button" aria-label="Previous" data-track="rel">&lsaquo;</button>
    <div class="ptrack" id="rel">
    <?php if (!empty($related_products)): ?>
      <?php foreach ($related_products as $rp): ?>
      <div class="pcard">
        <div class="pcard-img">
          <img src="<?php echo BASEURL; ?>assets/images/product/<?php echo (int)$rp['pro_no']; ?>.png" alt="<?php echo htmlspecialchars($rp['name']); ?>">
        </div>
        <div class="pcard-body">
          <h3><?php echo htmlspecialchars($rp['name']); ?></h3>
          <p class="pcard-spec"><?php echo htmlspecialchars($rp['material_grade']); ?></p>
          <div class="pcard-btns">
            <a class="btn btn-line" href="<?php echo BASEURL . htmlspecialchars($rp['url']); ?>">View Details</a>
            <a class="btn btn-primary" href="<?php echo BASEURL . htmlspecialchars($rp['url']); ?>#enquiry">Get Quote</a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    <?php else: ?>
      <p>No related products found.</p>
    <?php endif; ?>
    </div>
    <button class="parrow next" type="button" aria-label="Next" data-track="rel">&rsaquo;</button>
  </div>
</div></div>


<?php include ('include/footer.php') ?>