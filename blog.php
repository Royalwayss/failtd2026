<?php
require_once('admin/include/config.php');
 include ('include/header.php');

 ?>

<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image: url(assets/images/breadcrumb/breadcrumb-5.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="title wow slideInDown animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
                        <h2>Blog</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container home abt-home mt-5">
    <div class="row">
       <?php  $count =1;
                               $sql = "SELECT `id`,`title`,`blog_url`,`short_description`,`image`,`status`,`published_date`,`meta_title`,`meta_description`,`meta_keywords`,`created_at` FROM `blogs` where status = '1' ORDER BY `published_date` desc";
                              
                              
                              $result= mysqli_query($conn, $sql);
                              
                              while ($row = mysqli_fetch_assoc($result)) {
                              
                              if($_SERVER['HTTP_HOST'] == 'localhost'){
								   $blog_url =  $row['blog_url'];
								   $blog_url  = str_replace(".php", "", $blog_url);
							  }else{
								   $blog_url =  $row['blog_url'];
							  }
							  
							  
							  
							  
							  ?>
        <div class="col-sm-12 col-xs-12 col-12 blog-row mb-5">
            <h3> <?php echo $row['title']; ?></h3>
            <p> Published on: <?php echo date('d M, Y',strtotime($row['published_date'])); ?> </p>
            <p><?php echo $row['short_description']; ?></p>

            <div class="blogs-button">
                <a href="<?php echo $blog_url; ?>" class="black btn-blog">View
                    More <img src="img/long-arrow.png" class="img-responsive" alt="" title=""></a>
            </div>
        </div>
     <?php $count++;
                              } 
                              mysqli_free_result($result);
                              
                              
                              ?>

	   <br>
        <br>

    </div>
</div>

<?php include ('include/footer.php') ?>