<?php
require_once('include/config.php');

// --- Fetch category by slug (e.g. category.php?slug=automotive-parts) ---
$slug = isset($_GET['slug']) ? trim($_GET['slug'], '/') : '';

$stmt = $conn->prepare("SELECT * FROM categories WHERE slug = ? AND status = 1 LIMIT 1");
$stmt->bind_param('s', $slug);
$stmt->execute();
$category = $stmt->get_result()->fetch_assoc();
$stmt->close();

if (!$category) {
    header('Location: ' . BASEURL . '404.php');
    exit;
}
include ('include/header.php');
// --- Fetch all active products in this category ---
$prod_stmt = $conn->prepare("SELECT * FROM products WHERE category_id = ? AND status = 1 ORDER BY pro_no ASC");
$prod_stmt->bind_param('i', $category['id']);
$prod_stmt->execute();
$products = $prod_stmt->get_result()->fetch_all(MYSQLI_ASSOC);
$prod_stmt->close();

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

<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image: url(<?php echo BASEURL; ?>assets/images/breadcrumb/breadcrumb-4.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="title wow slideInDown animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
                       <h2><?php echo htmlspecialchars($category['name']); ?></h2>
                    </div>
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
               <!-- No dedicated tagline column on categories table - reusing the category name here. Add a 'tagline' column if you want separate sub_title copy per category. -->
               <h5><?php echo htmlspecialchars($category['name']); ?></h5>
            </div>
            <h2><?php echo htmlspecialchars($category['name']); ?></h2>
         </div>

      </div>
        <div class="row">
          <?php if (!empty($products)): ?>
            <?php foreach ($products as $product): ?>
            <!-- Start Single Service Style3--->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-5">
                <div class="single-service-style3">
                    <a href="<?php echo BASEURL . htmlspecialchars($product['url']); ?>">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="<?php echo BASEURL; ?>assets/images/product/<?php echo (int)$product['pro_no']; ?>.png" alt="<?php echo htmlspecialchars($product['name']); ?>">
                            </div>
                        </div>
                        <div class="text-holder text-center">
                            <h2><?php echo htmlspecialchars($product['name']); ?></h2>
                        </div>
                    </a>
                </div>
            </div>
            <!--End Single Service Style3--->
            <?php endforeach; ?>
          <?php else: ?>
            <p>No products found in this category yet.</p>
          <?php endif; ?>
        </div>


        <div class="row" id="category-content">
         <div class="sustan-main-heading">
            <?php echo $category['bottom_description']; ?>
         </div>
      </div>

    </div>
</section>

<?php include ('include/footer.php') ?>