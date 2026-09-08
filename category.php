<?php include ('include/header.php') ?>

<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image: url(assets/images/breadcrumb/breadcrumb-4.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="title wow slideInDown animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
                        <h2>Products</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<?php
/*
 |--------------------------------------------------------------------------
 | Product data
 |--------------------------------------------------------------------------
 | Drop this into an include (e.g. include/products-data.php) once all 64
 | products are ready, or move it into a DB table later - the markup below
 | only reads from $products, so nothing else needs to change.
 |
 | Each item:
 |  slug     -> used to build the detail.php link (?slug=xxx)
 |  name     -> product title
 |  image    -> card thumbnail
 |  material -> e.g. "EN19 / 42CrMo4"
 |  weight   -> e.g. "0.8-12 kg"
 |  process  -> e.g. "Forged + CNC machined"
 |  category -> optional, for future filtering by product family
 */
$products = array(
    array(
        'slug'     => 'yoke-shaft-assembly',
        'name'     => 'Yoke Shaft Assembly',
        'image'    => 'https://www.failtd.com/assets/images/products/auto-parts/2.jpg',
        'material' => 'EN19 / 42CrMo4',
        'weight'   => '0.8-12 kg',
        'process'  => 'Forged + CNC machined',
        'category' => 'auto-parts',
    ),
    array(
        'slug'     => 'tie-rod-end',
        'name'     => 'Tie Rod End',
        'image'    => 'https://www.failtd.com/assets/images/products/auto-parts/7.jpg',
        'material' => 'C45 / EN8',
        'weight'   => '0.5-4 kg',
        'process'  => 'Forged + machined + assembled',
        'category' => 'tie-rods',
    ),
    array(
        'slug'     => 'gear-blank',
        'name'     => 'Gear Blank',
        'image'    => 'https://www.failtd.com/assets/images/products/auto-parts/12.jpg',
        'material' => '20MnCr5 / SAE 8620',
        'weight'   => '1-15 kg',
        'process'  => 'Iso-annealed, proof machined',
        'category' => 'auto-parts',
    ),
    array(
        'slug'     => 'wheel-hub',
        'name'     => 'Wheel Hub',
        'image'    => 'https://www.failtd.com/assets/images/products/auto-parts/14.jpg',
        'material' => 'EN9 / EN19',
        'weight'   => '2-18 kg',
        'process'  => 'Forged + fully machined',
        'category' => 'wheel-assembly',
    ),
    // ... add the remaining products here, same structure.
);
?>

<section class="service-style3-area service-page3 products-parts products-range-section">
    <div class="container-fluid">

        <div class="row" id="category-content">
            <div class="sec-title">
                <div class="sub-title">
                    <span class="border-box"></span>
                </div>
                <h2>Auto Parts Range</h2>
                <div class="text">
                    <p>Every product links to a dedicated detail page with full specifications, materials and MOQ.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <?php foreach ($products as $product) : ?>
            <!-- Start Single Product Card -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-4">
                <div class="product-card">
                    <div class="product-card_img">
                        <img src="<?php echo $product['image']; ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
                    </div>
                    <div class="product-card_body">
                        <h3><?php echo htmlspecialchars($product['name']); ?></h3>
                        <p class="product-card_spec">
                            <?php echo htmlspecialchars($product['material']); ?> &middot;
                            <?php echo htmlspecialchars($product['weight']); ?> &middot;
                            <?php echo htmlspecialchars($product['process']); ?>
                        </p>
                        <div class="product-card_actions">
                            <a class="btn-view-details" href="detail.php?slug=<?php echo urlencode($product['slug']); ?>">View Details</a>
                            <a class="btn-get-quote" href="get-enquiry.php?product=<?php echo urlencode($product['name']); ?>">Get Quote</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Product Card -->
            <?php endforeach; ?>
        </div>

    </div>
</section>

<style>
/* Product range grid - category.php */
.products-range-section .sec-title h2{
    font-size: 32px;
    font-weight: 700;
    margin-bottom: 8px;
}
.products-range-section .sec-title .text p{
    color: #666666;
    font-size: 15px;
    margin: 0;
}

.product-card{
    position: relative;
    display: flex;
    flex-direction: column;
    height: 100%;
    background: #ffffff;
    border: 1px solid #e5e5e7;
    border-radius: 6px;
    overflow: hidden;
    transition: box-shadow 300ms ease, transform 300ms ease;
}
.product-card:hover{
    box-shadow: 0 10px 25px rgba(0,0,0,0.08);
    transform: translateY(-3px);
}
.product-card_img{
    display: flex;
    align-items: center;
    justify-content: center;
    height: 180px;
    padding: 20px;
    background: #fafafa;
    border-bottom: 1px solid #e5e5e7;
}
.product-card_img img{
    max-height: 140px;
    width: auto;
    object-fit: contain;
}
.product-card_body{
    padding: 18px 20px 20px;
    display: flex;
    flex-direction: column;
    flex-grow: 1;
}
.product-card_body h3{
    font-size: 18px;
    font-weight: 700;
    margin-bottom: 8px;
}
.product-card_spec{
    font-size: 13px;
    line-height: 1.5em;
    color: #6b6b6b;
    margin-bottom: 18px;
    flex-grow: 1;
}
.product-card_actions{
    display: flex;
    gap: 10px;
}
.product-card_actions a{
    flex: 1;
    text-align: center;
    font-size: 14px;
    font-weight: 600;
    padding: 9px 10px;
    border-radius: 4px;
    transition: all 250ms ease;
    white-space: nowrap;
}
.btn-view-details{
    background: #ffffff;
    border: 1px solid #222222;
    color: #222222;
}
.btn-view-details:hover{
    background: #222222;
    color: #ffffff;
}
.btn-get-quote{
    background: #e2691c;
    border: 1px solid #e2691c;
    color: #ffffff;
}
.btn-get-quote:hover{
    background: #c9560f;
    border-color: #c9560f;
    color: #ffffff;
}

@media(max-width: 991px){
    .product-card_img{ height: 160px; }
}
@media(max-width: 767px){
    .product-card_actions{ flex-direction: column; }
}
</style>

<?php include ('include/footer.php') ?>
