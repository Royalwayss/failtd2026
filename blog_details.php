<?php 
require_once('admin/include/config.php');

$sql = "SELECT *  FROM blogs where status = '1' and blog_url='".@$_REQUEST['slug'].".php'"; 
$result =mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);  
if(empty($row)){ 
	http_response_code(404);
	include '404.php';
	exit;
}else{
	$blog = $row;
}



include('include/header.php');


 ?>
<style>
  .blog-ul {
    margin-left: 50px;
    margin-bottom: 30px;
  }

  .blog-ul li {
    list-style: disc !important;
  }

  .blog-ul li::marker {
    color: #ec7d1b;
  }
</style>
<!-- <div class="container-fluid inner-content-style">
    <img src="assets/images/new-blogs/blog-1-new.png">
</div> -->
<section class="forge-new-blogs-detail-banner">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-lg-12 m-auto text-start">
        <div class="blogs-new-banner-content">
          <h2><?php echo $blog['title']; ?></h2>
          <p class="text-white mt-2">Published on: <?php echo date('d M, Y',strtotime($blog['published_date'])); ?> | <?php echo $blog['read_time']; ?></p>
        </div>

      </div>
    </div>
  </div>
</section>
<section class="about-style1-area about-page1">
    <div class="container">
        <div class="row">
                <div class="about-style1-content-box about-page1_content_box text-right-rtl">
                    <div class="sec-title">
                       
                        <h2><?php echo $blog['title']; ?></h2>
                    </div>
				</div>
            </div>
    </div>
</section> 
<?php echo $blog['blog_content']; ?>
<?php //include('blog_content.php'); ?>

<?php include('include/footer.php'); ?>

<script>
  $(document).ready(function() {
    $('.social-blogs-new').html('');
    var socialContent = `
        <h5>Share :</h5>
        <ul class="d-flex">
            <li>
                <a href="http://instagram.com/forgeautointernational.ltd?igsh=aGFhMng4cjJ0a3J6" target="_blank">
                    <i class="fa fa-instagram"></i>
                </a>
            </li>
            <li>
                <a href="https://www.facebook.com/forgeautointernationallimited" target="_blank">
                    <i class="fa fa-facebook"></i>
                </a>
            </li>
            <li>
                <a href="https://www.linkedin.com/company/forgeautointernational/" target="_blank">
                    <i class="fa fa-linkedin-square"></i>
                </a>
            </li>
        </ul>
    `;
    $('.social-blogs-new').html(socialContent);
  });
</script>