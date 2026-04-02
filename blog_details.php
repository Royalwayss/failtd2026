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


<?php echo $blog['blog_content']; ?>


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