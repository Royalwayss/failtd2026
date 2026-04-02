<?php 
include('include/header.php');
$data = $_POST;
$title ='';
$editor_text ='';
if(isset($data['title'])){
	$title = $data['title'];
}
if(isset($data['editor'])){
	$editor_text = $data['editor'];
}
$published_date ='';
if(isset($data['published_date'])){
	$published_date = date('d M, Y',strtotime($data['published_date']));
}

$read_time ='';
if(isset($data['read_time'])){
	$read_time = $data['read_time'];
}


 ?>
 
 <section class="forge-new-blogs-detail-banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-12 m-auto text-start">
                <div class="blogs-new-banner-content">
                    <h2><?php echo $title; ?></h2>
                    <p class="text-white mt-2">Published on: <?php echo $published_date; ?> | <?php echo $read_time; ?></p>
                </div>

            </div>
        </div>
    </div>
</section>
 
 
 <div class="container-fluid">
 <?php echo $editor_text; ?>
</div>
<?php include('include/footer.php'); ?>